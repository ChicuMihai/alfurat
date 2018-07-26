<?php
/*
  $Id: create_account.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'إنشاء حساب');

define('HEADING_TITLE', 'معلومات حسابي');

define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>ملاحظة:</b></font></small> إذا كان لديك حساب بالفعل معنا، الرجاء الدخول في <a href="%s"><u>صفحة تسجيل الدخول</u></a>.');

define('EMAIL_SUBJECT', 'مرحبا بكم في ' . STORE_NAME);
define('EMAIL_GREET_MR', 'عزيزي السيد %s,' . "\n\n");
define('EMAIL_GREET_MS', 'عزيزتي السيدة %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'العزيز %s' . "\n\n");
define('EMAIL_WELCOME', 'نحن نرحب بكم ل <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'يمكنك الآن المشاركة في <b>خدمات متنوعة</b> علينا أن نقدم لكم. بعض هذه الخدمات ما يلي:' . "\n\n" . '<li><b>سلة دائمة</b> - أي منتجات تضاف إلى عربة التسوق عبر الإنترنت لا تزال هناك حتى تقوم بإزالتها، أو التحقق منها.' . "\n" . '<li><b>دفتر العناوين</b> - يمكننا الآن تقديم المنتجات الخاصة بك إلى عنوان آخر غير زمانكم! هذا هو الكمال لإرسال هدايا عيد الميلاد مباشرة إلى الشخص عيد أنفسهم.' . "\n" . '<li><b>أجل التاريخ</b> - عرض تاريخكم من المشتريات التي قمت بها معنا.' . "\n" . '<li><b>مراجعات المنتجات</b> - تبادل الآراء الخاصة بك على المنتجات مع عملائنا الآخرين.' . "\n\n");
define('EMAIL_CONTACT', 'للمساعدة في أي من الخدمات التي نقدمها عبر الإنترنت، يرجى إرسال بريد إلكتروني مخزن في ملكيته: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>ملاحظة:</b> أعطيت عنوان البريد الإلكتروني هذا لنا من قبل واحد من عملائنا. إذا لم تسجيل لتكون عضوا، الرجاء إرسال بريد إلكتروني إلى ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
?>
