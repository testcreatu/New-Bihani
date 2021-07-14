$(document).ready(function() {
  $(".menu-icon").on("click", function() {
    $("nav ul").toggleClass("showing");
  });
});

// Scrolling Effect

$(window).on("scroll", function() {
  if($(window).scrollTop()) {
    $('nav').addClass('black');
  }

  else {
    $('nav').removeClass('black');
  }
})


$(document).ready(function(){
	$(window).scroll(function(){
		if($(window).scrollTop() > 60 ){
			$('.my-navbar').addClass('navbar-scroll');
		}
		else{
			$('.my-navbar').removeClass('navbar-scroll');
		}
	});
});






