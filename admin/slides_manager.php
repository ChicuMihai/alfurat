<?php
/*
  $Id slides_manager.php - created by f.figue$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

////
// Sets the status of a slide
  function tep_set_slider_status($slides_id, $status) {
    if ($status == '1') {
      return tep_db_query("update slides set status = '1', expires_impressions = NULL, expires_date = NULL, date_status_change = NULL where slides_id = '" . $slides_id . "'");
    } elseif ($status == '0') {
      return tep_db_query("update slides set status = '0', date_status_change = now() where slides_id = '" . $slides_id . "'");
    } else {
      return -1;
    }
  }

////  
// Get the title of a slide
  function tep_get_slides_title($slides_id, $language_id = 0) {
    global $languages_id;

    if ($language_id == 0) $language_id = $languages_id;
    $slides_query = tep_db_query("select slides_title from slides_description where slides_id = '" . (int)$slides_id . "' and language_id = '" . (int)$language_id . "'");
    $slides = tep_db_fetch_array($slides_query);

    return $slides['slides_title'];
  }

////
// Get the description of a slide
  function tep_get_slides_description($slides_id, $language_id) {
    $slides_query = tep_db_query("select slides_description from slides_description where slides_id = '" . (int)$slides_id . "' and language_id = '" . (int)$language_id . "'");
    $slides = tep_db_fetch_array($slides_query);

    return $slides['slides_description'];
  }

  $action = (isset($_GET['action']) ? $_GET['action'] : '');

  if (tep_not_null($action)) {
    switch ($action) {
      case 'setflag':
        if ( ($_GET['flag'] == '0') || ($_GET['flag'] == '1') ) {
          tep_set_slider_status($_GET['sID'], $_GET['flag']);

          $messageStack->add_session(SUCCESS_SLIDE_STATUS_UPDATED, 'success');
        } else {
          $messageStack->add_session(ERROR_UNKNOWN_STATUS_FLAG, 'error');
        }

        tep_redirect(tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $_GET['sID']));
        break;
      case 'insert':
      case 'update':
        if (isset($_POST['slides_id'])) $slides_id = tep_db_prepare_input($_POST['slides_id']);
        $slides_url = tep_db_prepare_input($_POST['slides_url']);
        $new_slides_group = tep_db_prepare_input($_POST['new_slides_group']);
        $slides_group = (empty($new_slides_group)) ? tep_db_prepare_input($_POST['slides_group']) : $new_slides_group;
        $slides_image_local = tep_db_prepare_input($_POST['slides_image_local']);
        $slides_image_target = tep_db_prepare_input($_POST['slides_image_target']);
        $db_image_location = '';

        $slide_error = false;
        if (empty($slides_group)) {
          $messageStack->add(ERROR_SLIDER_GROUP_REQUIRED, 'error');
          $slide_error = true;
        }

        if (empty($slides_image_local)) {
	      // creo el directorio si no existe
		  if(!is_dir(DIR_FS_CATALOG_IMAGES . $slides_image_target)) mkdir(DIR_FS_CATALOG_IMAGES . $slides_image_target, 0777);
          $slides_image = new upload('slides_image');
          $slides_image->set_destination(DIR_FS_CATALOG_IMAGES . $slides_image_target);
          if ( ($slides_image->parse() == false) || ($slides_image->save() == false) ) {
            $slide_error = true;
          }
        }

        if ($slide_error == false) {
          $db_image_location = (tep_not_null($slides_image_local)) ? $slides_image_local : $slides_image_target . $slides_image->filename;
          $sql_data_array = array('slides_url' => $slides_url,
                                  'slides_image' => $db_image_location,
                                  'slides_group' => $slides_group);

          if ($action == 'insert') {
            $insert_sql_data = array('date_added' => 'now()',
                                     'status' => '1');

            $sql_data_array = array_merge($sql_data_array, $insert_sql_data);

            tep_db_perform('slides', $sql_data_array);

            $slides_id = tep_db_insert_id();

            $messageStack->add_session(SUCCESS_SLIDE_INSERTED, 'success');
          } elseif ($action == 'update') {
            tep_db_perform('slides', $sql_data_array, 'update', "slides_id = '" . (int)$slides_id . "'");

            $messageStack->add_session(SUCCESS_SLIDE_UPDATED, 'success');
          }
		  
        $languages = tep_get_languages();
        for ($i=0, $n=sizeof($languages); $i<$n; $i++) {
          $language_id = $languages[$i]['id'];

          $sql_data_array = array('slides_title' => tep_db_prepare_input($_POST['slides_title'][$language_id]),
                                  'slides_description' => tep_db_prepare_input($_POST['slides_description'][$language_id]));

          if ($action == 'insert') {
            $insert_sql_data = array('slides_id' => $slides_id,
                                     'language_id' => $language_id);

            $sql_data_array = array_merge($sql_data_array, $insert_sql_data);

            tep_db_perform('slides_description', $sql_data_array);
          } elseif ($action == 'update') {
            tep_db_perform('slides_description', $sql_data_array, 'update', "slides_id = '" . (int)$slides_id . "' and language_id = '" . (int)$language_id . "'");
          }
        }
		  
          tep_redirect(tep_href_link('slides_manager.php', (isset($_GET['page']) ? 'page=' . $_GET['page'] . '&' : '') . 'sID=' . $slides_id));
        } else {
          $action = 'new';
        }
        break;
      case 'deleteconfirm':
        $slides_id = tep_db_prepare_input($_GET['sID']);

        if (isset($_POST['delete_image']) && ($_POST['delete_image'] == 'on')) {
          $slide_query = tep_db_query("select slides_image from slides where slides_id = '" . (int)$slides_id . "'");
          $slide = tep_db_fetch_array($slide_query);

          if (is_file(DIR_FS_CATALOG_IMAGES . $slide['slides_image'])) {
            if (tep_is_writable(DIR_FS_CATALOG_IMAGES . $slide['slides_image'])) {
              unlink(DIR_FS_CATALOG_IMAGES . $slide['slides_image']);
            } else {
              $messageStack->add_session(ERROR_IMAGE_IS_NOT_WRITEABLE, 'error');
            }
          } else {
            $messageStack->add_session(ERROR_IMAGE_DOES_NOT_EXIST, 'error');
          }
        }

        tep_db_query("delete from slides where slides_id = '" . (int)$slides_id . "'");
        tep_db_query("delete from slides_description where slides_id = '" . (int)$slides_id . "'");

        $messageStack->add_session(SUCCESS_SLIDE_REMOVED, 'success');

        tep_redirect(tep_href_link('slides_manager.php', 'page=' . $_GET['page']));
        break;
    }
  }

  require('includes/template_top.php');
?>

    <table border="0" width="100%" cellspacing="0" cellpadding="2">
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td class="pageHeading"><?php echo HEADING_TITLE; ?></td>
            <td class="pageHeading" align="right"><?php echo tep_draw_separator('pixel_trans.gif', HEADING_IMAGE_WIDTH, HEADING_IMAGE_HEIGHT); ?></td>
          </tr>
        </table></td>
      </tr>
<?php
  if ($action == 'new') {
    $form_action = 'insert';

    $parameters = array('slides_title' => '',
                        'slides_id' => '',
                        'slides_url' => '',
                        'slides_group' => '',
                        'slides_image' => '',
                        'slides_description' => '');

    $sInfo = new objectInfo($parameters);

    if (isset($_GET['sID'])) {
      $form_action = 'update';

      $sID = tep_db_prepare_input($_GET['sID']);

      $slide_query = tep_db_query("select slides_id, slides_url, slides_image, slides_group, status, date_status_change from slides where slides_id = '" . (int)$sID . "'");
      $slide = tep_db_fetch_array($slide_query);

      $sInfo->objectInfo($slide);
    } elseif (tep_not_null($_POST)) {
      $sInfo->objectInfo($_POST);
    }

    $groups_array = array();
    $groups_query = tep_db_query("select distinct slides_group from slides order by slides_group");
    while ($groups = tep_db_fetch_array($groups_query)) {
      $groups_array[] = array('id' => $groups['slides_group'], 'text' => $groups['slides_group']);
    }

    $languages = tep_get_languages();

?>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
      </tr>
      <tr><?php echo tep_draw_form('new_slide', 'slides_manager.php', (isset($_GET['page']) ? 'page=' . $_GET['page'] . '&' : '') . 'action=' . $form_action, 'post', 'enctype="multipart/form-data"'); if ($form_action == 'update') echo tep_draw_hidden_field('slides_id', $sID); ?>
        <td><table border="0" cellspacing="0" cellpadding="2">
<?php
    for ($i=0, $n=sizeof($languages); $i<$n; $i++) {
?>
          <tr>
            <td class="main"><?php if ($i == 0) echo TEXT_SLIDES_TITLE; ?></td>
            <td class="main"><?php echo tep_image(tep_catalog_href_link('includes/languages/' . $languages[$i]['directory'] . '/images/' . $languages[$i]['image'], '', 'SSL'), $languages[$i]['name']) . '&nbsp;' . tep_draw_input_field('slides_title[' . $languages[$i]['id'] . ']', (empty($sInfo->slides_id) ? '' : tep_get_slides_title($sInfo->slides_id, $languages[$i]['id']))); ?></td>
          </tr>
<?php
    }
?>
          <tr>
            <td class="main"><?php echo TEXT_SLIDES_URL; ?></td>
            <td class="main"><?php echo tep_draw_input_field('slides_url', $sInfo->slides_url) . TEXT_SLIDES_URL_INFO;?></td>
          </tr>
          <tr>
            <td class="main" valign="top"><?php echo TEXT_SLIDES_GROUP; ?></td>
            <td class="main"><?php echo tep_draw_pull_down_menu('slides_group', $groups_array, $sInfo->slides_group) . TEXT_SLIDES_NEW_GROUP . '<br />' . tep_draw_input_field('new_slides_group', '', '', ((sizeof($groups_array) > 0) ? false : true)); ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main" valign="top"><?php echo TEXT_SLIDES_IMAGE; ?></td>
            <td class="main"><?php echo tep_draw_file_field('slides_image') . ' ' . TEXT_SLIDES_IMAGE_LOCAL . '<br />' . DIR_FS_CATALOG_IMAGES . tep_draw_input_field('slides_image_local', (isset($sInfo->slides_image) ? $sInfo->slides_image : '')); ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_SLIDES_IMAGE_TARGET; ?></td>
            <td class="main"><?php echo DIR_FS_CATALOG_IMAGES . tep_draw_input_field('slides_image_target'); ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
<?php
    for ($i=0, $n=sizeof($languages); $i<$n; $i++) {
?>
          <tr>
            <td class="main" valign="top"><?php if ($i == 0) echo TEXT_SLIDES_DESCRIPTION; ?></td>
            <td><table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="main" valign="top"><?php echo tep_image(tep_catalog_href_link('includes/languages/' . $languages[$i]['directory'] . '/images/' . $languages[$i]['image'], '', 'SSL'), $languages[$i]['name']); ?>&nbsp;</td>
                <td class="main"><?php echo tep_draw_textarea_field('slides_description[' . $languages[$i]['id'] . ']', 'soft', '70', '10', (empty($sInfo->slides_id) ? '' : tep_get_slides_description($sInfo->slides_id, $languages[$i]['id']))); ?></td>

             </tr>
            </table></td>
          </tr>
<?php
    }
?>
          <tr>
          </tr>
        </table>

        </td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
          <tr>
            <td class="main"><?php echo TEXT_SLIDES_SLIDER_NOTE . '<br />' . TEXT_SLIDES_INSERT_NOTE; ?></td>
            <td class="smallText" align="right" valign="top" nowrap><?php echo tep_draw_button(IMAGE_SAVE, 'disk', null, 'primary') . tep_draw_button(IMAGE_CANCEL, 'close', tep_href_link('slides_manager.php', (isset($_GET['page']) ? 'page=' . $_GET['page'] . '&' : '') . (isset($_GET['sID']) ? 'sID=' . $_GET['sID'] : ''))); ?></td>
          </tr>
        </table></td>
      </form></tr>
<?php
  } else {
?>
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="2">
              <tr class="dataTableHeadingRow">
                <td class="dataTableHeadingContent"><?php echo TABLE_HEADING_SLIDE_IMAGE; ?></td>
                <td class="dataTableHeadingContent"><?php echo TABLE_HEADING_SLIDES; ?></td>
                <td class="dataTableHeadingContent" align="right"><?php echo TABLE_HEADING_GROUPS; ?></td>
                <td class="dataTableHeadingContent" align="right"><?php echo TABLE_HEADING_STATUS; ?></td>
                <td class="dataTableHeadingContent" align="right"><?php echo TABLE_HEADING_ACTION; ?>&nbsp;</td>
              </tr>
<?php
    $slides_query_raw = "select slides_id, slides_image, slides_group, status, date_status_change, date_added from slides order by slides_id, slides_group";
    $slides_split = new splitPageResults($_GET['page'], MAX_DISPLAY_SEARCH_RESULTS, $slides_query_raw, $slides_query_numrows);
    $slides_query = tep_db_query($slides_query_raw);
    while ($slides = tep_db_fetch_array($slides_query)) {
      if ((!isset($_GET['sID']) || (isset($_GET['sID']) && ($_GET['sID'] == $slides['slides_id']))) && !isset($sInfo) && (substr($action, 0, 3) != 'new')) {
        $sInfo = new objectInfo($slides);
      }

      if (isset($sInfo) && is_object($sInfo) && ($slides['slides_id'] == $sInfo->slides_id)) {
        echo '              <tr id="defaultSelected" class="dataTableRowSelected" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="document.location.href=\'' . tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $sInfo->slides_id . '&action=new') . '\'">' . "\n";
      } else {
        echo '              <tr class="dataTableRow" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="document.location.href=\'' . tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $slides['slides_id']) . '\'">' . "\n";
      }
?>
                <td class="dataTableContent" width="10px"><?php echo tep_info_image($slides['slides_image'], tep_get_slides_title($slides['slides_id'], $languages_id), '60', '25'); ?></td>
                <td class="dataTableContent"><?php echo tep_get_slides_title($slides['slides_id'], $languages_id); ?></td>
                <td class="dataTableContent" align="right"><?php echo $slides['slides_group']; ?></td>
                <td class="dataTableContent" align="right">
<?php
      if ($slides['status'] == '1') {
        echo tep_image('images/icon_status_green.gif', 'Active', 10, 10) . '&nbsp;&nbsp;<a href="' . tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $slides['slides_id'] . '&action=setflag&flag=0') . '">' . tep_image('images/icon_status_red_light.gif', 'Set Inactive', 10, 10) . '</a>';
      } else {
        echo '<a href="' . tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $slides['slides_id'] . '&action=setflag&flag=1') . '">' . tep_image('images/icon_status_green_light.gif', 'Set Active', 10, 10) . '</a>&nbsp;&nbsp;' . tep_image('images/icon_status_red.gif', 'Inactive', 10, 10);
      }
?></td>
                <td class="dataTableContent" align="right"><?php if (isset($sInfo) && is_object($sInfo) && ($slides['slides_id'] == $sInfo->slides_id)) { echo tep_image('images/icon_arrow_right.gif', ''); } else { echo '<a href="' . tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $slides['slides_id']) . '">' . tep_image('images/icon_info.gif', IMAGE_ICON_INFO) . '</a>'; } ?>&nbsp;</td>
              </tr>
<?php
    }
?>
              <tr>
                <td colspan="5"><table border="0" width="100%" cellspacing="0" cellpadding="2">
                  <tr>
                    <td class="smallText" valign="top"><?php echo $slides_split->display_count($slides_query_numrows, MAX_DISPLAY_SEARCH_RESULTS, $_GET['page'], TEXT_DISPLAY_NUMBER_OF_SLIDES); ?></td>
                    <td class="smallText" align="right"><?php echo $slides_split->display_links($slides_query_numrows, MAX_DISPLAY_SEARCH_RESULTS, MAX_DISPLAY_PAGE_LINKS, $_GET['page']); ?></td>
                  </tr>
                  <tr>
                    <td class="smallText" align="right" colspan="2"><?php echo tep_draw_button(IMAGE_NEW_SLIDE, 'plus', tep_href_link('slides_manager.php', 'action=new')); ?></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
<?php
  $heading = array();
  $contents = array();
  switch ($action) {
    case 'delete':
      $heading[] = array('text' => '<strong>' . $sInfo->slides_title . '</strong>');

      $contents = array('form' => tep_draw_form('slides', 'slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $sInfo->slides_id . '&action=deleteconfirm'));
      $contents[] = array('text' => TEXT_INFO_DELETE_INTRO);
      $contents[] = array('text' => '<br /><strong>' . $sInfo->slides_title . '</strong>');
      if ($sInfo->slides_image) $contents[] = array('text' => '<br />' . tep_draw_checkbox_field('delete_image', 'on', true) . ' ' . TEXT_INFO_DELETE_IMAGE);
      $contents[] = array('align' => 'center', 'text' => '<br />' . tep_draw_button(IMAGE_DELETE, 'trash', null, 'primary') . tep_draw_button(IMAGE_CANCEL, 'close', tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $_GET['sID'])));
      break;
    default:
      if (is_object($sInfo)) {
        $heading[] = array('text' => '<strong>' . tep_get_slides_title($sInfo->slides_id, $languages_id) . '</strong>');

        $contents[] = array('align' => 'center', 'text' => tep_draw_button(IMAGE_EDIT, 'document', tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $sInfo->slides_id . '&action=new')) . tep_draw_button(IMAGE_DELETE, 'trash', tep_href_link('slides_manager.php', 'page=' . $_GET['page'] . '&sID=' . $sInfo->slides_id . '&action=delete')));
        $contents[] = array('text' => '<br />' . TEXT_SLIDES_DATE_ADDED . ' ' . tep_date_short($sInfo->date_added));

		
  if (tep_not_null($sInfo->slides_image)) {
		$contents[] = array('align' => 'center', 'text' => '<br>' . tep_info_image($sInfo->slides_image, $sInfo->slides_title, SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '<br>' . $sInfo->slides_image); // imagen del slide.
		}
		
  if (tep_not_null(tep_get_slides_description($sInfo->slides_id, $languages_id))) {
		$contents[] = array('align' => 'center', 'text' => '<br>' . tep_get_slides_description($sInfo->slides_id, $languages_id)); // descripcion del slide.
		}

      }
      break;
  }

  if ( (tep_not_null($heading)) && (tep_not_null($contents)) ) {
    echo '            <td width="25%" valign="top">' . "\n";

    $box = new box;
    echo $box->infoBox($heading, $contents);

    echo '            </td>' . "\n";
  }
?>
          </tr>
        </table></td>
      </tr>
<?php
  }
?>
    </table>

<?php
  require('includes/template_bottom.php');
  require('includes/application_bottom.php');
?>
