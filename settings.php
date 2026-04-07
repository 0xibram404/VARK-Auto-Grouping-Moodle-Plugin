<?php
defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_varkassign', get_string('pluginname', 'local_varkassign'));

    $settings->add(new admin_setting_heading(
        'local_varkassign/header',
        get_string('settings_heading', 'local_varkassign'),
        get_string('settings_desc', 'local_varkassign')
    ));

    // إعداد اسم مجموعة Visual
    $settings->add(new admin_setting_configtext(
        'local_varkassign/group_v',
        get_string('group_v', 'local_varkassign'),
        get_string('group_v_desc', 'local_varkassign'),
        'Vark_V', // القيمة الافتراضية
        PARAM_TEXT
    ));

    // إعداد اسم مجموعة Auditory
    $settings->add(new admin_setting_configtext(
        'local_varkassign/group_a',
        get_string('group_a', 'local_varkassign'),
        get_string('group_a_desc', 'local_varkassign'),
        'Vark_A',
        PARAM_TEXT
    ));

    // إعداد اسم مجموعة Read/Write
    $settings->add(new admin_setting_configtext(
        'local_varkassign/group_r',
        get_string('group_r', 'local_varkassign'),
        get_string('group_r_desc', 'local_varkassign'),
        'Vark_R',
        PARAM_TEXT
    ));

    // إعداد اسم مجموعة Kinesthetic
    $settings->add(new admin_setting_configtext(
        'local_varkassign/group_k',
        get_string('group_k', 'local_varkassign'),
        get_string('group_k_desc', 'local_varkassign'),
        'Vark_K',
        PARAM_TEXT
    ));

    $ADMIN->add('localplugins', $settings);
}