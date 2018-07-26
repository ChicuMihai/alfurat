<?php
/*
  $Id: cm_header_nivo_slider.php, v2.1 20161224 - f.figue$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  class cm_header_nivo_slider {
    public $version = '2.2';
    public $code;
    public $group;
    public $title;
    public $description;
    public $sort_order;
    public $enabled = false;

    public function __construct() {
      $this->code = get_class($this);
      $this->group = basename(dirname(__FILE__));

      $this->title = MODULE_CONTENT_HEADER_NIVO_SLIDER_TITLE;
      $this->description = MODULE_CONTENT_HEADER_NIVO_SLIDER_DESCRIPTION;

      if (defined('MODULE_CONTENT_HEADER_NIVO_SLIDER_STATUS')) {
        $this->sort_order = MODULE_CONTENT_HEADER_NIVO_SLIDER_SORT_ORDER;
        $this->enabled = (MODULE_CONTENT_HEADER_NIVO_SLIDER_STATUS == 'True');
      }
    }

    public function execute() {
      global $oscTemplate;
      
      $this->set_css();
      $this->set_javascript();

      $slides_query = $this->get_slides_data();
      if( tep_db_num_rows($slides_query) > 0 ) {
        
        ob_start();
        include('includes/modules/content/' . $this->group . '/templates/' . basename(__FILE__));
        $template = ob_get_clean();

        $oscTemplate->addContent($template, $this->group);
      }
    }

    public function isEnabled() {
      return $this->enabled;
    }

    public function check() {
      return defined('MODULE_CONTENT_HEADER_NIVO_SLIDER_STATUS');
    }

    public function install() {
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Module Version', 'MODULE_CONTENT_HEADER_NIVO_SLIDER_VERSION', '" . $this->version . "', 'The version of this module that you are running.', '6', '0', 'tep_cfg_disabled(', now() ) ");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Nivo Slider', 'MODULE_CONTENT_HEADER_NIVO_SLIDER_STATUS', 'True', 'Do you want to show the nivo slider?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_CONTENT_HEADER_NIVO_SLIDER_SORT_ORDER', '80', 'Sort order of display. Lowest is displayed first.', '6', '2', now())");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Content Width', 'MODULE_CONTENT_HEADER_NIVO_SLIDER_CONTENT_WIDTH', '12', 'What width container should the content be shown in?', '6', '3', 'tep_cfg_select_option(array(\'12\', \'11\', \'10\', \'9\', \'8\', \'7\', \'6\', \'5\', \'4\', \'3\', \'2\', \'1\'), ', now())");
  // add configuration
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Effect', 'MC_HD_EFFECT_NIVO', 'random', 'random, sliceDownRight, sliceDownLeft, sliceUpRight, sliceUpLeft, sliceUpDown, sliceUpDownLeft, fold, fade, boxRandom, boxRain, boxRainReverse, boxRainGrow, boxRainGrowReverse', '6', '0', now(), NULL, 'tep_cfg_select_option(array(\'random\', \'sliceDownRight\', \'sliceDownLeft\', \'sliceUpRight\', \'sliceUpLeft\', \'sliceUpDown\', \'sliceUpDownLeft\', \'fold\', \'fade\', \'boxRandom\', \'boxRain\', \'boxRainReverse\', \'boxRainGrow\', \'boxRainGrowReverse\'), ')");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Delay pauseTime', 'MC_HD_PAUSETIME_NIVO', '5000', 'Delay between images in ms', '6', '0', now(), NULL, NULL)");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Slides Limit', 'MODULE_CONTENT_HEADER_NIVO_SLIDER_LIMIT', '12', 'Limit of slides to database query', '6', '0', now(), NULL, NULL)");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Control Navigation', 'MC_HD_CONTROLNAV_NIVO', 'true', 'Show control 1,2,3...', '6', '0', now(), NULL, 'tep_cfg_select_option(array(\'true\', \'false\'), ')");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Navigation', 'MC_HD_NAVIGATION_NIVO', 'true', 'Show navigation prev next', '6', '0', now(), NULL, 'tep_cfg_select_option(array(\'true\', \'false\'), ')");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Hover Pause', 'MC_HD_HOVERPAUSE_NIVO', 'true', 'Stop animation while hovering', '6', '0', now(), NULL, 'tep_cfg_select_option(array(\'true\', \'false\'), ')");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Delay animSpeed', 'MC_HD_ANIMSPEED_NIVO', '500', 'Delay beetwen slides in ms', '6', '0', now(), NULL, NULL)");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Start Slide', 'MC_HD_START_SLIDE_NIVO', '0', 'Set starting Slide (0 index)', '6', '0', now(), NULL, NULL)");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Show Slide Description', 'MODULE_CONTENT_HEADER_NIVO_SLIDER_CAPTION', 'true', 'Show Slide Description in slider', '6', '0', now(), NULL, 'tep_cfg_select_option(array(''true'', ''false''), ')");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) values ('Slide group for slider', 'MODULE_CONTENT_HEADER_NIVO_SLIDER_GROUP', 'headerslider', 'Group of slides for Nivo Slider.<br>adds a single group of slides or more groups separate by : ej. group1 or group1:group2: group3 <br>leave the field empty if you do not want to use groups', '6', '0', now(), NULL, NULL)");
	  tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Delete auto created tables on module Remove', 'MODULE_CONTENT_HEADER_NIVO_SLIDER_DELETE_TABLES', 'False', 'Do you want to remove the tables that where created during installing this module?<br><i>Note: all the created data will be deleted</i>.', '6', '13', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
    // CREATE NEEDED TABLE INTO DB
      tep_db_query("
     CREATE TABLE IF NOT EXISTS `slides` (
	  `slides_id` int(11) NOT NULL AUTO_INCREMENT,
	  `slides_url` varchar(255) NOT NULL,
	  `slides_image` varchar(64) NOT NULL,
	  `slides_group` varchar(64) NOT NULL,
	  `date_added` datetime NOT NULL,
	  `date_status_change` datetime DEFAULT NULL,
	  `status` int(1) NOT NULL DEFAULT '1',
	  PRIMARY KEY (`slides_id`),
	  KEY `idx_slides_group` (`slides_group`)
	  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
     ");
 
      tep_db_query("
     CREATE TABLE IF NOT EXISTS `slides_description` (
	  `slides_id` int(11) NOT NULL AUTO_INCREMENT,
	  `language_id` int(11) NOT NULL DEFAULT '1',
	  `slides_title` varchar(64) NOT NULL,
	  `slides_description` text,
	  PRIMARY KEY (`slides_id`,`language_id`),
	  KEY `slides_title` (`slides_title`)
	  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
     ");

    }

    public function remove() {
      tep_db_query("delete from configuration where configuration_key in ('" . implode("', '", $this->keys()) . "')");
	  	// DELETE TABLE IF SET TO TRUE
		if($this->delete_tables){	  
		  tep_db_query("DROP TABLE IF EXISTS `slides`");
		  tep_db_query("DROP TABLE IF EXISTS `slides_description`");
		}

    }

    public function keys() {
      $keys = array();
      $keys[] = 'MODULE_CONTENT_HEADER_NIVO_SLIDER_VERSION';
      $keys[] = 'MODULE_CONTENT_HEADER_NIVO_SLIDER_STATUS';
      $keys[] = 'MODULE_CONTENT_HEADER_NIVO_SLIDER_SORT_ORDER';
      $keys[] = 'MODULE_CONTENT_HEADER_NIVO_SLIDER_CONTENT_WIDTH';
      $keys[] = 'MODULE_CONTENT_HEADER_NIVO_SLIDER_LIMIT'; 
      $keys[] = 'MODULE_CONTENT_HEADER_NIVO_SLIDER_GROUP';
      $keys[] = 'MODULE_CONTENT_HEADER_NIVO_SLIDER_CAPTION';
      $keys[] = 'MC_HD_EFFECT_NIVO';
      $keys[] = 'MC_HD_PAUSETIME_NIVO';
      $keys[] = 'MC_HD_ANIMSPEED_NIVO';
      $keys[] = 'MC_HD_CONTROLNAV_NIVO';
      $keys[] = 'MC_HD_NAVIGATION_NIVO';
      $keys[] = 'MC_HD_HOVERPAUSE_NIVO';
      $keys[] = 'MC_HD_START_SLIDE_NIVO';
      $keys[] = 'MODULE_CONTENT_HEADER_NIVO_SLIDER_DELETE_TABLES';
      return $keys;
    }

///////////////

    private function get_slides_data() {
      global $languages_id;
	  
	// select banners_group to be used
     $new_banner_search = '';
     if (MODULE_CONTENT_HEADER_NIVO_SLIDER_GROUP != '') {	
       $selected_banners = explode(':', MODULE_CONTENT_HEADER_NIVO_SLIDER_GROUP);
       $size = sizeof($selected_banners);
      if ($size == 1) {
        $new_banner_search .= " slides_group = '" . trim($selected_banners[0]) . "'"; // elimino espacios al principio y al final.
       } else {
        for ($i=0, $n=$size; $i<$n; $i+=1) {
          $new_banner_search .= " slides_group = '" . trim($selected_banners[$i]) . "'"; // elimino espacios al principio y al final.
           if ($i+1 < $n) {
            $new_banner_search .= ' or ';
           }
        }
       }
	
        if ($new_banner_search != '') {
         $new_banner_search = ' and (' . $new_banner_search . ')';
        } 
     } 

   	$slides_query_raw = tep_db_query("select s.slides_id, sd.slides_title, s.slides_url, s.slides_image, sd.slides_description from slides s, slides_description sd where status = 1 " . $new_banner_search . " and s.slides_id = sd.slides_id and sd.language_id = '" . (int)$languages_id . "' order by rand() limit " . MODULE_CONTENT_HEADER_NIVO_SLIDER_LIMIT);

      return $slides_query_raw;
    }
    
    private function set_css() {
      global $oscTemplate;
      
      // Set the CSS to load in the footer
      $add_css = '';
      $add_css .= '  <link rel="stylesheet" href="ext/modules/content/index/nivo_slider/nivo-slider.css" type="text/css" media="screen" />' . PHP_EOL;

      $oscTemplate->addBlock($add_css, 'footer_scripts');
    }
    
    private function set_javascript() {
      global $oscTemplate;
      
 // Set the JavaScript to load in the footer
   $add_scripts = '';
   $add_scripts .= '<script type="text/javascript" src="ext/modules/content/index/nivo_slider/jquery.nivo.slider.pack.js"></script>';
   $add_scripts .= '
	<script type="text/javascript">
    $(document).ready(function() {
		  $(\'#sliderheader\').nivoSlider ({
				effect:\''.MC_HD_EFFECT_NIVO.'\', 
				animSpeed:'.MC_HD_ANIMSPEED_NIVO.', // 
				pauseTime:'.MC_HD_PAUSETIME_NIVO.',
				startSlide:'.MC_HD_START_SLIDE_NIVO.', //Set starting Slide (0 index)
				directionNav:'.MC_HD_NAVIGATION_NIVO.', //Next & Prev
				controlNav:'.MC_HD_CONTROLNAV_NIVO.', //1,2,3...
				pauseOnHover:'.MC_HD_HOVERPAUSE_NIVO.' //Stop animation while hovering
			});
		});	
    </script>' . PHP_EOL;

      $oscTemplate->addBlock($add_scripts, 'footer_scripts');
    }

  }// End class
  
  
  ////////////////////////////////////////////////////////////////////////////
  //                                                                        //
  //  This is the end of the module class.                                  //
  //  Everything past this point is an independent function, not a method.  //
  //                                                                        //
  ////////////////////////////////////////////////////////////////////////////


  ////
  // Function to show a disabled entry (Value is shown but cannot be changed)
  if (!function_exists('tep_cfg_disabled')) {

    function tep_cfg_disabled($value) {
      return tep_draw_input_field('configuration_value', $value, ' disabled');
    }

  }
