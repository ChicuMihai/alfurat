<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2017 osCommerce

  Released under the GNU General Public License
  
*/

  class cm_header_catmenu {
	var $version = '1.4';
    var $code;
    var $group;
    var $title;
    var $description;
    var $sort_order;
    var $enabled = false;

    function __construct() {
      $this->code = get_class($this);
      $this->group = basename(dirname(__FILE__));

      $this->title = MODULE_CONTENT_HEADER_CATMENU_TITLE;
      $this->description = MODULE_CONTENT_HEADER_CATMENU_DESCRIPTION;
		
      if ( defined('MODULE_CONTENT_HEADER_CATMENU_STATUS') ) {
        $this->sort_order = MODULE_CONTENT_HEADER_CATMENU_SORT_ORDER;
        $this->enabled = (MODULE_CONTENT_HEADER_CATMENU_STATUS == 'True');
      }
    }
  
    function execute() {
      global $oscTemplate;
	  
      ob_start();
      include('includes/modules/content/' . $this->group . '/templates/catmenu.php');
      $data = ob_get_clean();

      $oscTemplate->addContent($data, $this->group);
    }

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_CONTENT_HEADER_CATMENU_STATUS');
    }

    function install() {
	  tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ( 'Module Version', 'MODULE_CONTENT_HEADER_CATMENU_VERSION', '" . $this->version . "', 'The version of this module that you are running', '6', '0', 'tep_cfg_disabled(', now() ) ");		
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Header Horizontal Menu Module', 'MODULE_CONTENT_HEADER_CATMENU_STATUS', 'True', 'Do you want to enable the Horizontal Menu content module?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable parent category link', 'MODULE_CONTENT_HEADER_CATMENU_PARENT_LINK', 'True', 'Do you want to enable the parent category link function?', '6', '2', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable divider', 'MODULE_CONTENT_HEADER_CATMENU_DIVIDER', 'True', 'Do you want to show a divider for more clarity?', '6', '3', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable category images', 'MODULE_CONTENT_HEADER_CATMENU_IMAGE', 'False', 'Do you want to show category images?', '6', '4', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_CONTENT_HEADER_CATMENU_SORT_ORDER', '120', 'Sort order of display. Lowest is displayed first.<br /><em>*Default is 120.</em>', '6', '5', now())");
    }

    function remove() {
      tep_db_query("delete from configuration where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_CONTENT_HEADER_CATMENU_VERSION', 
	               'MODULE_CONTENT_HEADER_CATMENU_STATUS', 
				   'MODULE_CONTENT_HEADER_CATMENU_PARENT_LINK', 
				   'MODULE_CONTENT_HEADER_CATMENU_DIVIDER', 
				   'MODULE_CONTENT_HEADER_CATMENU_IMAGE', 
				   'MODULE_CONTENT_HEADER_CATMENU_SORT_ORDER');
    }
  }
  
  //added function
    function build_hoz($class='') {
		global $cPath, $level;

		if (empty($class)) $class = 'nav navbar-nav';

		$OSCOM_CategoryTree = new explode_category_tree();
		$data = '<ul class="' . $class . '">' . $OSCOM_CategoryTree->getExTree() . '</ul>';

		return $data;
	}

  ////
  // Function to show a disabled entry (Value is shown but cannot be changed)
  if( !function_exists( 'tep_cfg_disabled' ) ) {
    function tep_cfg_disabled( $value ) {
      return tep_draw_input_field( 'configuration_value', $value, ' disabled' );
    }
  }