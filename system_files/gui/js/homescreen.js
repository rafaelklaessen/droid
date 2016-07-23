(function($) {
  $(document).ready(function() {
    // Loop through every app icon
    $('#homescreen .app-icon').each(function() {
      // Set listener for click event
      $(this).click(function() {
        // Define app to open
        var app = $(this).attr('app');
        // Launch app
        Droid.openApp(app);
    });
    });
  });
}(jQuery))
