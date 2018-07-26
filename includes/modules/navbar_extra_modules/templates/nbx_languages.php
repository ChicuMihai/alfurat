<li class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-language" aria-hidden="true"></i> <?php echo LANGUAGES_SELECTED_LANGUAGE; ?></a>
  <?php
  if (!isset($lng) || (isset($lng) && !is_object($lng))) { 
    include_once('includes/classes/language.php');
    $lng = new language;
  }
  if (count($lng->catalog_languages) > 1) {
    if ( defined( 'USU5_MULTI_LANGUAGE_SEO_SUPPORT' ) && ( USU5_MULTI_LANGUAGE_SEO_SUPPORT == 'true' ) && defined( 'USU5_ENABLED' ) && ( USU5_ENABLED == 'true' ) ) {
?>
    <ul class="dropdown-menu"><?= $usu5_multi->links_list() ?>
    </ul>
<?php
    }
  }
  ?>
</li>    