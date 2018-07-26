<?php

  $button = '      <button type="button" id="btn-search" class="btn-primary navbar-toggle"  data-toggle="collapse" data-target="#navbar-extra-collapse-search">
        <span class="sr-only">MODULE_NAVBAR_EXTRA_SEARCH_BUTTON_SCREENREADER_TEXT</span>
        <span class="fa fa-search"></span>
      </button>
';

  $collapsible_menu = '    <div class="collapse navbar-collapse navbar-right" id="navbar-extra-collapse-search">
        <ul class="nav navbar-nav navbar-right hide-expanded">
          <li>
          <span id="search-placeholder"></span>
          </li>
        </ul>
    </div>';

$jscript = '<script>
  function ChangeDiv(width){
    if (width <= 767) {
        $(".searchbox-margin").appendTo($("#search-placeholder"));
        $(".searchbox-margin").css({"margin-left":"10px", "margin-right":"10px"});
    } else {
        $(".searchbox-margin").appendTo($(".search"));
        $(".searchbox-margin").css({"margin-left":"", "margin-right":""});

    }
  }

  $(function () {
      var onLoadWidth = $(window).width();
      ChangeDiv(onLoadWidth);
        $(window).resize(function () {
          var resizeWidth = $(window).width();
          if (onLoadWidth !== resizeWidth) {
            ChangeDiv(resizeWidth);
            onLoadWidth= resizeWidth;
          }
        });
  })
</script>';

$oscTemplate->addBlock($jscript, 'footer_scripts');

