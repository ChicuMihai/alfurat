<?php
/*
  $Id	Arabic Text for osc2.3.1 , 17-Feb-2012. $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'ar_AR'
// on FreeBSD try 'ar_AR.ISO_8859-1'
// on Windows try 'ar', or 'Arabic'
@setlocale(LC_TIME, 'ar_AR');

define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
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

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'USD');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="rtl" lang="ar"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'إشتراك جديد');
define('HEADER_TITLE_MY_ACCOUNT', 'بياناتي');
define('HEADER_TITLE_CART_CONTENTS', 'محتويات السله');
define('HEADER_TITLE_CHECKOUT', 'المحاسبه');
define('HEADER_TITLE_TOP', 'الرئيسية');
define('HEADER_TITLE_CATALOG', 'السوق');
define('HEADER_TITLE_LOGOFF', 'خروج');
define('HEADER_TITLE_LOGIN', 'دخول');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'عدد الزائرين منذ');

// text for gender
define('MALE', 'ذكر');
define('FEMALE', 'أنثي');
define('MALE_ADDRESS', 'السيد');
define('FEMALE_ADDRESS', 'الآنسه/السيدة');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

/*
// categories box text in includes/boxes/categories.php
define('BOX_HEADING_CATEGORIES', 'الأقسام');

// manufacturers box text in includes/boxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'الوكلاء الموردون');

// whats_new box text in includes/boxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'الجديد عندنا؟');

// quick_find box text in includes/boxes/quick_find.php
define('BOX_HEADING_SEARCH', 'بحث سريع');
define('BOX_SEARCH_TEXT', 'إستخدم كلمات البحث الرئيسيه للبحث عن الأصناف التي تريدها');
define('BOX_SEARCH_ADVANCED_SEARCH', 'بحث متقدم');

// specials box text in includes/boxes/specials.php
define('BOX_HEADING_SPECIALS', 'عروض خاصه');

// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'مراجعات');
define('BOX_REVIEWS_WRITE_REVIEW', 'أكتب مراجعه عن هذا الصنف!');
define('BOX_REVIEWS_NO_REVIEWS', 'حالياً لايوجد مراجعه');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s من خمس نجوم!');

// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'سلة التسوق');
define('BOX_SHOPPING_CART_EMPTY', '..فارغه!');

// order_history box text in includes/boxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'نظرة تأريخ الطلبات');

// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'المبيعات المُفَضلة');
define('BOX_HEADING_BESTSELLERS_IN', 'المبيعات المُفَضلة في<br>&nbsp;&nbsp;');

// notifications box text in includes/boxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'التبليغات');
define('BOX_NOTIFICATIONS_NOTIFY', 'برجاء تبليغي عن كل جديد بخصوص هذا المنتج <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'أرجو عدم تبليغي عن كل ما هو جديد <b>%s</b>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'معلومات الوكيل المورد');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s الصفحه الرئيسيه');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'أصناف أخرى');

// languages box text in includes/boxes/languages.php
define('BOX_HEADING_LANGUAGES', 'اللغات');

// currencies box text in includes/boxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'العُملات');

// information box text in includes/boxes/information.php
define('BOX_HEADING_INFORMATION', 'معلومات');
define('BOX_INFORMATION_PRIVACY', 'الخصوصيه');
define('BOX_INFORMATION_CONDITIONS', 'شروط الإستخدام');
define('BOX_INFORMATION_SHIPPING', 'ماذا عن الشحن والإرجاع');
define('BOX_INFORMATION_CONTACT', 'إتصل بنا');

// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_HEADING_TELL_A_FRIEND', 'أخبر صديق عن موقعنا');
define('BOX_TELL_A_FRIEND_TEXT', 'أعلم أي شخص عن هذا المنتج');
*/
// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'عنوان الإستلام');
define('CHECKOUT_BAR_PAYMENT', 'طريقة الدفع');
define('CHECKOUT_BAR_CONFIRMATION', 'تأكيد');
define('CHECKOUT_BAR_FINISHED', 'إنتهى!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'الرجاء الإختيار');
define('TYPE_BELOW', 'أكتب بالأسفل');

// javascript messages
define('JS_ERROR', 'يوجد أخطاء حدثت من خلال إرسالكم النموذج!\nالرجاء التأكد من صحة البيانات التاليه:\n\n');

define('JS_REVIEW_TEXT', '\'نص الإستعراض\' * ' . REVIEW_TEXT_MIN_LENGTH . ' خانه على الأقل فقط \n');
define('JS_REVIEW_RATING', 'يجب أن ترشح تقديرك للصنف لأجل إستعراضك * \n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* الرجاء إختيار طريقة الدفع لطلبيتك.\n');

define('JS_ERROR_SUBMITTED', 'من فضلك أضغط/أنقر علي موافق وأنتظر قليلا ..شكرا');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* الرجاء إختيار طريقة الدفع لطلبيتك.');

define('CATEGORY_COMPANY', 'تفاصيل الشركه إن أمكن');
define('CATEGORY_PERSONAL', 'تفاصيل شخصيه');
define('CATEGORY_ADDRESS', 'عنوانك');
define('CATEGORY_CONTACT', 'معلومات الإتصال بك');
define('CATEGORY_OPTIONS', 'خيارات');
define('CATEGORY_PASSWORD', 'كلمة السر الخاصه بك');

define('ENTRY_COMPANY', 'إسم الشركه:');
//define('ENTRY_COMPANY_ERROR', '&nbsp;<small><font color="#AABBDD">إن أمكن</font></small>');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'الجنس:');
define('ENTRY_GENDER_ERROR', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'الإسم الأول');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<small><font color="#FF0000">خانه الأدنى ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' </font></small>');
define('ENTRY_FIRST_NAME_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_LAST_NAME', 'الإسم الآخر:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<small><font color="#FF0000">خانه الأدنى ' . ENTRY_LAST_NAME_MIN_LENGTH . '</font></small>');
define('ENTRY_LAST_NAME_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_DATE_OF_BIRTH', 'تاريخ الميلاد:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<small><font color="#FF0000">(21/05/1970 .مثلاً)</font></small>');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (eg. 05/21/1970)');
define('ENTRY_EMAIL_ADDRESS', 'البريد الإلكتروني:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<small><font color="#FF0000">خانه الأدنى ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' </font></small>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<small><font color="#FF0000">البريد الإلكتروني غير صحيح!</font></small>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<small><font color="#FF0000">البريد الإلكتروني موجود مُسبقاً!</font></small>');
define('ENTRY_EMAIL_ADDRESS_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_STREET_ADDRESS', 'العنوان:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<small><font color="#FF0000">خانه الأدنى ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . '</font></small>');
define('ENTRY_STREET_ADDRESS_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب, ويتضمن ص.ب. والشارع...إلخ</font></small>');
define('ENTRY_SUBURB', 'الحي:');
//define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'الرمز البريدي');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<small><font color="#FF0000">خانه الأدنى ' . ENTRY_POSTCODE_MIN_LENGTH . ' </font></small>');
define('ENTRY_POST_CODE_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_CITY', 'المدينه:');
define('ENTRY_CITY_ERROR', '&nbsp;<small><font color="#FF0000">خانه الأدنى ' . ENTRY_CITY_MIN_LENGTH . ' </font></small>');
define('ENTRY_CITY_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_STATE', 'الولايه أو المحافظه:');
define('ENTRY_STATE_ERROR', '');
define('ENTRY_STATE_ERROR_SELECT', 'ﺎﻟﺮﺟﺍﺀ ﺖﺣﺪﻳﺩ ﺩﻮﻟﺓ ﻢﻧ ﻕﺎﺌﻣﺓ ﺎﻟﺩﻮﻟ');
define('ENTRY_STATE_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_COUNTRY', 'البلد:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_COUNTRY_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_TELEPHONE_NUMBER', 'التلفون:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<small><font color="#FF0000">خانه الأدنى ' . ENTRY_TELEPHONE_MIN_LENGTH . ' </font></small>');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_FAX_NUMBER', 'الفاكس:');
//define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'قائمة الرسائل الإخباريه:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'إنضمام');
define('ENTRY_NEWSLETTER_NO', 'إنفصال');
//define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'كلمة السر:');
define('ENTRY_PASSWORD_ERROR', '&nbsp;<small><font color="#FF0000"> علي الأقل خمسة حروف مطلوب خانه الأدنى ' . ENTRY_PASSWORD_MIN_LENGTH . ' </font></small>');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'ﻲﺠﺑ ﺄﻧ ﺕﺄﻜﻳﺩ ﻚﻠﻣﺓ ﺎﻠﺳﺭ ﺖﻃﺎﺒﻗ ﻚﻠﻣﺓ ﺎﻠﺳﺭ');
define('ENTRY_PASSWORD_TEXT', '&nbsp;<small><font color="#AABBDD">مطلوب</font></small>');
define('ENTRY_PASSWORD_CONFIRMATION', 'تأكيد كلمة السر:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '&nbsp;<small><font color="#ffffff">علي الأقل خمسة حروف مطلوب</font></small>');
define('ENTRY_PASSWORD_CURRENT', 'ﻚﻠﻣﺓ ﺎﻠﺳﺭ ﺎﻠﺣﺎﻠﻳﺓ');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', ' ﻲﺠﺑ ﺄﻧ ﻚﻠﻣﺓ ﺎﻠﺳﺭ ﺖﺤﺗﻮﻳ ﻊﻟﻯ ﻡﺍ ﻻ ﻲﻘﻟ ﻊﻧ' . ENTRY_PASSWORD_MIN_LENGTH . ' ﺄﺣﺮﻓ');
define('ENTRY_PASSWORD_NEW', 'ﻚﻠﻣﺓ ﺱﺭ ﺝﺪﻳﺩﺓ');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'ﻲﺠﺑ ﺄﻧ ﻚﻠﻣﺓ ﺎﻠﺳﺭﺎﻠﺟﺪﻳﺩﺓ ﺖﺤﺗﻮﻳ ﻊﻟﻯ ﻡﺍ ﻻ ﻲﻘﻟ ﻊﻧ' . ENTRY_PASSWORD_MIN_LENGTH . ' ﺄﺣﺮﻓ');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'ﻲﺠﺑ ﺄﻧ ﺕﺄﻜﻳﺩ ﻚﻠﻣﺓ ﺎﻠﺳﺭ ﺖﻃﺎﺒﻗ ﻚﻠﻣﺓ ﺎﻠﺳﺭﺎﻠﺟﺪﻳﺩﺓ');
define('PASSWORD_HIDDEN', '--مخفي--');

