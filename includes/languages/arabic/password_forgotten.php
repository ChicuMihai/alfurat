<?php
/*
  $Id: password_forgotten.php for Arabic 2012-02-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/


define('NAVBAR_TITLE_1', 'دخول');
define('NAVBAR_TITLE_2', 'نسيت كلمة السر');

define('HEADING_TITLE', 'لقد نسيت كلمة السر!');

define('TEXT_MAIN', 'إذا كنت قد نسيت كلمة المرور، أدخل عنوان البريد الإلكتروني الخاص بك أدناه، وسوف نرسل لك إرشادات حول كيفية تغيير كلمة السر بشكل آمن.');

define('TEXT_PASSWORD_RESET_INITIATED', 'يرجى التحقق من البريد الإلكتروني الخاص بك للحصول على إرشادات حول كيفية تغيير كلمة السر الخاصة بك. الإرشادات تحتوي على ارتباط صالحة فقط لمدة 24 ساعة أو حتى تم تحديث كلمة السر الخاصة بك.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'خطأ: لم يتم العثور على عنوان البريد الإلكتروني في سجلاتنا، يرجى المحاولة مرة أخرى.');

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - كلمة السر الجديدة');
define('EMAIL_PASSWORD_RESET_BODY', 'وقد طلب كلمة مرور جديدة لحسابك في ' . STORE_NAME . '.' . "\n\n" . 'يرجى اتباع هذا الرابط الشخصية لتغيير كلمة السر بشكل آمن:' . "\n\n" . '%s' . "\n\n" . 'سيتم تجاهل هذا الرابط تلقائيا بعد 24 ساعة أو بعد أن تم تغيير كلمة المرور الخاصة بك.' . "\n\n" . 'للمساعدة في أي من الخدمات التي نقدمها عبر الإنترنت، يرجى إرسال بريد إلكتروني مخزن في ملكيته: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'خطأ: تم بالفعل إرسال رابط إعادة تعيين كلمة المرور. يرجى المحاولة مرة أخرى في %s دقيقة.');

?>
