
<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_TITLE', 'Botón Cesta de la compra');
  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_DESCRIPTION', 'Muestra el botón Cesta de la compra.  <div class="secWarning">Este es un botón especial que se muestra en todos los tamaños de pantalla.');

  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_PUBLIC_SCREENREADER_TEXT', 'Cesta');

  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENTS', '%s productos');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENT', '%s producto');

  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_NO_CONTENTS', '0 productos');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_HAS_CONTENTS', '%s productos, %s');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_VIEW_CART', 'Ver cesta');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CHECKOUT', 'Cursar pedido');

  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_PRODUCT', '<a href="' . tep_href_link('product_info.php', 'products_id=%s') . '">%s x %s</a>');
?>