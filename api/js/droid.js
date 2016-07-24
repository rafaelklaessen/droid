/**
  * Droid JavaScript API
  * Contains all JavaScript functions, eg click event handler shortcut function.
  * Uses a static class that contains all functions
  */
/**
  * jQuery shortcuts
  */
/**
  * Add jQuery shortcut for .start() instead of .trigger('start')
  */
$.fn.start = function() {
  return this.trigger('start');
}
/**
  * Add jQuery shortcut for .onstart(callback) instead of .on('start', callback)
  * @param {function} callback function
  */
$.fn.onstart = function(callback) {
  return this.on('start', callback);
}
/**
  * Add jQuery shortcut for .start() instead of .trigger('start')
  */
$.fn.destroy = function() {
  return this.trigger('destroy');
}
/**
  * Add jQuery shortcut for .onstart(callback) instead of .on('start', callback)
  * @param {function} callback function
  */
$.fn.ondestroy = function(callback) {
  return this.on('destroy', callback);
}
/**
  * Droid API itself
  */
function Droid() {}
/**
  * Start app
  * @param {string} ID of the app to open
  */
Droid.openApp = function(app) {
  // Add #
  app = '#' + app;
  // Check if app exists, if it does launch it, if it doesn't show error message
  if ($(app).length) {
    // Add launched class
    $(app).addClass('launched');
    // Set status bar color
    // Get colorsheme from app
    var colors = $(app).data('colors');
    // Get status bar color from colorsheme
    var statusBarColor = colors['colorPrimaryDark'];
    // Set status bar color
    Droid.setStatusBarColor(statusBarColor);
    // Call start event on app
    $(app).start();
  } else {
    // Show error message
    Droid.toast('Error: app not installed!')
  }
}
/**
  * Close app
  * @param {string} ID of the app to close
  */
Droid.closeApp = function(app) {
  // Add #
  app = '#' + app;
  // Check if app exists, if it does close it, if it doesn't show error message
  if ($(app).length) {
    // Remove launched class
    $(app).removeClass('launched');
    // Reset status bar color
    Droid.resetStatusBarColor();
    // Fix position by adding closing-posfix class
    $(app).addClass('closing-posfix');
    // Toggle close animation (delay of 0ms required)
    setTimeout(function() {
      $(app).addClass('closing');
      // Remove closing-posfix and closing class after animation is done
      setTimeout(function() {
        // Hide app (otherwise you can see it moving due to transition)
        $(app).hide();
        // Remove closing-posfix and closing class
        $(app).removeClass('closing-posfix').removeClass('closing');
        // After the animation is done, show app again (it's still below screen)
        setTimeout(function() {
          $(app).show();
        }, 200)
      }, 200);
    }, 0);
    // Call destroy event on app
    $(app).destroy();
  } else {
    // Show error message
    Droid.toast('Error: app not installed!')
  }
}
/**
  * Set the color of the status bar
  * @param {string} color to set the status bar to
  */
Droid.setStatusBarColor = function(color) {
  $('#status-bar').css({'background-color' : color});
}
/**
  * Reset the color of the status bar
  */
Droid.resetStatusBarColor = function() {
  $('#status-bar').css({'background' : 'none'});
}
/**
  * Show toast with given message
  * @param {string} message to display
  */
Droid.toast = function(msg) {
  alert(msg);
}
