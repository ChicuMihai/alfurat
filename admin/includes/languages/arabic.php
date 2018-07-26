<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
//setlocale(LC_TIME, 'en_US.ISO_8859-1');
setlocale(LC_TIME, 'ar_AR');
define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'm/d/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', ''); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'mm/dd/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="ar"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', 'سكوميرسي على الانترنت أداة إدارة التاجر');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'إدارة');
define('HEADER_TITLE_SUPPORT_SITE', 'دعم الموقع');
define('HEADER_TITLE_ONLINE_CATALOG', 'كتالوج على الانترنت');
define('HEADER_TITLE_ADMINISTRATION', 'إدارة');

// text for gender
define('MALE', 'ذكر ');
define('FEMALE', 'أنثى');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'ترتيب');
define('BOX_CONFIGURATION_MYSTORE', 'متجري');
define('BOX_CONFIGURATION_LOGGING', 'تسجيل ');
define('BOX_CONFIGURATION_CACHE', 'مخبأ');
define('BOX_CONFIGURATION_ADMINISTRATORS', 'الإداريين');
define('BOX_CONFIGURATION_STORE_LOGO', 'متجر شعار ');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'وحدات');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'فهرس');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'فئات / المنتجات');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'سمات المنتجات');
define('BOX_CATALOG_MANUFACTURERS', 'مصنعين');
define('BOX_CATALOG_REVIEWS', 'التعليقات');
define('BOX_CATALOG_SPECIALS', 'العروض الخاصة');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'النواتج المتوقعة');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'الزبائن ');
define('BOX_CUSTOMERS_CUSTOMERS', 'الزبائن ');
// 2.3.4 changes bof
//define('BOX_CUSTOMERS_ORDERS', 'أوامر');
// orders box text in includes/boxes/orders.php
define('BOX_HEADING_ORDERS', 'أوامر');
define('BOX_ORDERS_ORDERS', 'أوامر');
// 2.3.4 changes eof


// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'مواقع / الضرائب');
define('BOX_TAXES_COUNTRIES', 'الدول');
define('BOX_TAXES_ZONES', 'المناطق');
define('BOX_TAXES_GEO_ZONES', 'المناطق الضريبية ');
define('BOX_TAXES_TAX_CLASSES', 'فئات الضريبة ');
define('BOX_TAXES_TAX_RATES', 'أسعار الضريبة');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'تقارير ');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'معروض منتجات ');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'المنتجات التي تم شراؤها');
define('BOX_REPORTS_ORDERS_TOTAL', 'أوامر العملاء المجموع');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'أدوات');
define('BOX_TOOLS_ACTION_RECORDER', 'مسجل العمل');
define('BOX_TOOLS_BACKUP', 'قاعدة بيانات النسخ الاحتياطي');
define('BOX_TOOLS_BANNER_MANAGER', 'مدير راية');
define('BOX_TOOLS_CACHE', 'مراقبة مخبأ');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'تحديد اللغات');
define('BOX_TOOLS_MAIL', 'إرسال البريد الإلكتروني ');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'مدير النشرة ');
define('BOX_TOOLS_SEC_DIR_PERMISSIONS', 'ضوابط دليل الأمن');
define('BOX_TOOLS_SERVER_INFO', 'معلومات الخادم ');
define('BOX_TOOLS_VERSION_CHECK', 'مدقق الإصدار');
define('BOX_TOOLS_WHOS_ONLINE', 'من هو على الانترنت');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'التعريب');
define('BOX_LOCALIZATION_CURRENCIES', 'العملات');
define('BOX_LOCALIZATION_LANGUAGES', 'اللغات');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'أوامر الحالة');

// javascript messages
define('JS_ERROR', 'وقد وقعت أخطاء أثناء عملية النموذج الخاص بك! \nيرجى إجراء التصحيحات التالية:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* السمة منتج جديد يحتاج إلى قيمة السعر\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* السمة منتج جديد يحتاج بادئة الأمير\n');

define('JS_PRODUCTS_NAME', '* المنتج الجديد يحتاج إلى اسم \n');
define('JS_PRODUCTS_DESCRIPTION', '* المنتج الجديد يحتاج وصفا\n');
define('JS_PRODUCTS_PRICE', '* المنتج الجديد يحتاج إلى قيمة السعر\n');
define('JS_PRODUCTS_WEIGHT', '* المنتج الجديد يحتاج قيمة الوزن\n');
define('JS_PRODUCTS_QUANTITY', '* المنتج الجديد يحتاج إلى قيمة الكمية\n');
define('JS_PRODUCTS_MODEL', '* المنتج الجديد يحتاج إلى نموذج القيمة\n');
define('JS_PRODUCTS_IMAGE', '* المنتج الجديد يحتاج إلى قيمة الصورة \n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* A السعر الجديد لهذا المنتج يحتاج إلى أن يتم تعيين\n');

