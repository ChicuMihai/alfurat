<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'مدير راية');

define('TABLE_HEADING_BANNERS', 'لافتات');
define('TABLE_HEADING_GROUPS', 'مجموعات');
define('TABLE_HEADING_STATISTICS', 'يعرض / نقرات');
define('TABLE_HEADING_STATUS', 'حالة');
define('TABLE_HEADING_ACTION', 'عمل');

define('TEXT_BANNERS_TITLE', 'راية العنوان:');
define('TEXT_BANNERS_URL', 'URL راية:');
define('TEXT_BANNERS_GROUP', 'شعار المجموعة:');
define('TEXT_BANNERS_NEW_GROUP', '، أو إدخال مجموعة جديدة تحت راية');
define('TEXT_BANNERS_IMAGE', 'صورة:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', أو أدخل ملف محلي أدناه');
define('TEXT_BANNERS_IMAGE_TARGET', 'صورة الهدف (حفظ إلى):');
define('TEXT_BANNERS_HTML_TEXT', 'نص HTML:');
define('TEXT_BANNERS_EXPIRES_ON', 'ينتهي في:');
define('TEXT_BANNERS_OR_AT', ', أو على');
define('TEXT_BANNERS_IMPRESSIONS', 'الانطباعات / وجهات النظر.');
define('TEXT_BANNERS_SCHEDULED_AT', 'وفي المقرر:');
define('TEXT_BANNERS_BANNER_NOTE', '<strong>راية ملاحظات:</strong><ul><li>استخدام صورة أو نص HTML لافتة - وليس كلاهما.</li><li>نص HTML له الأولوية على صورة</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<strong>ملاحظات الصورة:</strong><ul><li>يجب أن يكون الدلائل تحميل المستخدم السليم (الكتابة) أذونات الإعداد!</li><li>لا ملء حقل \'حفظ إلى \' إذا كنت لا تحميل صورة إلى خادم الويب (أي كنت تستخدم المحلية (جانب الخادم) الصورة).</li><li>يجب أن يكون حقل \'حفظ إلى \' دليل موجود مع نهاية الخط المائل (على سبيل المثال، لافتات /).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<strong>ملاحظات انتهاء:</strong><ul><li>واحد فقط من الحقلين ينبغي أن تقدم</ul></li></ul><li><ul>إذا كان شعار لا لتنتهي تلقائيا، ثم ترك هذه الحقول فارغة</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<strong>جدول ملاحظات:</strong><ul><li>إذا تم تعيين جدول زمني، وسوف يتم تفعيلها لواء في ذلك التاريخ.</li><li>وتتميز جميع اللافتات المقرر كما deactive حتى وصل موعدها، والتي سوف ثم يتم وضع علامة نشط.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'تاريخ الاضافة:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'وفي المقرر: <strong>%s</strong>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'ينتهي في: <strong>%s</strong>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'ينتهي في: <strong>%s</strong> انطباعات');
define('TEXT_BANNERS_STATUS_CHANGE', 'تغيير الحالة: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', 'مشاركة 3 أيام');
define('TEXT_BANNERS_BANNER_VIEWS', 'راية المشاهدات');
define('TEXT_BANNERS_BANNER_CLICKS', 'راية الزيارات');

define('TEXT_INFO_DELETE_INTRO', 'هل أنت متأكد أنك تريد حذف هذا الشعار؟');
define('TEXT_INFO_DELETE_IMAGE', 'حذف صورة لافتة');

define('SUCCESS_BANNER_INSERTED', 'نجاح: تم إدراج الشعار.');
define('SUCCESS_BANNER_UPDATED', 'نجاح: تم تحديث الترويسة.');
define('SUCCESS_BANNER_REMOVED', 'نجاح: لقد تمت إزالة لافتة.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'نجاح: تم تحديث وضع لافتة.');

define('ERROR_BANNER_TITLE_REQUIRED', 'خطأ: عنوان راية المطلوبة.');
define('ERROR_BANNER_GROUP_REQUIRED', 'الخطأ: مجموعة راية المطلوبة.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'خطأ: الدليل الهدف غير موجود: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'خطأ: الدليل الهدف ليس للكتابة: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'خطأ: لا توجد صورة.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'خطأ: لا يمكن إزالة صورة.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'خطأ: غير معروف العلم القائم.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'الخطأ: الرسوم البيانية الدليل غير موجود. يرجى إنشاء \'الرسوم البيانية \' الدليل داخل \'صور \'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'الخطأ: الرسوم البيانية الدليل غير قابل للكتابة.');
?>
