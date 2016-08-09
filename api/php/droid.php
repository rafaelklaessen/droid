<?php
  /**
    * Droid PHP API
    * Contains all PHP functions (like rendering standard layout components).
    */
  class Droid {
    /**
      * Creates a list
      * @param {array} array to create list from
      * @return {string} generated HTML
      */
    public static function makeList($arr) {
      // Add opening tag
      $list = "<ul class='list'>";
      // Loop through all items in array
      foreach ($arr as $itemName => $itemData) {
        // Set onclickAction variable
        $onclickAction = '';
        // If an onclick action is defined and is not empty, set onclickAction to it and add onclick=''
        if (isset($itemData['onclick']) && !empty(trim($itemData['onclick']))) {
          $onclickAction = "onclick='{$itemData['onclick']}'";
        }
        // Create a li with set variables (eg onclickAction)
        $list = "{$list}<li class='list-item' {$onclickAction}>{$itemName}</li>";
      }
      // Add closing tag
      $list = "{$list}</ul>";
      return $list;
    }
    /**
      * Renders top bar
      * @param {string} name of the app
      * @param {string} color of the app bar
      * @param {string} color of the text
      * @param {string} menu with with actions
      */
    public static function renderAppBar($appName, $appBarColor, $textColor, $iconColor, $actionList) {
      // Get the variable globally
      global $systemiconsFolder;


      // Generate HTML
      $appBar = "
        <style type='text/css'>
          .dots {
            fill: ${textColor};
          }
        </style>
        <section class='appbar' style='background-color: {$appBarColor}; color: {$textColor}'>
          <h1 class='app-name'>{$appName}</h1>
          <ul class='action-btn-container'>
            <li class='action-btn'>
              <figure class='btn'>
                <svg version='1.1' width='21' height='36' id='Capa_1' viewBox='0 0 58 58' style='enable-background:new 0 0 58 58;' xml:space='preserve'>
                  <circle style='fill: {$iconColor};' cx='29' cy='7' r='7'/>
                  <circle style='fill: {$iconColor};' cx='29' cy='51' r='7'/>
                  <circle style='fill: {$iconColor};' cx='29' cy='29' r='7'/>
                  <circle style='fill: {$iconColor};' cx='29' cy='7' r='7'/>
                  <circle style='fill: {$iconColor};' cx='29' cy='51' r='7'/>
                  <circle style='fill: {$iconColor};' cx='29' cy='29' r='7'/>
                </svg>
              </figure>
              {$actionList}
            </li>
          </ul>
        </section>";
      // Echo HTML
      echo $appBar;
    }
  }
?>
