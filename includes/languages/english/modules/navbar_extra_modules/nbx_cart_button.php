
<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_TITLE', 'Cart Button');
  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_DESCRIPTION', 'Show cart Button in Navbar.  <div class="secWarning">This is a special button that shows in all screen sizes.<br><br>It opens and closes the Cart  Menu.');
  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_PUBLIC_SCREENREADER_TEXT', 'Cart');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENTS', '%s items');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENT', '%s item');

  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_NO_CONTENTS', '0 items');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_HAS_CONTENTS', '%s item(s), %s');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_VIEW_CART', 'View Cart');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CHECKOUT', 'Checkout');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_PRODUCT', '<a href="' . tep_href_link('product_info.php', 'products_id=%s') . '">%s x %s</a>');
?>