(function($){
	$(document).ready(function() {
	    $("#simple-menu").sidr({
	        side: "right"
	    });
	});

	var teamMember = $(".team-member");

	teamMember.on('click', function(e){
		e.preventDefault();
	});

	//sticky header
	$(window).scroll(function() {

	if ($(this).scrollTop() > 50){  
	    $('.header-top').addClass("sticky");
	   // $('.navbar-header').css("max-width", '250px');
	   //$('.logo').attr('src', 'http://www.ventamarketing.com/wp-content/uploads/2015/06/venta-logo-color-alternate.png');
	  }
	  else{
	    $('.header-top').removeClass("sticky");
	   // $('.logo').attr('src', 'http://www.ventamarketing.com/wp-content/uploads/2014/08/venta-logo-bg-white.png');

	  }
	});


})(jQuery);