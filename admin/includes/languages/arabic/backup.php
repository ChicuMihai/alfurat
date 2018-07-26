<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'مدير قاعدة بيانات النسخ الاحتياطي');

define('TABLE_HEADING_TITLE', 'لقب');
define('TABLE_HEADING_FILE_DATE', 'تاريخ');
define('TABLE_HEADING_FILE_SIZE', 'حجم');
define('TABLE_HEADING_ACTION', 'عمل');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'النسخ الاحتياطي جديدة');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'استعادة المحلي');
define('TEXT_INFO_NEW_BACKUP', 'لا تقاطع عملية النسخ الاحتياطي التي قد يستغرق بضع دقائق.');
define('TEXT_INFO_UNPACK', '<br /><br />(بعد تفريغ الملف من الأرشيف)');
define('TEXT_INFO_RESTORE', 'لا تقاطع عملية الترميم.<br /><br /><br />أكبر عملية النسخ الاحتياطي، ويعد هذه العملية تستغرق!<br />إذا كان ذلك ممكنا، استخدام العميل الخلية.<br /><br />على سبيل المثال:<br /><br /><strong>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </strong> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'لا تقاطع عملية الترميم.<br /><br />أكبر عملية النسخ الاحتياطي، ويعد هذه العملية تستغرق!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'يجب أن يكون الملف الذي تم تحميله على مزود الخام (النص) الملف.');
define('TEXT_INFO_DATE', 'تاريخ:');
define('TEXT_INFO_SIZE', 'الحجم:');
define('TEXT_INFO_COMPRESSION', 'ضغط:');
define('TEXT_INFO_USE_GZIP', 'استخدام GZIP');
define('TEXT_INFO_USE_ZIP', 'استخدام ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'لا ضغط (الصرفة SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'تحميل فقط (لا متجر جانب الخادم)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'أفضل من خلال اتصال HTTPS');
define('TEXT_DELETE_INTRO', 'هل أنت متأكد أنك تريد حذف هذه النسخة الاحتياطية؟');
define('TEXT_NO_EXTENSION', 'لا شيء');
define('TEXT_BACKUP_DIRECTORY', 'دليل النسخ الاحتياطي:');
define('TEXT_LAST_RESTORATION', 'مشاركة الترميم:');
define('TEXT_FORGET', '(<u>ننسى</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'الخطأ: دليل النسخ الاحتياطي غير موجود. يرجى تعيين هذه في configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'خطأ: الدليل النسخ الاحتياطي ليس للكتابة.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'خطأ: رابط تحميل غير مقبول.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'نجاح: تم مسح تاريخ استعادة الماضي.');
define('SUCCESS_DATABASE_SAVED', 'نجاح: تم حفظ قاعدة البيانات.');
define('SUCCESS_DATABASE_RESTORED', 'نجاح: تم استعادة قاعدة البيانات.');
define('SUCCESS_BACKUP_DELETED', 'نجاح: لقد تمت إزالة النسخ الاحتياطي.');
?>