define('FORM_REQUIRED_INFORMATION', '* مطلوب تدوينه');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'ناتج الصفحات:');
//define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'عرض <b>%d</b> إلى <b>%d</b> من <b>%d</b> صنف');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '<p align="left">عرض <b>%s</b> إلى <b>%s</b> (من <b>%s</b> منتج.)</p>');
//define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'عرض <b>%d</b> إلى <b>%d</b> من <b>%d</b> طلبيه');
//define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'عرض <b>%d</b> إلى <b>%d</b> من <b>%d</b> مراجعه)');
//define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'عرض <b>%d</b> إلى <b>%d</b> من <b>%d</b> صنف جديد');
//define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'عرض <b>%d</b> إلى <b>%d</b> من <b>%d</b> العروض الخاصة');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '<p align="left">عرض <b>%d</b> إلى <b>%d</b> (من <b>%d</b> طلبيه)</p>');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '<p align="left">عرض <b>%d</b> إلى <b>%d</b> (من <b>%d</b> مراجعه)</p>');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', '<p align="left">عرض <b>%d</b> إلى <b>%d</b> (من <b>%d</b> صنف جديد)</p>');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '<p align="left">عرض <b>%d</b> إلى <b>%d</b> (من <b>%d</b> العروض الخاصة)</p>');

