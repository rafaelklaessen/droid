<?php
  $apps = simplexml_load_file('apps/apps.xml') or die('Error: Can\'t read apps file!');
?>
<?php foreach ($apps as $app): ?>
  <section id="<?= $app->slug ?>" class="app">
    <?php
      /**
        * Get app main file. This file includes the views etc.
        */
      $appLocation = $appFolder . '/' . $app->slug;
      include $appLocation . '/app.php';
    ?>
  </section>
<?php endforeach; ?>
