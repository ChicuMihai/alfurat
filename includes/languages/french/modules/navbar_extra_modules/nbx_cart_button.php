
<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_TITLE', 'Bouton panier');
  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_DESCRIPTION', 'Affiche le bouton panier sur la Navbar.  <div class="secWarning">Ce bouton s\'affiche sur toutes les résolutions d\'écran.<br><br>Il ouvre et ferme le menu \'Panier\'.');
  define('MODULE_NAVBAR_EXTRA_CART_BUTTON_PUBLIC_SCREENREADER_TEXT', 'Panier');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENTS', '%s articles');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENT', '%s article');

  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_NO_CONTENTS', '0 article');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_HAS_CONTENTS', '%s article(s), %s');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_VIEW_CART', 'Mon panier');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_CHECKOUT', 'Commander');
  define('MODULE_NAVBAR_EXTRA_SHOPPING_CART_PRODUCT', '<a href="' . tep_href_link('product_info.php', 'products_id=%s') . '">%s x %s</a>');
  ?>