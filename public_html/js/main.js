$('body').ready(function(){

  $.ajax({url: "cookies_alert.php", success: function(result) {
    console.log(result);
    $('body').append(result);
  }});
});
