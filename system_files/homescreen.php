<section id="homescreen" class="homescreen">
  <?php foreach ($apps as $app): ?>
    <?php
      /**
        * Set app location (path).
        */
      $appLocation = $appFolder . '/' . $app->slug;
    ?>
    <figure id="<?= $app->slug ?>-icon" class="app-icon" system-app="<?= $app['system-app'] ?>" app="<?= $app->slug ?>">
      <img class="icon" src="<?= $appLocation . '/' . $app->icon ?>" alt="<?= $app->name ?> icon">
      <h4 class="app-name"><?= $app->name ?></h4>
    </figure>
  <?php endforeach; ?>
</section>
