<!-- Default view -->
<section id="default-view">
  <?php
    $list = Droid::makeList(array(
      'Item' => array(
        'onclick' => 'chrome.actionOne()'
      ),
      'Item2' => array(
        'onclick' => 'chrome.actionTwo()'
      )
    ));
    Droid::renderAppBar($app->name, $app->colors->colorPrimary, $app->colors->colorText, $app->colors->colorIcon, $list);
  ?>
  Kees
</section>
