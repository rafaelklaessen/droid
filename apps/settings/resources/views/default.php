<!-- Default view -->
<section id="default-view">
  <?php
    $list = Droid::makeList(array(
      'Item' => array(
        'onclick' => 'settings.actionOne()'
      ),
      'Item2' => array(
        
      )
    ));
    Droid::renderAppBar($app->name, $app->colors->colorPrimary, $app->colors->colorText, $list);
  ?>
  Hallo
</section>