define('PREVNEXT_TITLE_FIRST_PAGE', 'الصفحه الأولى');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'الصفحه السابقه');
define('PREVNEXT_TITLE_NEXT_PAGE', 'الصفحه التاليه');
define('PREVNEXT_TITLE_LAST_PAGE', 'الصفحه الأخيره');
define('PREVNEXT_TITLE_PAGE_NO', 'صفحه %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'المجموعه السابقه من %d صفحات');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'المجموعه التاليه من %d صفحات');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;أول');
define('PREVNEXT_BUTTON_PREV', '<u>[&lt;&lt;&nbsp;<span lang="ar-eg">السابق</span>]</u>');
define('PREVNEXT_BUTTON_NEXT', '<u>[<span lang="ar-eg">التالي</span>&nbsp;&gt;&gt;]</u></a><span lang="ar-eg"><u>0</u></span>&nbsp;');
define('PREVNEXT_BUTTON_LAST', '&gt;&gt;أخير');

define('IMAGE_BUTTON_ADD_ADDRESS', 'إضافة عنوان');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'دفتر العناوين');
define('IMAGE_BUTTON_BACK', 'رجوع');
define('IMAGE_BUTTON_BUY_NOW', 'شراء الآن');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'تغيير عنوان');
define('IMAGE_BUTTON_CHECKOUT', 'محاسبه');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'تأكيد الطلبيه');
define('IMAGE_BUTTON_CONTINUE', 'إستمرار');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'استمرار الشراء');
define('IMAGE_BUTTON_DELETE', 'حذف');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'تحرير الإشتراك');
define('IMAGE_BUTTON_HISTORY', 'محفوظات الطلبيه');
define('IMAGE_BUTTON_LOGIN', 'الدخول');
define('IMAGE_BUTTON_IN_CART', 'في السله');
define('IMAGE_BUTTON_NOTIFICATIONS', 'التبليغات');
define('IMAGE_BUTTON_QUICK_FIND', 'بحث سريع');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'الغاء التبليغات');
define('IMAGE_BUTTON_REVIEWS', 'مراجعه');
define('IMAGE_BUTTON_SEARCH', 'البحث');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'خيارات الشحن');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'أخبر صديقك');
define('IMAGE_BUTTON_UPDATE', 'Update');
define('IMAGE_BUTTON_UPDATE_CART', 'تجديد السله');
define('IMAGE_BUTTON_WRITE_REVIEW', 'كتابة مراجعه');

