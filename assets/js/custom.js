(function($){
    'use strict';

    //menu options
    var fixed_top = $(".main-menu");
    var fixed_top_two = $(".menu-two");
    var fixed_top_four = $(".menu-four");

    $(window).on('scroll', function(){
      
      if( $(this).scrollTop() > 100 ){  
        fixed_top.addClass("animated fadeInDown");
      }
      else{
        fixed_top.removeClass("animated fadeInDown");
      }
	  
	  if( $(this).scrollTop() > 100 ){  
        fixed_top_two.addClass("menu-two-bg");
      }
      else{
        fixed_top_two.removeClass("menu-two-bg");
      }
	  
	  if( $(this).scrollTop() > 100 ){  
        fixed_top_four.addClass("menu-four-bg");
      }
      else{
        fixed_top_four.removeClass("menu-four-bg");
      }
      
    });


	//counter up
    $('.counter').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      
      $({ countNum: $this.text()}).animate({
        countNum: countTo
      },

      {
        duration: 2000,
        easing:'linear',
        step: function() {
          $this.text(Math.floor(this.countNum));
        },
        complete: function() {
          $this.text(this.countNum);
          //alert('finished');
        }

      });  

  });


	//Product list grid view
	var list = $("#list");
	var grid = $("#grid");
	list.on('click', function(){    
	  $('.product-item-grid').animate({opacity:0},function(){
		  $('.grid').removeClass('grid-active');
		  $('.list').addClass('list-active');
		  $('.product-item-grid').attr('class', 'product-item-list shadow');
		  $('.product-item-list').stop().animate({opacity:1});
	  });
	});

	grid.on('click', function(){  
	  $('.product-item-list').animate({opacity:0},function(){
		  $('.list').removeClass('list-active');
		  $('.grid').addClass('grid-active');
		  $('.product-item-list').attr('class', 'product-item-grid shadow');
		  $('.product-item-grid').stop().animate({opacity:1});
	  });
	});



  //lightcase
  $('a[data-rel^=lightcase]').lightcase();


  //masonery
  $('.grid').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    // use element for option
    columnWidth: '.grid-sizer',
    percentPosition: true
  })



  //Sponsor one
  var swiper = new Swiper('.sponsor-slider-one', {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: 2000,
      loop: true,
      breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1
        },
        // when window width is <= 480px
        480: {
          slidesPerView: 2
        }
      }
    });

  //Sponsor two
  var swiper = new Swiper('.sponsor-slider-two', {
      slidesPerView: 4,
      spaceBetween: 15,
      autoplay: 1500,
      loop: true,
      breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1
        },
        // when window width is <= 480px
        480: {
          slidesPerView: 2
        },
        // when window width is <= 767px
        767: {
          slidesPerView: 3
        }
      }
    });

  //Sponsor Three
  var swiper = new Swiper('.sponsor-slider-three', {
      slidesPerView: 5,
      spaceBetween: 15,
      autoplay: 1000,
      loop: true,
      breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1
        },
        // when window width is <= 480px
        480: {
          slidesPerView: 2
        },
        // when window width is <= 767px
        767: {
          slidesPerView: 4
        }
      }
    });
	
})(jQuery);	  


var lines = [ 
  "================================================",
  "Looks like you know your way around computers. Visit Computer Science & Engineering Department.",
  "We have many surprises for you!",
  "",                                                                      
  " ",                                                                        
  "        CCCCCCCCCCCCC        SSSSSSSSSSSSSSS      EEEEEEEEEEEEEEEEEEEEEE",
  "     CCC::::::::::::C      SS:::::::::::::::S     E::::::::::::::::::::E",
  "   CC:::::::::::::::C     S:::::SSSSSS::::::S     E::::::::::::::::::::E",
  "  C:::::CCCCCCCC::::C     S:::::S     SSSSSSS     EE::::::EEEEEEEEE::::E",
  " C:::::C       CCCCCC     S:::::S                   E:::::E       EEEEEE",
  "C:::::C                   S:::::S                   E:::::E             ",
  "C:::::C                    S::::SSSS                E::::::EEEEEEEEEE   ",
  "C:::::C                     SS::::::SSSSS           E:::::::::::::::E   ",
  "C:::::C                       SSS::::::::SS         E:::::::::::::::E   ",
  "C:::::C                          SSSSSS::::S        E::::::EEEEEEEEEE   ",
  "C:::::C                               S:::::S       E:::::E             ",
  " C:::::C       CCCCCC                 S:::::S       E:::::E       EEEEEE",
  "  C:::::CCCCCCCC::::C     SSSSSSS     S:::::S     EE::::::EEEEEEEE:::::E",
  "   CC:::::::::::::::C     S::::::SSSSSS:::::S     E::::::::::::::::::::E",
  "     CCC::::::::::::C     S:::::::::::::::SS      E::::::::::::::::::::E",
  "        CCCCCCCCCCCCC      SSSSSSSSSSSSSSS        EEEEEEEEEEEEEEEEEEEEEE",

  "       Come          See              Enjoy!\n================================================",
                                                                                              
]
var css = 'color: red;';
var css2 = 'color: green; font-weight: bold; font-size:12px;';
var css3 = 'color: green; font-weight: bold; font-size:18px;';

console.log("%c%s", css3, lines[0]);
console.log("%c%s", css2, lines[1]);
console.log("%c%s", css2, lines[2]);
for(i = 3; i < lines.length-1; i ++){
    console.log("%c%s", css, lines[i]);
}

console.log("%c%s", css3, lines[lines.length-1]);


      
      
 
     
   

                           