define('JS_GENDER', '* يجب أن يتم اختيار القيمة الجنس.\n');
define('JS_FIRST_NAME', '* يجب أن يكون الإدخال الأول اسم على الأقل ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' حرفا.\n');
define('JS_LAST_NAME', '* يجب أن يكون دخول اسم آخر على الأقل ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ﺡﺮﻓﺍ.\n');
define('JS_DOB', '* يجب أن يكون تاريخ دخول الميلاد في شكل: xx/xx/xxxx (month/date/year).\n');
define('JS_EMAIL_ADDRESS', '* يجب أن يكون إدخال عنوان البريد الإلكتروني على الأقل ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ﺡﺮﻓﺍ.\n');
define('JS_ADDRESS', '* يجب أن يكون إدخال العنوان على الأقل ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ﺡﺮﻓﺍ.\n');
define('JS_POST_CODE', '* يجب أن يكون إدخال الرمز البريدي على الأقل ' . ENTRY_POSTCODE_MIN_LENGTH . ' ﺡﺮﻓﺍ.\n');
define('JS_CITY', '* يجب أن يكون دخول مدينة على الأقل ' . ENTRY_CITY_MIN_LENGTH . ' ﺡﺮﻓﺍ.\n');
define('JS_STATE', '* ويجب أن يتم اختيار دخول الدولة.\n');
define('JS_STATE_SELECT', '-- حدد فوق --');
define('JS_ZONE', '* يجب تحديد دخول الدولة من القائمة لهذا البلد.');
define('JS_COUNTRY', '* يجب اختيار قيمة البلد.\n');
define('JS_TELEPHONE', '* يجب أن يكون إدخال رقم الهاتف على الأقل ' . ENTRY_TELEPHONE_MIN_LENGTH . ' ﺡﺮﻓﺍ.\n');
define('JS_PASSWORD', '* إدخالات كلمة المرور وتأكيد يجب أن يتطابق ويكون على الأقل ' . ENTRY_PASSWORD_MIN_LENGTH . ' ﺡﺮﻓﺍ.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'الأمر رقم %s لا وجود له!');

define('CATEGORY_PERSONAL', 'الشخصية ');
define('CATEGORY_ADDRESS', 'عنوان ');
define('CATEGORY_CONTACT', 'اتصال');
define('CATEGORY_COMPANY', 'شركة');
define('CATEGORY_OPTIONS', 'خيارات');

define('ENTRY_GENDER', 'بين الجنسين:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">مطلوب</span>');
define('ENTRY_FIRST_NAME', 'الاسم الأول:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">الحد الأدنى ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' أحرف</span>');
define('ENTRY_LAST_NAME', 'اسم العائلة:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">الحد الأدنى ' . ENTRY_LAST_NAME_MIN_LENGTH . ' أحرف</span>');
define('ENTRY_DATE_OF_BIRTH', 'تاريخ الميلاد:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(eg. 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'عنوان البريد الإلكتروني:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">الحد الأدنى ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' أحرف</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">لا يظهر عنوان البريد الإلكتروني لتكون صالحة!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">عنوان البريد الإلكتروني هذا موجود مسبقا!</span>');
define('ENTRY_COMPANY', 'اسم الشركة:');
define('ENTRY_STREET_ADDRESS', 'العنوان:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">الحد الأدنى ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' أحرف</span>');
define('ENTRY_SUBURB', 'ضاحية:');
define('ENTRY_POST_CODE', 'الرمز البريدي:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">الحد الأدنى ' . ENTRY_POSTCODE_MIN_LENGTH . ' أحرف</span>');
define('ENTRY_CITY', 'المدينة:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">الحد الأدنى ' . ENTRY_CITY_MIN_LENGTH . ' أحرف</span>');
define('ENTRY_STATE', 'الدولة:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">مطلوب</span>');
define('ENTRY_COUNTRY', 'البلد:');
define('ENTRY_COUNTRY_ERROR', 'يجب عليك اختيار بلد من البلدان هدم القائمة.');
define('ENTRY_TELEPHONE_NUMBER', 'رقم الهاتف:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">الحد الأدنى ' . ENTRY_TELEPHONE_MIN_LENGTH . ' أحرف</span>');
define('ENTRY_FAX_NUMBER', 'رقم الفاكس:');
define('ENTRY_NEWSLETTER', 'النشرة:');
define('ENTRY_NEWSLETTER_YES', 'اكتتبت ');
define('ENTRY_NEWSLETTER_NO', 'غير المكتتب');

// images
define('IMAGE_ANI_SEND_EMAIL', 'إرسال البريد الإلكتروني');
define('IMAGE_BACK', 'ظهر');
define('IMAGE_BACKUP', 'دعم');
define('IMAGE_CANCEL', 'إلغاء');
define('IMAGE_CONFIRM', 'أكد');
define('IMAGE_COPY', 'نسخة');
define('IMAGE_COPY_TO', 'نسخ ل');
define('IMAGE_DETAILS', 'تفاصيل');
define('IMAGE_DELETE', 'حذف');
define('IMAGE_EDIT', 'تحرير');
define('IMAGE_EMAIL', 'البريد الإلكتروني');
define('IMAGE_EXPORT', 'تصدير');
define('IMAGE_ICON_STATUS_GREEN', 'نشط');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'تعيين بالموقع');
define('IMAGE_ICON_STATUS_RED', 'غير فعال');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'تعيين غير فعال');
define('IMAGE_ICON_INFO', 'معلومات');
define('IMAGE_INSERT', 'أدخل');
define('IMAGE_LOCK', 'قفل');
define('IMAGE_MODULE_INSTALL', 'تثبيت وحدة');
define('IMAGE_MODULE_REMOVE', 'إزالة وحدة');
define('IMAGE_MOVE', 'خطوة');
define('IMAGE_NEW_BANNER', 'راية جديدة');
define('IMAGE_NEW_CATEGORY', 'الفئة الجديدة');
define('IMAGE_NEW_COUNTRY', 'بلد جديد');
define('IMAGE_NEW_CURRENCY', 'العملة الجديدة');
define('IMAGE_NEW_FILE', 'ملف جديد');
define('IMAGE_NEW_FOLDER', 'مجلد جديد');
define('IMAGE_NEW_LANGUAGE', 'لغة جديدة');
define('IMAGE_NEW_NEWSLETTER', 'النشرة الإخبارية جديدة');
define('IMAGE_NEW_PRODUCT', 'منتج جديد');
define('IMAGE_NEW_TAX_CLASS', 'فئة ضريبة جديدة');
define('IMAGE_NEW_TAX_RATE', 'جديد معدل الضريبة');
define('IMAGE_NEW_TAX_ZONE', 'المنطقة الضرائب الجديد');
define('IMAGE_NEW_ZONE', 'منطقة جديدة');
define('IMAGE_ORDERS', 'أوامر');
define('IMAGE_ORDERS_INVOICE', 'فاتورة');
define('IMAGE_ORDERS_PACKINGSLIP', 'زلة التعبئة');
define('IMAGE_PREVIEW', 'معاينة');
define('IMAGE_RESTORE', 'استعادة');
define('IMAGE_RESET', 'إعادة تعيين');
define('IMAGE_SAVE', 'حفظ');
define('IMAGE_SEARCH', 'بحث');
define('IMAGE_SELECT', 'اختر');
define('IMAGE_SEND', 'إرسال');
define('IMAGE_SEND_EMAIL', 'إرسال البريد الإلكتروني');
define('IMAGE_UNLOCK', 'فتح');
define('IMAGE_UPDATE', 'التحديث');
define('IMAGE_UPDATE_CURRENCIES', 'تحديث سعر الصرف');
define('IMAGE_UPLOAD', 'تحميل');

define('ICON_CROSS', 'كاذب');
define('ICON_CURRENT_FOLDER', 'المجلد الحالي');
define('ICON_DELETE', 'حذف');
define('ICON_ERROR', 'خطأ');
define('ICON_FILE', 'ملف');
define('ICON_FILE_DOWNLOAD', 'تحميل');
define('ICON_FOLDER', 'ملف');
define('ICON_LOCKED', 'مقفل');
define('ICON_PREVIOUS_LEVEL', 'المستوى السابق');
define('ICON_PREVIEW', 'معاينة');
define('ICON_STATISTICS', 'إحصائيات');
define('ICON_SUCCESS', 'نجاح');
define('ICON_TICK', 'صحيح');
define('ICON_UNLOCKED', 'مقفلة');
define('ICON_WARNING', 'تحذير');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'الصفحة %s من %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> لافتات)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> الدول)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> الزبائن)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> العملات)');
define('TEXT_DISPLAY_NUMBER_OF_ENTRIES', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> إدخالات)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> اللغات)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> مصنعين)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> النشرات الإخبارية)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> أوامر)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> وضع أوامر)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> المنتجات)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> المنتجات المتوقعة)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> تعليقات على هذا المنتج)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> منتجات خاصة على)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> فئات الضريبة)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'عرض <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> المناطق الضريبية)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'عرض  <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> معدلات الضرائب)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'عرض  <strong>%d</strong> إلى  <strong>%d</strong> (من <strong>%d</strong> المناطق)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'الافتراضي');
define('TEXT_SET_DEFAULT', 'تعيين كافتراضي');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* مطلوب</span>');

define('TEXT_CACHE_CATEGORIES', 'فئات مربع');
define('TEXT_CACHE_MANUFACTURERS', 'مصنعين مربع');
define('TEXT_CACHE_ALSO_PURCHASED', 'وحدة تم شراؤها أيضا');

define('TEXT_NONE', '--لا شيء--');
define('TEXT_TOP', 'أعلى');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'خطأ: لا توجد الوجهة.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'خطأ: لا للكتابة الوجهة.');
define('ERROR_FILE_NOT_SAVED', 'الخطأ: تحميل الملف يتم حفظ.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'خطأ: ملف نوع التحميل غير مسموح به.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'نجاح: تحميل الملف حفظها بنجاح.');
define('WARNING_NO_FILE_UPLOADED', 'تحذير: لا الملف الذي تم تحميله.');
?>
