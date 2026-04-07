<?php
$string['pluginname'] = 'توجيه VARK التلقائي';
$string['settings_heading'] = 'إعدادات مجموعات VARK';
$string['settings_desc'] = 'حدد أسماء المجموعات التي سيتم توزيع الطلاب عليها بناءً على أعلى درجة في مقياس VARK.';
$string['group_v'] = 'اسم مجموعة البصري (V)';
$string['group_v_desc'] = 'الاسم الدقيق للمجموعة المخصصة للمتعلمين البصريين (مثال: Vark_V).';
$string['group_a'] = 'اسم مجموعة السمعي (A)';
$string['group_a_desc'] = 'الاسم الدقيق للمجموعة المخصصة للمتعلمين السمعيين (مثال: Vark_A).';
$string['group_r'] = 'اسم مجموعة القراءة/الكتابة (R)';
$string['group_r_desc'] = 'الاسم الدقيق للمجموعة المخصصة لنمط القراءة والكتابة (مثال: Vark_R).';
$string['group_k'] = 'اسم مجموعة الحركي (K)';
$string['group_k_desc'] = 'الاسم الدقيق للمجموعة المخصصة للمتعلمين الحركيين (مثال: Vark_K).';


$string['instructions_heading'] = 'دليل الاستخدام (Usage Guide)';
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