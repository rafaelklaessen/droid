<!-- Default view -->
<section id="default-view">
  <?php
    Droid::renderAppBar('<input tabindex="-1" class="chromesearchbar" type="url" placeholder="Search or type URL">', $app->colors->colorPrimary, $app->colors->colorText, $app->colors->iconColor, null);
  ?>
  <iframe width="100%" height="100%" class="chromeframe" src="<?php echo $appLocation; ?>/resources/defaultchromepage.html"></iframe>
</section>
