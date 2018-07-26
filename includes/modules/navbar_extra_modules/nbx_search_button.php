<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  class nbx_search_button {
    var $code = 'nbx_search_button';
    var $group = 'navbar_extra_modules_buttons';
    var $title;
    var $description;
    var $sort_order;
    var $enabled = false;

    function __construct() {
      $this->title = MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_TITLE;
      $this->description = MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_DESCRIPTION;

      if ( defined('MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_STATUS') ) {
        $this->sort_order = MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_SORT_ORDER;
        $this->enabled = (MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_STATUS == 'True');
      }
    }

    function getOutput() {
      global $oscTemplate, $request_type;
      require('includes/modules/navbar_extra_modules/templates/nbx_search_button.php');

      $oscTemplate->addBlock($button, 'navbar_extra_modules_buttons');
      $oscTemplate->addBlock($collapsible_menu, 'navbar_extra_modules_collapsible');
    }

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_STATUS');
    }

    function install() {
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Search Button Module', 'MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_STATUS', 'True', 'Do you want to add the module to your Navbar?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Content Placement', 'MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_CONTENT_PLACEMENT', 'Home', 'This module must be placed in the Buttons area of the Navbar.', '6', '1', 'tep_cfg_select_option(array(\'Buttons\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_SORT_ORDER', '500', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
    }

    function remove() {
      tep_db_query("delete from configuration where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_STATUS', 'MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_CONTENT_PLACEMENT', 'MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_SORT_ORDER');
    }
  }
