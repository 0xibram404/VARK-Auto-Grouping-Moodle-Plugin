# 🎓 VARK Auto Grouping for Moodle (local_varkassign)

![Moodle Plugin](https://img.shields.io/badge/Moodle-Plugin-orange) ![Type](https://img.shields.io/badge/Type-Local-blue) ![License](https://img.shields.io/badge/License-GPLv3-green)

A local Moodle plugin that automatically assigns students to groups based on their learning styles (Visual, Auditory, Read/Write, Kinesthetic) derived from a **Questionnaire** submission.

This plugin listens to **[mod_questionnaire](https://moodle.org/plugins/mod_questionnaire)** submission events, calculates the scores for V, A, R, and K based on the answers, and places the student into the corresponding Moodle group(s).

## ✨ Features

* **Automatic Sorting:** Instantly assigns students to Moodle groups upon questionnaire submission.
* **Tie Handling (Multimodal):** If a student has equal high scores (e.g., Visual = 10, Auditory = 10), they are added to **both** groups to access multiple learning paths.
* **Dynamic Calculation:** Detects the learning style based on the first letter of the answer (e.g., answers starting with "V...", "A...").
* **Clean Slate:** Automatically removes the student from previous VARK groups before assigning new ones (supports retaking the test).
* **Fully Configurable:** Admins can define custom group names in the plugin settings to match their course groups (No hardcoding).
* **Cache Clearing:** Forces Moodle to refresh user group data immediately so restricted content appears without delay.

## 📋 Prerequisites

1.  **Moodle 3.9+ or 4.x**.
2.  **[Questionnaire Plugin (mod_questionnaire)](https://moodle.org/plugins/mod_questionnaire)** must be installed and enabled.
3.  The Questionnaire activity must use **Check Boxes** question type.
4.  **Answer Format:** The answers in your questionnaire **must** start with the corresponding letter (`V`, `A`, `R`, `K`) for the plugin to detect them.
    * *Example:* `V::I prefer seeing diagrams...` or simply `Visual option...`

## 🛠️ Installation

### Option 1: Install via ZIP (Recommended)
1.  Download the `local_varkassign.zip` file.
2.  Log in to your Moodle site as an Administrator.
3.  Go to **Site administration** > **Plugins** > **Install plugins**.
4.  Upload the ZIP file and click **Install plugin from the ZIP file**.
5.  Follow the on-screen instructions.

### Option 2: Manual Install
1.  Upload the `varkassign` folder to the `/local/` directory of your Moodle installation.
2.  Go to **Site administration** > **Notifications** to trigger the installation.

## ⚙️ Configuration

1.  Go to **Site administration** > **Plugins** > **Local plugins** > **VARK Auto Grouping**.
2.  Enter the **exact names** of the groups created in your course.
    * Default: `Vark_V`, `Vark_A`, `Vark_R`, `Vark_K`.
3.  Save changes.

## 🚀 Usage Guide for Teachers

1.  **Create Groups:** Inside your course, create 4 groups corresponding to the VARK styles (names must match the plugin settings).
2.  **Create Questionnaire:** Add a Questionnaire activity.
    * You can find the standard questions on the **[Official VARK Website](https://vark-learn.com/home-arabic/)**.
    * Add questions using **Check Boxes**.
    * **Important:** Ensure answer options start with V, A, R, or K.
3.  **Restrict Content:**
    * Create sections or activities for each learning style.
    * Use **Restrict Access** > **Group** settings.
    * Set the restriction to the specific group (e.g., *Group must be Vark_V*).
    * Click the "eye" icon to **hide completely** if the user is not a member.
4.  **Test:** When a student submits the questionnaire, they will instantly see the content tailored to their style!

---

# 🇪🇬 إضافة التوجيه التلقائي لمقياس VARK (عربي)

إضافة برمجية لنظام مودل (Moodle) تقوم بتوزيع الطلاب تلقائياً على مجموعات (بصري، سمعي، قرائي، حركي) بناءً على نتائج استبيان **[mod_questionnaire](https://moodle.org/plugins/mod_questionnaire)**.

تقوم الإضافة بمراقبة تسليم الاستبيان، وحساب الدرجات لكل نمط، ثم إضافة الطالب للمجموعة التي حصل فيها على أعلى درجة.

## ✨ المميزات الأساسية
* **توزيع فوري:** يتم توزيع الطالب بمجرد ضغط "تسليم" في الاستبيان.
* **دعم التعادل:** في حال تساوى الطالب في نمطين (مثلاً بصري وسمعي)، يتم إضافته للمجموعتين معاً (دعم التعليم متعدد الأنماط).
* **تحديث ذكي:** تقوم الإضافة بحذف الطالب من أي مجموعة VARK سابقة قبل إضافته للمجموعة الجديدة (يدعم إعادة المحاولة).
* **إعدادات مرنة:** يمكن لمدير النظام تغيير أسماء المجموعات من لوحة التحكم دون الحاجة لتعديل الكود البرمجي.
* **تحديث الكاش:** تجبر النظام على تحديث صلاحيات الطالب فوراً لظهور المحتوى المقيد (Restrict Access) دون تأخير.

## ⚙️ طريقة الاستخدام للمعلمين
1.  أنشئ 4 مجموعات داخل المقرر بأسماء (Vark_V, Vark_A, Vark_R, Vark_K) أو حسب الأسماء التي حددتها في إعدادات الإضافة.
2.  أنشئ استبيان VARK باستخدام نشاط الاستبيان (Questionnaire).
    * يمكنك الحصول على نص الأسئلة المعتمد من **[موقع VARK الرسمي](https://vark-learn.com/home-arabic/)**.
    * استخدم نوع الأسئلة **"مربعات الاختيار" (Check Boxes)**.
    * تأكد أن خيارات الإجابة تبدأ بالحروف المميزة (V, A, R, K).
3.  قم بتقييد المحتوى التعليمي (ملفات، روابط، أقسام كاملة) باستخدام خاصية **Restrict Access** واجعلها متاحة فقط للمجموعة المناسبة.
4.  عند تسليم الطالب للاستبيان، سيقوم النظام تلقائياً بوضعه في المجموعة المناسبة وسيظهر له المحتوى الخاص بنمطه فوراً.

---

**Developed by:** Dr. Ibrahim M. Rashad
**License:** GPLv3
