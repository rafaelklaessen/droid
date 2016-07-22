<?php
  $apps = simplexml_load_file('apps/apps.xml') or die('Error: Can\'t read apps file!');
?>
<?php foreach ($apps as $app): ?>
  <?php
    /**
      * Set app location (path).
      */
    $appLocation = $appFolder . '/' . $app->slug;
  ?>
  <section id="<?= $app->slug ?>" class="app" system-app="<?= $app['system-app'] ?>" app-icon="<?= $appLocation . '/' . $app->icon ?>">
    <?php
      /**
        * Get app main file. This file includes the views etc.
        */
      include $appLocation . '/app.php';
    ?>
  </section>
<?php endforeach; ?>
