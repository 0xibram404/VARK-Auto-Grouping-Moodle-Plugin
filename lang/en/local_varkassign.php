<?php
$string['pluginname'] = 'VARK Auto Grouping';
$string['settings_heading'] = 'VARK Grouping Settings';
$string['settings_desc'] = 'Define the group names that students will be assigned to based on their highest VARK score.';
$string['group_v'] = 'Visual Group Name';
$string['group_v_desc'] = 'The exact name of the group for Visual learners (e.g., Vark_V).';
$string['group_a'] = 'Auditory Group Name';
$string['group_a_desc'] = 'The exact name of the group for Auditory learners (e.g., Vark_A).';
$string['group_r'] = 'Read/Write Group Name';
$string['group_r_desc'] = 'The exact name of the group for Read/Write learners (e.g., Vark_R).';
$string['group_k'] = 'Kinesthetic Group Name';
$string['group_k_desc'] = 'The exact name of the group for Kinesthetic learners (e.g., Vark_K).';


$string['instructions_heading'] = 'Usage Guide: ';
$string['instructions_desc'] = '
<div style="direction: rtl; text-align: right; background-color: #e2eef9; padding: 15px; border-radius: 5px; border-right: 5px solid #007bff; margin-bottom: 20px; color: #004085;">
    <h4 style="margin-top:0; color: #0056b3;">💡 كيف تستخدم هذه الإضافة بنجاح؟</h4>
    <ol style="line-height: 1.8;">
        <li><strong>إعداد المجموعات:</strong> قم بإنشاء 4 مجموعات في مقررك الدراسي بنفس الأسماء المحددة في الإعدادات بالأسفل.</li>
        <li><strong>إعداد الاستبيان:</strong> أضف نشاط (Questionnaire)، وتأكد من استخدام نوع الأسئلة <strong>مربعات الاختيار (Check Boxes)</strong> حصراً.</li>
        <li><strong>صياغة الإجابات (الشرط الأهم):</strong> لكي يقرأ النظام الإجابات بشكل صحيح دون تشتيت الطالب، استخدم صيغة <code>الحرف::النص</code> لخيارات الإجابة.<br>
        <em>أمثلة يجب نسخ تنسيقها:</em><br>
        <code dir="ltr" style="background: #fff; padding: 2px 6px; border-radius: 3px;">V:: أفضل رؤية المخططات والرسوم</code><br>
        <code dir="ltr" style="background: #fff; padding: 2px 6px; border-radius: 3px;">A:: أفضل الاستماع إلى الشرح الصوتي</code><br>
        <code dir="ltr" style="background: #fff; padding: 2px 6px; border-radius: 3px;">R:: أفضل قراءة النصوص المكتوبة</code><br>
        <code dir="ltr" style="background: #fff; padding: 2px 6px; border-radius: 3px;">K:: أفضل التطبيق العملي بيدي</code><br>
        <small style="color: #666;">* استخدام (::) يجعل الحرف مخفياً عن الطالب ويقرأه النظام البرمجي فقط.</small></li>
    </ol>
</div>';