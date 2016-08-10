$('#chrome').onstart(function() {
  // Make the input fullwidth and normal again by adding and removing classes
  $('#chrome .chromesearchbar').focus(function() {
    $('#chrome .app-name').addClass('fullwidth');
  });
  $('#chrome .chromesearchbar').blur(function() {
    $('#chrome .app-name').removeClass('fullwidth');
  });
  $(window).bind('keypress', function(e) {
    // Enter button is pressed, set iframe url
    if (e.which == 13) {
      var url = $('#chrome .chromesearchbar').val();
      // If url doesn't contain either http:// or https://, add http:// to url
      if (url.indexOf('http://') == -1 && url.indexOf('https://') == -1) {
        url = 'http://' + url;
      }
      // Set url
      $('#chrome .chromeframe').attr('src', url);
      // Blur search input
      $('#chrome .chromesearchbar').blur();
    } else {
      // A normal key is pressed. If the search bar isn't focussed, focus on it
      if (!$('#chrome .chromesearchbar').is(':focus')) {
        $('#chrome .chromesearchbar').focus();
      }
    }
  });
});
$('#chrome').ondestroy(function() {
  // Unbind keypress listener
  $(window).unbind('keypress');
});
