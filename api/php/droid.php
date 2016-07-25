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
        // If an onclick action is defined and is not emptym set onclickAction to it.
        if (isset($itemData['onclick']) && !empty(trim($itemData['onclick']))) {
          $onclickAction = $itemData['onclick'];
        }
        // Check if onclickAction is still ''. If not, an onclick action was set. Add onclick=''
        if (!empty(trim($onclickAction))) {
          $onclickAction = "onclick='{$onclickAction}'";
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
      * @param {string} color of the app bar
      * @param {string} color of the text
      */
    public static function renderAppBar($appName, $appBarColor, $textColor, $actionList) {
      global $systemiconsFolder;

      $appBar = "
        <section class='appbar' style='background-color: {$appBarColor}; color: {$textColor}'>
          <h1 class='app-name'>{$appName}</h1>
          <ul class='action-btn-container'>
            <li class='action-btn'>
              <figure class='btn'><img src='{$systemiconsFolder}/icon-three-dots.svg'></figure>
              {$actionList}
            </li>
          </ul>
        </section>";
      echo $appBar;
    }
  }
?>
