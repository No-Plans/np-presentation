//loader 
//  $(function(){
//      var x = 0;
//      setInterval(function(){
//          x-=1;
//          $('.loader').css('background-position', x + 'px 0');
//      }, 5);
//  })

$(window).on("load",function(){
  $('.loader').fadeOut(400);
});  

// looks what's on viewport
$(window).scroll(function() {
  var top_point = $(window).scrollTop();
  if ($(window).width() > 1023) {
    $('.section').each(function() {
    var top_outer = $(this).offset().top;
  	  if (top_point + 2 > top_outer) {
  	  	$('.section').removeClass('current');
  	    $(this).addClass('current');
  	  }
  	});
  }
});

// next prev keyboard
$(document).keydown(function(e) {
  switch(e.which) {
    case 40: // down
    	$('html, body').animate({ scrollTop:$('.section.current').next('.section').offset().top}, 'slow');
    break;
    case 38: // up
    	$('html, body').animate({ scrollTop:$('.section.current').prev('.section').offset().top}, 'slow');
    break;
     default: return; 
  }
  e.preventDefault();
});


// play video in viewport
$(document).ready(function() {
    // Get media - with autoplay disabled (audio or video)
    // var media = $('video').not("[autoplay='autoplay']");
    var media = $('video');
    var tolerancePixel = 40;

    function checkMedia(){
        // Get current browser top and bottom
        var scrollTop = $(window).scrollTop() + tolerancePixel;
        var scrollBottom = $(window).scrollTop() + $(window).height() - tolerancePixel;

        media.each(function(index, el) {
            var yTopMedia = $(this).offset().top;
            var yBottomMedia = $(this).height() + yTopMedia;

            if(scrollTop < yBottomMedia && scrollBottom > yTopMedia){ 
                $(this).get(0).play();
            } else {
                $(this).get(0).pause();
            }
        });

        //}
    }
    $(document).on('scroll', checkMedia);
});



function showImages(e){
  var images = $('.internet');
  var randomNum = Math.floor((Math.random()*1)+1);
  $('#internet').attr('src', 'assets/content/fashion/fashion' + randomNum + '.jpg');
  
  images.show();
  // images.addClass('show');
};

function hideImages(e){
  var images = $('.internet');
  images.hide();
  // images.removeClass('show');
};


$(document).ready(function(){
  var trigger = $('.header-menu');

  trigger.mouseenter(showImages);
  trigger.mouseleave(hideImages);
  trigger.click(hideImages);


});

