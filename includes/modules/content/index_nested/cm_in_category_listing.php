<?php
/*
  $Id: 

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  class cm_in_category_listing {
    var $code;
    var $group;
    var $title;
    var $description;
    var $sort_order;
    var $enabled = false;

    function __construct() {
      $this->code = get_class($this);
      $this->group = basename(dirname(__FILE__));

      $this->title = MODULE_CONTENT_IN_CATEGORY_LISTING_TITLE;
      $this->description = MODULE_CONTENT_IN_CATEGORY_LISTING_DESCRIPTION;
      $this->description .= '<div class="secWarning">' . MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION . '</div>';

      if ( defined('MODULE_CONTENT_IN_CATEGORY_LISTING_STATUS') ) {
        $this->sort_order = MODULE_CONTENT_IN_CATEGORY_LISTING_SORT_ORDER;
        $this->enabled = (MODULE_CONTENT_IN_CATEGORY_LISTING_STATUS == 'True');
      }      
    }

    function execute() {
      global $oscTemplate, $current_category_id, $OSCOM_category;
      
      $content_width  = MODULE_CONTENT_IN_CATEGORY_LISTING_CONTENT_WIDTH;
      $category_width = MODULE_CONTENT_IN_CATEGORY_LISTING_CONTENT_WIDTH_EACH;
      
      $category_name  = $OSCOM_category->getData($current_category_id, 'name');
      $category_level = $OSCOM_category->setMaximumLevel(1);
      $category_array = $OSCOM_category->buildBranchArray($current_category_id, $category_level);

      ob_start();
      include('includes/modules/content/' . $this->group . '/templates/tpl_' . basename(__FILE__));
      $template = ob_get_clean();

      $oscTemplate->addContent($template, $this->group);
    }

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_CONTENT_IN_CATEGORY_LISTING_STATUS');
    }

    function install() {
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Category Listing Module', 'MODULE_CONTENT_IN_CATEGORY_LISTING_STATUS', 'True', 'Should this module be enabled?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Content Width', 'MODULE_CONTENT_IN_CATEGORY_LISTING_CONTENT_WIDTH', '12', 'What width container should the content be shown in?', '6', '2', 'tep_cfg_select_option(array(\'12\', \'11\', \'10\', \'9\', \'8\', \'7\', \'6\', \'5\', \'4\', \'3\', \'2\', \'1\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Category Width', 'MODULE_CONTENT_IN_CATEGORY_LISTING_CONTENT_WIDTH_EACH', '4', 'What width container should each Category be shown in?', '6', '3', 'tep_cfg_select_option(array(\'12\', \'11\', \'10\', \'9\', \'8\', \'7\', \'6\', \'5\', \'4\', \'3\', \'2\', \'1\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_CONTENT_IN_CATEGORY_LISTING_SORT_ORDER', '200', 'Sort order of display. Lowest is displayed first.', '6', '4', now())");
    }

    function remove() {
      tep_db_query("delete from configuration where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }
    
    function keys() {
      return array('MODULE_CONTENT_IN_CATEGORY_LISTING_STATUS', 'MODULE_CONTENT_IN_CATEGORY_LISTING_CONTENT_WIDTH', 'MODULE_CONTENT_IN_CATEGORY_LISTING_CONTENT_WIDTH_EACH', 'MODULE_CONTENT_IN_CATEGORY_LISTING_SORT_ORDER');
    }  
  }
  