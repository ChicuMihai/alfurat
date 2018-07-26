<nav class="navbar<?php echo $navbar_style . $navbar_corners . $navbar_margin . $navbar_fixed; ?> navbar-custom" id="navbar-extra">
  <div class="<?php echo BOOTSTRAP_CONTAINER; ?>">
    <?php
    if ($oscTemplate->hasBlocks('navbar_extra_modules_home')) {
      echo '<div class="navbar-header pull-left">' . PHP_EOL;
      echo $oscTemplate->getBlocks('navbar_extra_modules_home');
      echo '    </div>' . PHP_EOL;
    }
    ?>
    <?php
    if ($oscTemplate->hasBlocks('navbar_extra_modules_buttons')) {
      echo '<div class="navbar-header">' . PHP_EOL;
      echo $oscTemplate->getBlocks('navbar_extra_modules_buttons');
      echo '    </div>' . PHP_EOL;
    }
    ?>

    <div class="collapse navbar-collapse navbar-left" id="navbar-extra-collapse-menu">
<?php
      if ($oscTemplate->hasBlocks('navbar_extra_modules_left')) {
        echo '      <ul class="nav navbar-nav">' . PHP_EOL;
        echo $oscTemplate->getBlocks('navbar_extra_modules_left');
        echo '      </ul>' . PHP_EOL;
      }
      if ($oscTemplate->hasBlocks('navbar_extra_modules_right')) {
        echo '<ul class="nav navbar-nav navbar-right">' . PHP_EOL;
        echo $oscTemplate->getBlocks('navbar_extra_modules_right');
        echo '</ul>' . PHP_EOL;
      }
?>
    </div>

<?php
      if ($oscTemplate->hasBlocks('navbar_extra_modules_collapsible')) {
//        echo '<ul class="nav navbar-nav navbar-right">' . PHP_EOL;
        echo $oscTemplate->getBlocks('navbar_extra_modules_collapsible');
//        echo '</ul>' . PHP_EOL;
      }
?>

  </div>
</nav>

<?php echo $navbar_css; ?>
<script>
var estado;
 $('#btn-search').on('click',function(){
  estado = $('.tt-menu').css("display");
  if (estado == "block") {
    $('.tt-menu').css("display","none");
  }
	$('#navbar-extra-collapse-account').collapse('hide');
	$('#navbar-extra-collapse-cart').collapse('hide');
	$('#navbar-extra-collapse-menu').collapse('hide');
  
})
$('#btn-search').on("mouseup",function() {
  setTimeout(function() {
    $('form[name="quick_find"] input[name="keywords"]').focus();
      if (estado == "block") {
    $('.tt-menu').css("display","block");
    }

   }, 500);

});
$('#btn-account').on('click',function(){
	$('#navbar-extra-collapse-search').collapse('hide');
	$('#navbar-extra-collapse-cart').collapse('hide');
	$('#navbar-extra-collapse-menu').collapse('hide');
})

$('#btn-cart').on('click',function(){
	$('#navbar-extra-collapse-account').collapse('hide');
	$('#navbar-extra-collapse-search').collapse('hide');
	$('#navbar-extra-collapse-menu').collapse('hide');
})

$('#btn-menu').on('click',function(){
	$('#navbar-extra-collapse-account').collapse('hide');
	$('#navbar-extra-collapse-search').collapse('hide');
	$('#navbar-extra-collapse-cart').collapse('hide');
})
</script>