<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  class nbx_contact_us {
    var $code = 'nbx_contact_us';
    var $group = 'navbar_extra_modules_left';
    var $title;
    var $description;
    var $sort_order;
    var $enabled = false;

    function __construct() {
      $this->title = MODULE_NAVBAR_EXTRA_CONTACT_US_TITLE;
      $this->description = MODULE_NAVBAR_EXTRA_CONTACT_US_DESCRIPTION;

      if ( defined('MODULE_NAVBAR_EXTRA_CONTACT_US_STATUS') ) {
        $this->sort_order = MODULE_NAVBAR_EXTRA_CONTACT_US_SORT_ORDER;
        $this->enabled = (MODULE_NAVBAR_EXTRA_CONTACT_US_STATUS == 'True');

        switch (MODULE_NAVBAR_EXTRA_CONTACT_US_CONTENT_PLACEMENT) {
          case 'Home':
          $this->group = 'navbar_extra_modules_home';
          break;
          case 'Left':
          $this->group = 'navbar_extra_modules_left';
          break;
          case 'Right':
          $this->group = 'navbar_extra_modules_right';
          break;
          case 'Buttons':
          $this->group = 'navbar_extra_modules_buttons';
          break;
        } 
      }
    }

    function getOutput() {
      global $oscTemplate;

      ob_start();
      require('includes/modules/navbar_extra_modules/templates/nbx_contact_us.php');
      $data = ob_get_clean();

      $oscTemplate->addBlock($data, $this->group);

    }

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_NAVBAR_EXTRA_CONTACT_US_STATUS');
    }

    function install() {
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Contact us Module', 'MODULE_NAVBAR_EXTRA_CONTACT_US_STATUS', 'True', 'Do you want to add the module to your Navbar?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Content Placement', 'MODULE_NAVBAR_EXTRA_CONTACT_US_CONTENT_PLACEMENT', 'Left', 'Choose placement.', '6', '1', 'tep_cfg_select_option(array(\'Left\',\'Right\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_NAVBAR_EXTRA_CONTACT_US_SORT_ORDER', '550', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
    }

    function remove() {
      tep_db_query("delete from configuration where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_NAVBAR_EXTRA_CONTACT_US_STATUS', 'MODULE_NAVBAR_EXTRA_CONTACT_US_CONTENT_PLACEMENT', 'MODULE_NAVBAR_EXTRA_CONTACT_US_SORT_ORDER');
    }
  }
