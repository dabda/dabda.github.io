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
      var h2 = $(window).scrollBottom();
      var visina = $(document).height();
      console.log(h);
      console.log(h2);
      console.log();
      document.getElementById("visina").setAttribute("startOffset", (h/visina)*5000);
    });
});
//var number=document.getElementById("visina").getAttribute('startOffset'); 
//document.getElementById("visina").setAttribute("startOffset", "200");


$.fn.scrollBottom = function() { 
  return $(document).height() - this.scrollTop() - this.height(); 
};