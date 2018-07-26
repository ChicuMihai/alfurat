<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'الدليل جلسات غير موجود: ' . tep_session_save_path() . '. وسوف جلسات لا تعمل حتى يتم إنشاء هذا الدليل.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'أنا لست قادرا على الكتابة إلى الدليل جلسات: ' . tep_session_save_path() . '. وسوف جلسات لا تعمل حتى يتم تعيين أذونات المستخدم الصحيح.');
?>
