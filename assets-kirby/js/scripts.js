var wHeight = $(window).height();
var wWidth = $(window).width();

$(document).ready(function(){ 
/*
	if (window.location.href.indexOf("/") != -1 && window.location.href.indexOf("/archive") == -1) { 
		
		$('body').removeClass('abouted archive');
		$('body').addClass('home');
		
		$('img').unveil(0, function() {
	  		$(this).load(function() {
	    		this.style.opacity = 1;
			});
		});

		$('img').trigger('unveil'); 
		
		$('.img:first').addClass('current');


		$('.loader').delay(1000).fadeOut(300);
		setTimeout(function(){
			$('body').removeClass('zero-0').addClass('zero-1');
		}, 950);

		$('.archive-row').click(function() {
			$(this).addClass('active').removeClass('non-active');
			$(this).find('.first').hide(); 
		}); 

		// ON SCROLL
		var scrolled = false;
		 	$('.about-inner').scroll(function(){
		    var scrollTop = $('.about-inner').scrollTop();
		    var wHeight = $('.about-inner').height();

		    if(scrollTop < 3 && scrolled == true) {
		      $('body').removeClass('green');
		      scrolled = false;
		    }

		    if(scrollTop >= 3 && scrolled == false){
		      $('body').addClass('green');
		      scrolled = true; 
		    }
		  });

		// COUNTING SCRIPT
		var className = "zero-"; 
		var count = 1;
		var total_steps = $(".img").length + 1;
		$('body').click(function() { 
			ante_prev_child = ':nth-child(' + (count - 2) + ')';
			prev_child = ':nth-child(' + (count - 1) + ')';
			current_child = ':nth-child(' + (count) + ')';
			next_child = ':nth-child(' + (count + 1) + ')';

			$('.img' + ante_prev_child ).addClass('ante_prev');
			$('.img' + prev_child ).addClass('prev');
			$('.img' + current_child ).addClass('current');
			$('.img' + next_child ).addClass('next');

			if (count == total_steps) {
				$info();
			}

		// FUNCTION SLICK
		$('.archive-slides').slick({
			infinite: true,
			speed: 0,
  			fade: false,
  			arrows: true,
		});
	}

*/

}); 

if (wWidth < 680) { 
	$('body').addClass('mobile');
}


/*

$(document).on('click','body.shrink',function(e){
  e.preventDefault();
  
  function start_messages(e){
    $('body').addClass('expand flip slideout scroll').removeClass('shrink');
  };

  start_messages();
  
});


 // ARROWS UP DOWN

	$('.feature:eq(0)').addClass('current');

	$('.feature').click(function() {
		var keyDelta = 115; 

	    var $current = $('.feature.current');
        if($current.next().length > 0) {
		    var	$next_embed = $current.next();
		}
		else {
		    var	$next_embed = $current;
		}
        $('html, body').animate({scrollTop:$next_embed.find('.feature-wrapper').offset().top - keyDelta}, 500);
		
	});

	$(document).keydown(function(e){
		var keyDelta = 115;
		if (!$('body').hasClass('abouted')) {

	    
	    switch(e.which) {
	        case 38: // up
	            var $current = $('.feature.current');
	            if($current.prev().length > 0) {
				    var	$prev_embed = $current.prev();
				}
				else {
				    var	$prev_embed = $current;
				}
	            $('html, body').animate({scrollTop:$prev_embed.find('.feature-wrapper').offset().top - keyDelta}, 500);
	  
	            return;
	        break;

	        case 40: //down
	            var $current = $('.feature.current'),
	                $next_embed = $current.next();
	           	if($current.next().length > 0) {
	           		$next_embed = $current.next();
				}
				else {
				    var	$next_embed = $current;
				}
	            $('html, body').animate({scrollTop:$next_embed.find('.feature-wrapper').offset().top - keyDelta}, 500);
	     
	            return;
	        break;

	         case 37: // left
	            var $currentslide = $('.slider-container.current .slides');
	            $currentslide.slick('slickPrev');
	            return;
	        break;
	                
	         case 39: // right
	         	var $currentslide = $('.slider-container.current .slides');
	            $currentslide.slick('slickNext');
	            return;
	        break;

	        default: return; // exit this handler for other keys
	    }
	    e.preventDefault();
	    }
	});


	// ON SCROLL
  	var scrolled = false;
  	var lastScrollTop = 0, delta = 30;
 	
 	$(window).scroll(function(event){
	    var scrollTop = $(window).scrollTop();
	    var wHeight = $(window).height();

	    if(scrollTop < 35 && scrolled == true) {
	      $('body').removeClass('not-top');
	      scrolled = false;
	    }

	    if(scrollTop >= 35 && scrolled == false){
	      $('body').addClass('not-top');
	      scrolled = true; 
	    }
       lastScrollTop = scrollTop;

  });

 */


// ON RESIZE ------------------------------------------------
if (wWidth > 1025) { 
  var doit;
  $(window).on('resize', function(){
    clearTimeout(doit);
    doit = setTimeout(function() {

    	/* $('img').trigger(''); */

      }, 600);
  }); 
}
