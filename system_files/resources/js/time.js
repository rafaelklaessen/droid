/**
  * Time JavaScript. This file sets the time in every element with the time id
  */
(function($) {
  $(document).ready(function() {
    // Use a function so we can use an interval on it
    function setTime() {
      // Create date instance
      var date = new Date();
      // Get hours and minutes and store in variables
      var hours = date.getHours(),
          minutes = date.getMinutes();
      // If number of minutes < 10, the time looks like this: 6:6. We want 6:06 instead, so add a 0
      if (minutes < 10) {
        minutes = '0' + minutes;
      }
      // Define elements where to put hours and minutes
      var $hoursElement = $('#time .time-hours'),
          $minutesElement = $('#time .time-minutes');
      // Put hours and minutes in the elements
      $hoursElement.text(hours);
      $minutesElement.text(minutes);
    }
    // Call function
    setTime();
    // Set interval to keep the time up to date
    setInterval(setTime, 1);
  });
}(jQuery));
