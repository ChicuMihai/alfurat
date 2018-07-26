<?php
/*
  $Id: cm_footer_nivo_slider.php, v2.0 20160518 - f.figue$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 
  
  Released under the GNU General Public License v2.0 or later
 */
?>

<!-- Start cm_footer_nivo_slider module -->
<div class="contentContainer">
  <div id="nivo_slider" class="col-sm-<?php echo MODULE_CONTENT_FOOTER_NIVO_SLIDER_CONTENT_WIDTH; ?>">
  
        <div class="slider-wrapper theme-default">
          <div id="sliderfooter" class="nivoSlider">
<?php
	  $data = '';
      $slides_cnt = 0;
      while ($slideshow = tep_db_fetch_array($slides_query)) {
       $slides_cnt++;

	   // Compruebo si hay enlace
	   if (tep_not_null($slideshow['slides_url'])) { 
	    $url_1 = substr($slideshow['slides_url'], 0, 1); $url_2 = substr($slideshow['slides_url'], 1);
		 // Miro si el enlace es a un producto o a una categoria
		 if ( $url_1 == 'c' ) { 
		  $link_slide = tep_href_link(FILENAME_DEFAULT, 'cPath=' . $url_2);
		 } else if ( $url_1 == 'p' ) { 
		  $link_slide = tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $url_2);
		 } else { 
		  $link_slide = $slideshow['slides_url'];
		 }
	   // Abro el enlace delante de la imagen.
	    $data .= '<a href="' . $link_slide . '">';
	   }
	
	  // Añado la descripcion si se elije con caption
	   $slides_caption = ((MODULE_CONTENT_FOOTER_NIVO_SLIDER_CAPTION == 'true') ? $slideshow['slides_description'] : '');
	  // Abro la imagen
	   $data .= '<img src="images/' . $slideshow['slides_image'].'" data-thumb="images/' . $slideshow['slides_image'].'" alt="" title="'.$slides_caption.'" />';
	  // Compruebo si hay enlace
	   if (tep_not_null($slideshow['slides_url'])) { $data .= '</a>'; }
	   $data .= PHP_EOL;
	 
	 }
   
    echo $data;
?>
        </div>
      </div>
			
  </div>
</div>
<!-- End cm_footer_nivo_slider module -->