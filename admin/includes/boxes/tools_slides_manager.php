<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  foreach ( $cl_box_groups as &$group ) {
    if ( $group['heading'] == BOX_HEADING_TOOLS ) {
      $group['apps'][] = array('code' => 'slides_manager.php',
                               'title' => MODULES_ADMIN_MENU_TOOLS_SLIDES_MANAGER,
                               'link' => tep_href_link('slides_manager.php'));

      break;
    }
  }
  