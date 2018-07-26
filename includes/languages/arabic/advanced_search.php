<?php
/*
  $Id: advanced_search.php for Arabic 2012-02-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

//define('NAVBAR_TITLE', 'بحث متقدم');
//define('HEADING_TITLE', 'أدخل معايير البحث');

define('NAVBAR_TITLE_1', 'بحث متقدم');
define('NAVBAR_TITLE_2', 'نتيجة البحث');

define('HEADING_TITLE_1', 'بحث متقدم');
define('HEADING_TITLE_2', 'نتيجة البحث المطلوبة');

define('HEADING_SEARCH_CRITERIA', 'معاير البحث');

define('TEXT_SEARCH_IN_DESCRIPTION', 'البحث بمواصفات المنتج');
define('ENTRY_CATEGORIES', 'الأقسام:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'تتضمن الأقسام الفرعيه');
define('ENTRY_MANUFACTURERS', 'الوكلاء الموردون:');
define('ENTRY_PRICE_FROM', 'سعر يبدأ من:');
define('ENTRY_PRICE_TO', 'السعر الي:');
define('ENTRY_DATE_FROM', 'تاريخ الإضافه من:');
define('ENTRY_DATE_TO', 'إلى:');

define('TEXT_SEARCH_HELP_LINK', '<u>مساعدة في البحث؟</u>');

define('TEXT_ALL_CATEGORIES', 'كل الأقسام');
define('TEXT_ALL_MANUFACTURERS', 'كل الوكلاء الموردين');

define('HEADING_SEARCH_HELP', '>تعرف عن البحث المتقدم!؟');
define('TEXT_SEARCH_HELP', '&nbsp;<b>تعرف عن البحث المتقدم!؟</b></font>'.'<br><br>محرك البحث يسمح لك بالبحث بكلمات البحث الرئيسيه عن الصنف من ناحية إسمه, نوعه, المنتجين, وحتى وصفه<br><br>عندما تبحث عن كلمات, فإنك تستطيع فصل الكلمات أو العبارات بـ و / وكذلك تستطيع فصلها بـ أو. على سبيل المثال, تستطيع إدخال <u>جرير و كتاب</u>.لاحظ الفراغ. وبالتالي سوف يعطي هذا البحث نتيجة الكلمتان معاً . وأيضاً, إذا كتبت <u>عطر أو لعبه</u>, سوف تحصل على قائمة الأصناف التي تحتوي على إحدى الكلمتان أو الكلمتان معاً. إذا لم يتم فصل الكلمات بـ و/أو سوف يتحول التشغيل المنطقي لـ ' . strtoupper(ADVANCED_SEARCH_DEFAULT_OPERATOR) . '.<br><br>وتستطيع كذلك البحث عن كلمات متوافقه ومضبوطه وذلك بتضمينها داخل أقواس الإقتباس. على سبيل المثال, إذا كنت تريد البحث عن <u>"عطر باي"</u>, سوف تحصل بقائمة الأصناف التي تحتوي على الكلمه أو الكلمات الموجوده داخل الأقواس المقتبسه متوافقه ومظبوطه بها.<br><br>الأقواس العاديه تستخدم للتحكم بترتيب المشغل المنطقي. على سبيل المثال, تستطيع إدخال <u>نينتيندو و (كلمه أو إكسسوارات أو "عطر باي")</u>.');
define('TEXT_CLOSE_WINDOW', '<u>اغلاق</u> [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'موديل');
define('TABLE_HEADING_PRODUCTS', 'إسم الصنف');
define('TABLE_HEADING_MANUFACTURER', 'إسم الوكيل المورد');
define('TABLE_HEADING_QUANTITY', 'الكمية');
define('TABLE_HEADING_PRICE', 'السعر');
define('TABLE_HEADING_WEIGHT', 'الوزن');
define('TABLE_HEADING_BUY_NOW', 'اشتري الآن');

define('TEXT_NO_PRODUCTS', 'ليس لدينا منتجات مطابقة لمواصفات هذا البحث');
define('ERROR_AT_LEAST_ONE_INPUT', '* أحد الحقول التاليه مطلوب إدخاله:\n    كلمات\n    تاريخ الإضافه من\n    تاريخ الإضافه إلى\n    سعر يبدأ من\n    سعر إلى\n');
define('ERROR_INVALID_FROM_DATE', '* تاريخ الإضافه من خاطئ\n');
define('ERROR_INVALID_TO_DATE', '* إلى تاريخ الإضافه خاطئ\n');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '* التاريخ يجب أن يكون متساوي من ناحية التحديث\n');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '* السعر يجب أن يكون رقم\n');
define('ERROR_PRICE_TO_MUST_BE_NUM', '* السعر يجب أن يكون رقم\n');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '* السعران لابد أن يكونان متساويان أو أكبر\n');
define('ERROR_INVALID_KEYWORDS', '* كلمات بحث رئيسيه خاطئه\n');

?>
