<?php
defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname'   => '\mod_questionnaire\event\attempt_submitted',
        'callback'    => '\local_varkassign\observer::observe_submission',
    ],
];