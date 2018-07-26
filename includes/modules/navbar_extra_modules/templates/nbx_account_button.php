<?php
$logged =(tep_session_is_registered('customer_id')) ? sprintf('<i class="fa fa-user"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_LOGGED_IN . ' <span class="caret"></span>', $customer_first_name) : '<i class="fa fa-user"></i><span class="hidden-sm"> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_LOGGED_OUT . '</span> <span class="caret"></span>';

$button ='      <button type="button" id="btn-account" class="btn btn-primary navbar-toggle" data-toggle="collapse" data-target="#navbar-extra-collapse-account">
        <span class="sr-only">' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_PUBLIC_SCREENREADER_TEXT . '</span>
        <span class="fa fa-user"></span>
      </button>
';

$collapsible_menu ='    <div class="collapse navbar-collapse navbar-right" id="navbar-extra-collapse-account">' . PHP_EOL;
$collapsible_menu .='     <ul class="nav navbar-nav navbar-right hide-mobile">' . PHP_EOL;

// desplegable
$collapsible_menu .='       <li class="dropdown">' . PHP_EOL;
$collapsible_menu .='         <a class="dropdown-toggle" data-toggle="dropdown" href="#">' . $logged . '</a>' . PHP_EOL;
$collapsible_menu .='           <ul class="dropdown-menu">' . PHP_EOL;
$collapsible_menu .='             <li><a href="' . tep_href_link('account.php', '', 'SSL') . '"><i class="fa fa-edit"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON . '</a></li>' . PHP_EOL;
$collapsible_menu .='             <li><a href="' . tep_href_link('account_history.php', '', 'SSL') . '"><i class="fa fa-file-text-o"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_HISTORY . '</a></li>' . PHP_EOL;
$collapsible_menu .='             <li><a href="' . tep_href_link('address_book.php', '', 'SSL') . '"><i class="fa fa-envelope-o"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_ADDRESS_BOOK . '</a></li>' . PHP_EOL;
$collapsible_menu .='             <li><a href="' . tep_href_link('account_password.php', '', 'SSL') . '"><i class="fa fa-lock"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_PASSWORD . '</a></li>' . PHP_EOL;
$collapsible_menu .='             <li class="divider"></li>' . PHP_EOL;
    if (tep_session_is_registered('customer_id')) {
      $collapsible_menu .='             <li><a href="' . tep_href_link('logoff.php', '', 'SSL') . '"><i class="fa fa-sign-out"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_LOGOFF . '</a></li>' . PHP_EOL;
    }
    else {
      $collapsible_menu .='             <li><a href="' . tep_href_link('login.php', '', 'SSL') . '"><i class="fa fa-sign-in"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_LOGIN . '</a></li>' . PHP_EOL;
      $collapsible_menu .='             <li><a href="' . tep_href_link('create_account.php', '', 'SSL') . '"><i class="fa fa-pencil"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_REGISTER . '</a></li>' . PHP_EOL;
      $collapsible_menu .='             <li><a href="' . tep_href_link('password_forgotten.php', '', 'SSL') . '"><i class="fa fa-key"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_REMEMBER_PASSWORD . '</a></li>' . PHP_EOL;

    }
$collapsible_menu .='           </ul>' . PHP_EOL;

$collapsible_menu .='            </li>' . PHP_EOL;
$collapsible_menu .='           </ul>' . PHP_EOL;

// Para movil

$collapsible_menu .='     <ul class="nav navbar-nav navbar-right hide-expanded">' . PHP_EOL;

// desplegable

$collapsible_menu .='             <li><a href="' . tep_href_link('account.php', '', 'SSL') . '"><i class="fa fa-edit"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON . '</a></li>' . PHP_EOL;
    if (tep_session_is_registered('customer_id')) {

$collapsible_menu .='             <li><a href="' . tep_href_link('account_history.php', '', 'SSL') . '"><i class="fa fa-file-text-o"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_HISTORY . '</a></li>' . PHP_EOL;
$collapsible_menu .='             <li><a href="' . tep_href_link('address_book.php', '', 'SSL') . '"><i class="fa fa-envelope-o"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_ADDRESS_BOOK . '</a></li>' . PHP_EOL;
$collapsible_menu .='             <li><a href="' . tep_href_link('account_password.php', '', 'SSL') . '"><i class="fa fa-lock"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_PASSWORD . '</a></li>' . PHP_EOL;
    }
$collapsible_menu .='             <li class="divider"></li>' . PHP_EOL;
    if (tep_session_is_registered('customer_id')) {
      $collapsible_menu .='             <li><a href="' . tep_href_link('logoff.php', '', 'SSL') . '"><i class="fa fa-sign-out"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_LOGOFF . '</a></li>' . PHP_EOL;
    }
    else {
      $collapsible_menu .='             <li><a href="' . tep_href_link('login.php', '', 'SSL') . '"><i class="fa fa-sign-in"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_LOGIN . '</a></li>' . PHP_EOL;
      $collapsible_menu .='             <li><a href="' . tep_href_link('create_account.php', '', 'SSL') . '"><i class="fa fa-pencil"></i>  ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_REGISTER . '</a></li>' . PHP_EOL;
      $collapsible_menu .='             <li><a href="' . tep_href_link('password_forgotten.php', '', 'SSL') . '"><i class="fa fa-key"></i> ' . MODULE_NAVBAR_EXTRA_ACCOUNT_BUTTON_REMEMBER_PASSWORD . '</a></li>' . PHP_EOL;

    }

$collapsible_menu .='           </ul>' . PHP_EOL;

$collapsible_menu .='    </div> ' . PHP_EOL;
