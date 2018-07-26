<?php
  global $cart,$language;
  require_once('includes/languages/' . $language . '/modules/navbar_extra_modules/nbx_cart_button.php');

$button ='      <button type="button" id="btn-cart" class="btn btn-primary navbar-toggle" data-toggle="collapse" data-target="#navbar-extra-collapse-cart">
        <span class="sr-only">' . MODULE_NAVBAR_EXTRA_CART_BUTTON_PUBLIC_SCREENREADER_TEXT . '</span>
        <span class="fa fa-shopping-cart"></span>  <span>' . $cart->count_contents() . '</span>
      </button>
';

$collapsible_menu ='    <div class="collapse navbar-collapse navbar-right" id="navbar-extra-collapse-cart">' . PHP_EOL;
// mobile view
$collapsible_menu .='     <ul class="nav navbar-nav navbar-right hide-expanded" id="navbar-full-cart">' . PHP_EOL;

if ($cart->count_contents() > 0) {

  $collapsible_menu .='       <li><a href="' . tep_href_link('shopping_cart.php') . '">' . sprintf(MODULE_NAVBAR_EXTRA_SHOPPING_CART_HAS_CONTENTS, $cart->count_contents(), $currencies->format($cart->show_total())) . '</a></li>' . PHP_EOL;
  $collapsible_menu .='       <li role="separator" class="divider"></li>' . PHP_EOL;

  $products = $cart->get_products();
    foreach ($products as $k => $v) {
      // Parche para evitar atributos
      $v['id'] = preg_replace('~(.*){[^{]+$~', '\\1', $v['id']);
      $collapsible_menu .='       <li>' . sprintf(MODULE_NAVBAR_EXTRA_SHOPPING_CART_PRODUCT, $v['id'], $v['quantity'], $v['name']) . '</li>' . PHP_EOL;
      }        

$collapsible_menu .='       <li role="separator" class="divider"></li>' . PHP_EOL;
$collapsible_menu .='       <li><a href="' . tep_href_link('shopping_cart.php') . '"><i class="fa fa-shopping-cart"></i> ' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_VIEW_CART . '</a></li>' . PHP_EOL;
$collapsible_menu .='       <li><a href="' . tep_href_link('checkout_shipping.php', '', 'SSL') . '"><i class="fa fa-angle-right"></i> ' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_CHECKOUT . '</a></li>' . PHP_EOL;
}
else {
$collapsible_menu .='       <li><p class="navbar-text">' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_NO_CONTENTS . '</p></li>' . PHP_EOL;
}

$collapsible_menu .='     </ul>' . PHP_EOL;

// full reset
$collapsible_menu .='     <ul class="nav navbar-nav navbar-right hide-mobile">' . PHP_EOL;

// desplegable
if ($cart->count_contents() > 0) {

  $collapsible_menu .='       <li class="dropdown" id="navbar-cart">' . PHP_EOL;
  $collapsible_menu .='         <a class="dropdown-toggle" data-toggle="dropdown" href="#">' . sprintf(($cart->count_contents()!=1?'<i class="fa fa-shopping-cart"></i> ' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENTS . ' <span class="caret"></span>':'<i class="fa fa-shopping-cart"></i> ' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENT . ' <span class="caret"></span>'), $cart->count_contents()) . '</a>';

//  $collapsible_menu .='         <a class="dropdown-toggle" data-toggle="dropdown" href="#">' . sprintf(MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENTS, $cart->count_contents()) . '</a>' . PHP_EOL;
  $collapsible_menu .='         <ul class="dropdown-menu">' . PHP_EOL;
  $collapsible_menu .='           <li><a href="' . tep_href_link('shopping_cart.php') . '">' . sprintf(MODULE_NAVBAR_EXTRA_SHOPPING_CART_HAS_CONTENTS, $cart->count_contents(), $currencies->format($cart->show_total())) . '</a></li>' . PHP_EOL;
  $collapsible_menu .='           <li role="separator" class="divider"></li>' . PHP_EOL;

  $products = $cart->get_products();
    foreach ($products as $k => $v) {
      // Parche para evitar atributos
      $v['id'] = preg_replace('~(.*){[^{]+$~', '\\1', $v['id']);
      $collapsible_menu .='           <li>' . sprintf(MODULE_NAVBAR_EXTRA_SHOPPING_CART_PRODUCT, $v['id'], $v['quantity'], $v['name']) . '</li>' . PHP_EOL;
      }        

$collapsible_menu .='           <li role="separator" class="divider"></li>' . PHP_EOL;
$collapsible_menu .='           <li><a href="' . tep_href_link('shopping_cart.php') . '"><i class="fa fa-shopping-cart"></i> ' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_VIEW_CART . '</a></li>' . PHP_EOL;
$collapsible_menu .='         </ul>' . PHP_EOL;
$collapsible_menu .='       </li>' . PHP_EOL;

$collapsible_menu .='       <li><a href="' . tep_href_link('checkout_shipping.php', '', 'SSL') . '"><i class="fa fa-angle-right"></i> ' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_CHECKOUT . '</a></li>' . PHP_EOL;
}
else {
$collapsible_menu .='       <li><p class="navbar-text"><i class="fa fa-shopping-cart"></i> ' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_NO_CONTENTS . '</p></li>' . PHP_EOL;
}

$collapsible_menu .='     </ul>' . PHP_EOL;

$collapsible_menu .='   </div> ' . PHP_EOL;

/*
if ($cart->count_contents() > 0) {
  ?>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo sprintf(MODULE_NAVBAR_EXTRA_SHOPPING_CART_CONTENTS, $cart->count_contents()); ?></a>
              <ul class="dropdown-menu">
                <li><?php echo '<a href="' . tep_href_link('shopping_cart.php') . '">' . sprintf(MODULE_NAVBAR_EXTRA_SHOPPING_CART_HAS_CONTENTS, $cart->count_contents(), $currencies->format($cart->show_total())) . '</a>'; ?></li>
                <li role="separator" class="divider"></li>
      <?php      
      $products = $cart->get_products();
      foreach ($products as $k => $v) {
        echo '<li>' . sprintf(MODULE_NAVBAR_EXTRA_SHOPPING_CART_PRODUCT, $v['id'], $v['quantity'], $v['name']) . '</li>';
      }        
      ?>
                <li role="separator" class="divider"></li>
                <li><?php echo '<a href="' . tep_href_link('shopping_cart.php') . '">' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_VIEW_CART . '</a>'; ?></li>
              </ul>
            </li>
  <?php
  echo '<li><a href="' . tep_href_link('checkout_shipping.php', '', 'SSL') . '"><i class="fa fa-angle-right"></i> ' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_CHECKOUT . '</a></li>';
}
else {
  echo '<li><p class="navbar-text">' . MODULE_NAVBAR_EXTRA_SHOPPING_CART_NO_CONTENTS . '</p></li>';
}
*/
?>