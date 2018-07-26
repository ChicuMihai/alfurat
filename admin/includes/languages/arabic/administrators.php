<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2009 osCommerce

  Released under the GNU General Public License
*/
define('HEADING_TITLE', 'الإداريين');

define('TABLE_HEADING_ADMINISTRATORS', 'الإداريين');
define('TABLE_HEADING_HTPASSWD', 'تأمينها بواسطة الجدران النارية');
define('TABLE_HEADING_ACTION', 'عمل');

define('TEXT_INFO_INSERT_INTRO', 'من فضلك ادخل مسؤول الجديدة مع البيانات المرتبطة بها');
define('TEXT_INFO_EDIT_INTRO', 'يرجى إجراء أية تغييرات ضرورية');
define('TEXT_INFO_DELETE_INTRO', 'هل أنت متأكد أنك تريد حذف هذا المسؤول؟');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'مسؤول جديد');
define('TEXT_INFO_USERNAME', 'اسم المستخدم:');
define('TEXT_INFO_NEW_PASSWORD', 'كلمة المرور الجديدة:');
define('TEXT_INFO_PASSWORD', 'كلمة السر:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD', 'حماية مع هتكس / الجدران النارية');

define('ERROR_ADMINISTRATOR_EXISTS', 'خطأ: مدير موجود بالفعل.');

define('HTPASSWD_INFO', '<strong>حماية إضافية مع هتكس / الجدران النارية<p>لم يتم تأمين هذا التثبيت سكوميرسي على الانترنت أداة إدارة التاجر بالإضافة إلى ذلك من خلال وسائل هتكس / الجدران النارية.</p><p>وسوف تمكن طبقة الأمان هتكس / الجدران النارية تخزين تلقائيا اسم المستخدم وكلمات مرور المسؤول في ملف الجدران النارية عند تحديث سجلات كلمة مرور المسؤول.</p><p><strong>يرجى ملاحظة</strong>, ، إذا تم تمكين هذه الطبقة أمنية إضافية ويمكنك لم يعد الوصول إلى أداة الإدارة، يرجى إجراء التغييرات التالية واستشارة موفر استضافة لتمكين الحماية هتكس / الجدران النارية:</p><p><u><strong>. تحرير هذا الملف:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>إزالة الأسطر التالية إذا كانت موجودة:</p><p><i>%s</i></p><p><u><strong>. حذف هذا الملف</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED', '<strong>حماية إضافية مع هتكس / الجدران النارية</strong><p>يتم تأمين هذا التثبيت سكوميرسي على الانترنت أداة إدارة التاجر بالإضافة إلى ذلك من خلال وسائل هتكس / الجدران النارية.</p>');
define('HTPASSWD_PERMISSIONS', '<strong>حماية إضافية مع هتكس / الجدران النارية</strong><p>م يتم تأمين هذا التثبيت سكوميرسي على الانترنت أداة إدارة التاجر بالإضافة إلى ذلك من خلال وسائل هتكس / الجدران النارية.</p><p>الملفات التالية يجب أن يكون قابل للكتابة من قبل خادم الويب لتمكين طبقة هتكس / أمن الجدران النارية:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>تحديث الصفحة للتأكد مما اذا تم تعيين أذونات الملف الصحيح.</p>');
?>
