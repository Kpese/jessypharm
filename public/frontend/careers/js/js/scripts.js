/***************** Waypoints ******************/

$(document).ready(function () {

    $('.wp1').waypoint(function () {
        $('.wp1').addClass('animated fadeInLeft');
    }, {
        offset: '75%'
    });
    $('.wp2').waypoint(function () {
        $('.wp2').addClass('animated fadeInUp');
    }, {
        offset: '75%'
    });
    $('.wp3').waypoint(function () {
        $('.wp3').addClass('animated fadeInDown');
    }, {
        offset: '55%'
    });
    $('.wp4').waypoint(function () {
        $('.wp4').addClass('animated fadeInDown');
    }, {
        offset: '75%'
    });
    $('.wp5').waypoint(function () {
        $('.wp5').addClass('animated fadeInUp');
    }, {
        offset: '75%'
    });
    $('.wp6').waypoint(function () {
        $('.wp6').addClass('animated fadeInDown');
    }, {
        offset: '75%'
    });
    $('.wp7').waypoint(function () {
        $('.wp7').addClass('animated fadeInLeft');
    }, {
        offset: '75%'
    });

});

/***************** Slide-In Nav ******************/
//
//$(window).load(function() {
//
//	$('.nav_slide_button').click(function() {
//		$('.pull').slideToggle();
//	});
//
//});

/***************** Smooth Scrolling ******************/

//$(function () {
//
//    $('a[href*=#]:not([href=#])').click(function () {
//        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
//
//            var target = $(this.hash);
//            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//            if (target.length) {
//                $('html,body').animate({
//                    scrollTop: target.offset().top
//                }, 2000);
//                return false;
//            }
//        }
//    });
//
//});

/***************** Nav Transformicon ******************/

//document.querySelector("#nav-toggle").addEventListener("click", function() {
//	this.classList.toggle("active");
//});

/***************** Overlays ******************/


/***************** Flexsliders ******************/

//$(window).load(function() {
//
//	$('#portfolioSlider').flexslider({
//		animation: "slide",
//		directionNav: false,
//		controlNav: true,
//		touch: false,
//		pauseOnHover: true,
//		start: function() {
//			$.waypoints('refresh');
//		}
//	});
//
//	$('#servicesSlider').flexslider({
//		animation: "slide",
//		directionNav: false,
//		controlNav: true,
//		touch: true,
//		pauseOnHover: true,
//		start: function() {
//			$.waypoints('refresh');
//		}
//	});
//$('.servicesSlider').flexslider({
//		animation: "slide",
//		directionNav: false,
//		controlNav: true,
//		touch: true,
//		pauseOnHover: true,
//		start: function() {
//			$.waypoints('refresh');
//		}
//	});
//
//	$('#teamSlider').flexslider({
//		animation: "slide",
//		directionNav: false,
//		controlNav: true,
//		touch: true,
//		pauseOnHover: true,
//		start: function() {
//			$.waypoints('refresh');
//		}
//	});
//
//});


$(document).ready(function () {

//    $(".feed").hide()
    $(".social-btn2").click(function () {
        $(".feed").css("left", "0");
//        $(".feed").slideToggle()
        $(".close-feed").click(function () {
            $(".feed").css("left", "-50%");

        });
        if ($(window).width()< 769){
            $(".close-feed").click(function () {
                $(".feed").css("left", "-100%");
            });
        }


    });

});