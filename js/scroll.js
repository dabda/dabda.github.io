$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      //event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


$(document).ready(function() {
    $(window).scroll(function() {
      var h = (document.documentElement.scrollTop || document.body.scrollTop);
      //var h2 = $(window).scrollBottom();
      var visina = $(document).height();
      var razmerje = (h/visina)*5000;
      if ( razmerje > 4100) {
        document.getElementById("visina").setAttribute("startOffset", 4100);
      }
      else{
        document.getElementById("visina").setAttribute("startOffset", (h/visina)*5000);
      }
      if (razmerje >= 0 && razmerje < 800) {
        $("#menu_about").addClass("precrtaj");
        $("#menu_breweries").removeClass("precrtaj");
        $("#menu_music").removeClass("precrtaj");
        $("#menu_food").removeClass("precrtaj");
        $("#menu_timeline").removeClass("precrtaj");
      }
      else if (razmerje >= 800 && razmerje < 1600) {
        $("#menu_about").removeClass("precrtaj");
        $("#menu_breweries").addClass("precrtaj");
        $("#menu_music").removeClass("precrtaj");
        $("#menu_food").removeClass("precrtaj");
        $("#menu_timeline").removeClass("precrtaj");
      }
      else if (razmerje >= 1600 && razmerje < 2400) {
        $("#menu_about").removeClass("precrtaj");
        $("#menu_breweries").removeClass("precrtaj");
        $("#menu_music").addClass("precrtaj");
        $("#menu_food").removeClass("precrtaj");
        $("#menu_timeline").removeClass("precrtaj");
      }
      else if (razmerje >= 2400 && razmerje < 3200) {
        $("#menu_about").removeClass("precrtaj");
        $("#menu_breweries").removeClass("precrtaj");
        $("#menu_music").removeClass("precrtaj");
        $("#menu_food").addClass("precrtaj");
        $("#menu_timeline").removeClass("precrtaj");
      }
      else if (razmerje >= 3200 && razmerje < 4100) {
        $("#menu_about").removeClass("precrtaj");
        $("#menu_breweries").removeClass("precrtaj");
        $("#menu_music").removeClass("precrtaj");
        $("#menu_food").removeClass("precrtaj");
        $("#menu_timeline").addClass("precrtaj");
      }

    });
});
//var number=document.getElementById("visina").getAttribute('startOffset'); 
//document.getElementById("visina").setAttribute("startOffset", "200");


$.fn.scrollBottom = function() { 
  return $(document).height() - this.scrollTop() - this.height(); 
};