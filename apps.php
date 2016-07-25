<?php
  // Open apps XML file
  $apps = simplexml_load_file('apps/apps.xml') or die('Error: Can\'t read apps file!');
?>
<?php foreach ($apps as $app): ?>
  <?php
    /**
      * Set app location (path).
      */
    $appLocation = $appFolder . '/' . $app->slug;
  ?>
  <section id="<?= $app->slug ?>" class="app" system-app="<?= $app['system-app'] ?>" app-icon="<?= $appLocation . '/' . $app->icon ?>" data-colors='{"colorPrimary": "<?= $app->colors->colorPrimary ?>", "colorPrimaryDark": "<?= $app->colors->colorPrimaryDark ?>", "colorAccent": "<?= $app->colors->colorAccent ?>", "colorText": "<?= $app->colors->colorText ?>"}'>
    <?php
      /**
        * Define the static class that's used for app JavaScript functions (so that apps don't accidentally use each others function names).
        */
        $appScript = "function {$app->slug}() {}";
        echo "<script type='text/javascript'>{$appScript}</script>";
    ?>
    <?php
      /**
        * Get app main file. This file includes the views etc.
        */
      include $appLocation . '/app.php';
    ?>
  </section>
<?php endforeach; ?>
