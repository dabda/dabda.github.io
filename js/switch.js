$(window).resize(function() {
  if ($(window).width() <= 750) {
  	$( ".desktop" ).hide();
  	$('.container').css('background-image', "url('img/WCFB_background_m.jpg')");
  }
 else {
 	$( ".desktop" ).show();
 	$('.container').css('background-image', "url('img/WCFB_background2x.jpg')");
 }
});