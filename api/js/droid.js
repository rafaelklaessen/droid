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
  */
Droid.openApp = function(app) {
  // Add #
  app = '#' + app;
  // Add launched class
  $(app).addClass('launched');
  // Call start event on app
  $(app).start();
}
Droid.closeApp = function(app) {
  // Add #
  app = '#' + app;
  // Remove launched class
  $(app).removeClass('launched');
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
}
