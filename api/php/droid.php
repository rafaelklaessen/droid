<?php
  /**
    * Droid PHP API
    * Contains all PHP functions (like rendering standard layout components).
    */
  class Droid {
    /**
      * Renders top bar
      * @param {string} color of the app bar
      * @param {string} color of the text
      */
    public static function renderAppBar($appName, $appBarColor, $textColor) {
      $appBar = "
        <section class='appbar' style='background-color: {$appBarColor}; color: {$textColor}'>
          <h1 class='app-name'>{$appName}</h1>
        </section>";
      echo $appBar;
    }
  }
?>
