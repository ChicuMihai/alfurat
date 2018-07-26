<?php
// This is the button that shows when the navbar is on a mobile view:
$button_mobile ='<a type="button" id="btn-home" class="btn-primary navbar-home-button navbar-toggle" href="' . tep_href_link("index.php") . '"><i class="fa fa-home"></i></a>';
// This is the button that shows when the navbar is on desktop view(on the left side):
$button_desktop = '<li><a href="' . tep_href_link('index.php') . '"><i class="fa fa-home"></i><span class="hidden-sm">  ' . MODULE_NAVBAR_EXTRA_HOME_BUTTON_PUBLIC_TEXT . '</span></a></li>';