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


function showImages(e){
  var images = $('.internet img');
  var randomNum = Math.floor((Math.random()*3)+1);
  $('#internet').attr('src', 'assets/content/internet/internet' + randomNum + '.jpg');
  
  images.show();
};

function hideImages(e){
  var images = $('.internet img');
  images.hide();
};


$(document).ready(function(){
  var trigger = $('.header-menu, .header-menu li');

  trigger.mouseenter(showImages);
  trigger.mouseleave(hideImages);
<<<<<<< HEAD
  trigger.click(hideImages);
=======


  // $(showImages);
>>>>>>> f2ff7b2a8e3e1b079d4aae712068159727c30fdb

});