define('SMALL_IMAGE_BUTTON_DELETE', 'الغاء');
define('SMALL_IMAGE_BUTTON_EDIT', 'اضافة');
define('SMALL_IMAGE_BUTTON_VIEW', 'استعراض');

define('ICON_ARROW_RIGHT', 'أكثر');
define('ICON_CART', 'في العربةِ');
define('ICON_ERROR', 'خطأ');
define('ICON_SUCCESS', 'تم بنجاح');
define('ICON_WARNING', 'التحذير');

//define('TEXT_GREETING_PERSONAL', 'مرحباً بكم مره أخرى <span class="greetUser">%s!</span> هل ترغبوا في مشاهدة <a href="%s"><u>الأصناف الجديده</u></a> المتاحه للشراء؟');
define('TEXT_GREETING_PERSONAL', 'نرحب مرة <span class="greetUser">%s!</span> هل ترغب في معرفة أي <a href="%s"><u>منتجات جديدة </u></a> متاحة للشراء؟');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>إذا أنت لست %s, الرجاء <a href="%s"><u>الدخول بنفسك</u></a> بمعلومات إشتراكك.</small>');
define('TEXT_GREETING_GUEST', 'مرحباً يا <span class="greetUser">ضيفنا!</span> هل ترغب في <a href="%s"><u>الدخول بنفسك</u></a>؟ أو هل تفضل في <a href="%s"><u>إنشاء إشتراك جديد</u></a>?');

define('TEXT_SORT_PRODUCTS', 'فرز الأصناف ');
define('TEXT_DESCENDINGLY', 'تنازلياً');
define('TEXT_ASCENDINGLY', 'تصاعدياً');
define('TEXT_BY', ' بـ ');

define('TEXT_REVIEW_BY', 'بواسطة %s');
define('TEXT_REVIEW_WORD_COUNT', '%s كلمه');
define('TEXT_REVIEW_RATING', 'التقدير: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'تاريخ الإضافه: %s');
define('TEXT_NO_REVIEWS', 'لايوجد حالياً مراجعة الصنف.');

define('TEXT_NO_NEW_PRODUCTS', 'لايوجد حاليا أصناف.');

/*** Begin Header Tags SEO ***/
/*
define('BOX_HEADING_HEADERTAGS_TAGCLOUD', 'ﻊﻤﻠﻳﺎﺗ ﺎﻠﺒﺤﺛ ﺎﻠﺷﺎﺌﻋﺓ');
define('TEXT_SEE_MORE', 'ﺎﻗﺭﺃ ﺎﻠﻣﺰﻳﺩ');
*/
/*** End Header Tags SEO ***/

define('TEXT_UNKNOWN_TAX_RATE', 'نسبة الضرائب غير معروفه');

define('TEXT_REQUIRED', '<span class="errorText">مطلوب</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><strong><small>TEP خطأ:</small> لا يمكن إرسال البريد الإلكتروني من خلال خادم SMTP المحدد. يرجى التحقق من إعداد ملف php.ini الخاص بك، وتصحيح خادم SMTP إذا لزم الأمر.</strong></font>');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'تاريخ انتهاء الصلاحية دخلت لبطاقة الائتمان غير صالح. يرجى التحقق من تاريخ وحاول مرة أخرى.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'رقم بطاقة الائتمان أدخلته غير صحيح. يرجى التحقق من الرقم وحاول مرة أخرى.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'الأرقام الأربعة الأولى من الرقم الذي تم إدخاله هي:  %s. إذا كان هذا الرقم هو الصحيح، ونحن لا نقبل هذا النوع من بطاقات الائتمان. إذا كان غير صحيح، يرجى المحاولة مرة أخرى.');

define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a><br />Powered by <a href=
"http://www.oscommerce.com" target="_blank">osCommerce</a>');
?>
