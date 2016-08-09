<!-- Default view -->
<section id="default-view">
  <?php
    $list = Droid::makeList(array(
      'Item' => array(
        'onclick' => 'settings.actionOne()'
      ),
      'Item2' => array(
        'onclick' => 'settings.actionTwo()'
      )
    ));
    Droid::renderAppBar($app->name, $app->colors->colorPrimary, $app->colors->colorText, $app->colors->colorIcon, $list);
  ?>
  Hallo
</section>
