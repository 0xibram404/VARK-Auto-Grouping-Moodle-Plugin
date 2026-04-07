<?php
namespace local_varkassign;

defined('MOODLE_INTERNAL') || die();

class observer {
    public static function observe_submission(\mod_questionnaire\event\attempt_submitted $event) {
        global $DB, $CFG;

        try {
            $data = $event->get_data();
            $userid = $data['relateduserid'];
            $courseid = $data['courseid'];
            
            // Fetch plugin settings
            $config = get_config('local_varkassign');
            $group_map = [
                'V' => !empty($config->group_v) ? trim($config->group_v) : 'Vark_V',
                'A' => !empty($config->group_a) ? trim($config->group_a) : 'Vark_A',
                'R' => !empty($config->group_r) ? trim($config->group_r) : 'Vark_R',
                'K' => !empty($config->group_k) ? trim($config->group_k) : 'Vark_K'
            ];

            // Identify context and questionnaire
            $context = $event->get_context();
            $cm = get_coursemodule_from_id('questionnaire', $context->instanceid, 0, false, MUST_EXIST);
            $questionnaireid = $cm->instance;

            // Find completed response ID
            $rid = isset($data['objecttableid']) ? $data['objecttableid'] : null;
            if (empty($rid)) {
                $sql_get_rid = "SELECT MAX(id) FROM {questionnaire_response} WHERE questionnaireid = :qid AND userid = :uid AND complete = 'y'";
                $rid = $DB->get_field_sql($sql_get_rid, ['qid' => $questionnaireid, 'uid' => $userid]);
            }
            if (!$rid) return;

            // Fetch answers
            $sql = "SELECT c.content FROM {questionnaire_resp_multiple} rm JOIN {questionnaire_quest_choice} c ON c.id = rm.choice_id WHERE rm.response_id = :rid";
            $answers = $DB->get_fieldset_sql($sql, ['rid' => $rid]);
            if (empty($answers)) return;

            // Calculate VARK scores
            $scores = ['V' => 0, 'A' => 0, 'R' => 0, 'K' => 0];
            foreach ($answers as $ans) {
                $char = strtoupper(substr(trim($ans), 0, 1));
                if (array_key_exists($char, $scores)) $scores[$char]++;
            }

            // Determine winning styles
            $max_score = max($scores);
            if ($max_score == 0) return;
            $winning_styles = array_keys($scores, $max_score);

            $target_group_names = [];
            foreach ($winning_styles as $style) {
                if (isset($group_map[$style])) $target_group_names[] = $group_map[$style];
            }

            // Match and execute group assignment
            require_once($CFG->dirroot . '/group/lib.php');
            $course_groups = groups_get_all_groups($courseid);
            
            $target_group_ids = [];
            $all_vark_group_ids = [];

            foreach ($course_groups as $g) {
                $db_name = trim($g->name);
                foreach ($group_map as $key => $map_name) {
                    if (strcasecmp($db_name, trim($map_name)) === 0) {
                        $all_vark_group_ids[] = $g->id;
                        if (in_array($map_name, $target_group_names)) {
                            $target_group_ids[] = $g->id;
                        }
                    }
                }
            }

            if (empty($target_group_ids)) return;

            // Remove from old VARK groups, add to new ones
            foreach ($all_vark_group_ids as $gid) groups_remove_member($gid, $userid);
            foreach ($target_group_ids as $gid) groups_add_member($gid, $userid);

            // Clear cache
            $cache = \cache::make('core', 'user_group_groupings');
            $cache->delete($userid);
            \context_course::instance($courseid)->mark_dirty();

        } catch (\Exception $e) {
            // Silently catch exceptions to prevent breaking the questionnaire submission process
        }
    }
}