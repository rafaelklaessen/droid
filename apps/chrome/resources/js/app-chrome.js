$('#chrome').onstart(function() {
  $('#chrome .chromesearchbar').focus(function() {
    $('#chrome .app-name').addClass('fullwidth');
  });
  $('#chrome .chromesearchbar').blur(function() {
    $('#chrome .app-name').removeClass('fullwidth');
  });
  $(this).keypress(function(e) {
    // Enter button is pressed, set iframe url
    if (e.which == 13) {
      var url = $('#chrome .chromesearchbar').val();
      // If url doesn't contain either http:// or https://, add http:// to url
      if (url.indexOf('http://') == -1 && url.indexOf('https://') == -1) {
        url = 'http://' + url;
      }
      // Set url
      $('#chrome .chromeframe').attr('src', url);
    }
  });
});
$('#chrome').ondestroy(function() {
  // Define stuff on destroy
});
