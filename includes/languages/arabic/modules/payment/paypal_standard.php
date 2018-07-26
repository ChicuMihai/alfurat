<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_TITLE', 'باي بال المدفوعات الموحدة ');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PUBLIC_TITLE', 'باي بال (بما في ذلك الائتمان وبطاقات السحب الآلي)');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&payments_standard" target="_blank" style="text-decoration: underline; font-weight: bold;">عرض الوثائق على الانترنت</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">زيارة موقع باي بال</a>');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CURL', 'يتطلب هذا النموذج الضفيرة مع تمكين في PHP وسوف يتم تحميل حتى تم تمكينه على ملقم ويب هذا.');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION', 'سوف يتم تحميل هذه الوحدة حتى بائع تم تكوين المعلمة عنوان البريد الإلكتروني. يرجى تعديل وتكوين إعدادات هذه الوحدة.');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PAYPAL_RETURN_BUTTON', 'إلى ' . STORE_NAME); // Maximum length 60 characters, otherwise it is ignored.
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_INVALID_TRANSACTION', 'لا يمكن أن تحقق الصفقة باي بال. يرجى المحاولة مرة أخرى.');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_LINK_TITLE', 'اتصال اختبار API ملقم');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TITLE', 'اختبار اتصال API ملقم');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_GENERAL_TEXT', 'اختبار اتصال بخادم ..');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_BUTTON_CLOSE', 'قريب');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TIME', 'اتصال الوقت: ');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_SUCCESS', 'النجاح!');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_FAILED', 'فشل! يرجى مراجعة تحقق من إعدادات SSL شهادة وحاول مرة أخرى.');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_ERROR', 'حدث خطأ. يرجى تحديث الصفحة، مراجعة الإعدادات الخاصة بك، ثم حاول مرة أخرى.');
?>
