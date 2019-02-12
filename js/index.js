$(document).ready(function() {

  if( localStorage.getItem('returnVistor') || $(window).width() > 767 ){
    $(".intro").remove();
  } else {
    $(".intro").show();
  }

  setTimeout( function() {
    $(".intro").fadeOut();
    localStorage.setItem('returnVistor', true);
  }, 5000);

  new WOW().init();

  $('.s-slider').slick({
    'rows': 0,
  });

  $('.s-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    if( nextSlide == 1){
      $('.navbar-brand img').attr('src', 'wp-content/themes/itspray/img/charge-logo.png');
    } else if ( nextSlide == 2 ) {
      $('.navbar-brand img').attr('src', 'wp-content/themes/itspray/img/dream-logo.png');
    } else {
      $('.navbar-brand img').attr('src', 'wp-content/themes/itspray/img/boost-logo.png');
    }
  });

  if( $("body").hasClass('home') &&  $(window).width() > 767 ){
    $.scrollify({
      section : ".section",
      sectionName : "section-name",
      interstitialSection:".footer",
      setHeights : false,
      before:function(index, sections) {
        if(index == 0){
            $("nav").css('background-color', 'transparent');
            $('.navbar-brand img').attr('src', 'wp-content/themes/itspray/img/it_spray_logo.png');
            $('.navbar-brand img').css('width', '65px');
        } else if(index == 1){
            $('.s-slider').slick('slickGoTo', 0);
            $('.navbar-brand img').attr('src', 'wp-content/themes/itspray/img/boost-logo.png');
            $('.navbar-brand img').css('width', '65px');
            $("nav").css('background-color', 'transparent');
		    } else if(index == 2){
			      $('.navbar-brand img').attr('src', 'wp-content/themes/itspray/img/it_spray_logo.png');
            $('.navbar-brand img').css('width', '25px');
	   	      $("nav").css('background-color', '#FFFFFF');
	      } else {
            $('.navbar-brand img').attr('src', 'wp-content/themes/itspray/img/it_spray_logo.png');
        }

      },
    });
  } else {
    $(document).scroll(function() {
    if ($(document).scrollTop() >= 50) {
        $("nav").css('background-color', '#FFFFFF');
        $('.navbar-brand img').css('width', '25px');
    } else {
        $("nav").css('background-color', 'transparent');
        $('.navbar-brand img').css('width', '65px');
    }
  });
  }



  $('.shop-now').click(function(){
    $.scrollify.move("#buy");
  });

  $('.why-it').click(function(){
    $.scrollify.move("#why");
  });

  $('.blog-it').click(function(){
    $.scrollify.move("#blog");
  });

  nav = 0;
  $(".navbar-toggler").click( function(){
    if( nav == 0 ){
      nav = 1;
      $("nav").css('background-color', '#FFFFFF');

    } else {
      nav = 0;
      $("nav").css('background-color', 'transparent');

    }
  });

  $('.s-slider').slickAnimation();

  $('.cart-box a').fancybox({
  	iframe : {
  		preload : true,
      css : {
            width : '80%'
        }
  	}
  });

  // $(".head .headline .h1").bind( 'mouseenter', function(){
  //   $(".headline .h1").removeClass('h1-active');
  //   $(this).addClass('h1-active');
  //   $(".headline  .buttons").addClass('d-none');
  //   $(".headline  .buttons-"+$(this).attr('data-color')).removeClass('d-none');
  // });

  setInterval(function(){
      if( $(".head .headline .h1.h1-active").attr('data-color') == 'orange' ){
        $(".head .headline .h1").removeClass('h1-active');
        $(".head .headline  .buttons").addClass('d-none');
        $(".head .headline .h1[data-color=red]").addClass('h1-active');
        $(".head .headline  .buttons-red").removeClass('d-none');
      }else if( $(".head .headline .h1.h1-active").attr('data-color') == 'red' ){
        $(".head .headline .h1").removeClass('h1-active');
        $(".head .headline  .buttons").addClass('d-none');
        $(".head .headline .h1[data-color='blue']").addClass('h1-active');
        $(".head .headline  .buttons-blue").removeClass('d-none');
      } else {
        $(".head .headline .h1").removeClass('h1-active');
        $(".head .headline  .buttons").addClass('d-none');
        $(".head .headline .h1[data-color='orange']").addClass('h1-active');
        $(".head .headline  .buttons-orange").removeClass('d-none');
      }
  }, 3000);


  $(".head .headline .h1:nth-of-type(1)").addClass('h1-active');
  $(".head .headline .buttons-orange").removeClass('d-none');

  $('nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').show();
  }, function() {
      $(this).find('.dropdown-menu').hide();
  });

});
