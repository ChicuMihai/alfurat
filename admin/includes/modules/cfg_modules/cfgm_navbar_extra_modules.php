<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  class cfgm_navbar_extra_modules {
    var $code = 'navbar_extra_modules';
    var $directory;
    var $language_directory = DIR_FS_CATALOG_LANGUAGES;
    var $key = 'MODULE_CONTENT_NAVBAR_EXTRA_INSTALLED';
    var $title;
    var $template_integration = false;

    function __construct() {
      $this->directory = DIR_FS_CATALOG_MODULES . 'navbar_extra_modules/';
      $this->title = MODULE_CFG_MODULE_CONTENT_NAVBAR_EXTRA_TITLE;
    }
  }