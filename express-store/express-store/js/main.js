const responsive ={
    0:{
        items:1
    },
    320:{
        items:1
    },
    560:{
        items:2
    },
    960:{
        items:3
    }
}
$(document).ready(function(){
    $(window).scroll(function(){    
        if($(this).scrollTop()>100){
           $('.back-to-top').fadeIn('slow');
            $('.navbar-default').addClass('header-fixed');
        }else{
           $('.back-to-top').fadeOut('slow');
            $('.navbar-default').removeClass('header-fixed');
        }
    });

       // carousel
    
       $('.owl-carousel').owlCarousel({
        loop: true,
        // autoplay: true,
        // autoplayTimeout: 4000,
        dots:false,
        nav:true,
        // navText:[$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next')],
        responsive:responsive
    });
    new WOW().init();
    
// Search

    $('.log-img1').mouseenter(function(){
     $('.search').animate({height: "100px"},500);
     $('.search').slideDown(1000);
     });
     $('body').click(function(){
     $('.search').animate({height: "0px"},500);
     });
    //  $('.log-img1').mouseleave(function(){
    //  $('.search').animate({height: "0px"},500);
    //  });


// Menu Hovers

    //  $('.menufirst1').mouseenter(function(){
    //  $('.menufirst1').stop();
    //  });
    //  $('.menufirst1').mouseleave(function(){
    //  $('.menufirst1').animate({height: "0px"},1000);
    //  });
    //  $('.menufirst2').mouseenter(function(){
    //  $('.menufirst2').stop();
    //  });
    //  $('.menufirst2').mouseleave(function(){
    //  $('.menufirst2').animate({height: "0px"},1000);
    //  });
    //  $('.menufirst3').mouseenter(function(){
    //  $('.menufirst3').stop();
    //  });
    //  $('.menufirst3').mouseleave(function(){
    //  $('.menufirst3').animate({height: "0px"},1000);
    //  });
    //  $('.menufirst4').mouseenter(function(){
    //  $('.menufirst4').stop();
    //  });
    //  $('.menufirst4').mouseleave(function(){
    //  $('.menufirst4').animate({height: "0px"},1000);
    //  });
    //  $('.menufirst5').mouseenter(function(){
    //  $('.menufirst5').stop();
    //  });
    //  $('.menufirst5').mouseleave(function(){
    //  $('.menufirst5').animate({height: "0px"},1000);
    //  });
    //  $('.menufirst6').mouseenter(function(){
    //  $('.menufirst6').stop();
    //  });
    //  $('.menufirst6').mouseleave(function(){
    //  $('.menufirst6').animate({height: "0px"},1000);
    //  });
    //  $('.menufirst7').mouseenter(function(){
    //  $('.menufirst7').stop();
    //  });
    //  $('.menufirst7').mouseleave(function(){
    //  $('.menufirst7').animate({height: "0px"},1000);
    //  });
    //  $('.menufirst8').mouseenter(function(){
    //  $('.menufirst8').stop();
    //  });
    //  $('.menufirst8').mouseleave(function(){
    //  $('.menufirst8').animate({height: "0px"},1000);
    //  });
    //  $('.menufirst9').mouseenter(function(){
    //  $('.menufirst9').stop();
    //  });
    //  $('.menufirst9').mouseleave(function(){
    //  $('.menufirst9').animate({height: "0px"},1000);
    //  });

    //  $('.menuitem1').mouseenter(function(){
    //  $('.menufirst1').animate({height: "600px"},500);
    //  $('.menufirst1').slideDown(1000);
    //  });
    //  $('.menuitem1').mouseleave(function(){
    //  $('.menufirst1').animate({height: "0px"},500);
    //  });
    //  $('.menuitem2').mouseenter(function(){
    //  $('.menufirst2').animate({height: "600px"},500);
    //  $('.menufirst2').slideDown(1000);
    //  });
    //  $('.menuitem2').mouseleave(function(){
    //  $('.menufirst2').animate({height: "0px"},500);
    //  });
     
    //  $('.menuitem3').mouseenter(function(){
    //  $('.menufirst3').animate({height: "600px"},500);
    //  $('.menufirst3').slideDown(1000);
    //  });
    //  $('.menuitem3').mouseleave(function(){
    //  $('.menufirst3').animate({height: "0px"},500);
    //  });
     
    //  $('.menuitem4').mouseenter(function(){
    //  $('.menufirst4').animate({height: "600px"},500);
    //  $('.menufirst4').slideDown(1000);
    //  });
    //  $('.menuitem4').mouseleave(function(){
    //  $('.menufirst4').animate({height: "0px"},500);
    //  });
     
    //  $('.menuitem5').mouseenter(function(){
    //  $('.menufirst5').animate({height: "600px"},500);
    //  $('.menufirst5').slideDown(1000);
    //  });
    //  $('.menuitem5').mouseleave(function(){
    //  $('.menufirst5').animate({height: "0px"},500);
    //  });
     
    //  $('.menuitem6').mouseenter(function(){
    //  $('.menufirst6').animate({height: "600px"},500);
    //  $('.menufirst6').slideDown(1000);
    //  });
    //  $('.menuitem6').mouseleave(function(){
    //  $('.menufirst6').animate({height: "0px"},500);
    //  });
     
    //  $('.menuitem7').mouseenter(function(){
    //  $('.menufirst7').animate({height: "600px"},500);
    //  $('.menufirst7').slideDown(1000);
    //  });
    //  $('.menuitem7').mouseleave(function(){
    //  $('.menufirst7').animate({height: "0px"},500);
    //  });
     
    //  $('.menuitem8').mouseenter(function(){
    //  $('.menufirst8').animate({height: "600px"},500);
    //  $('.menufirst8').slideDown(1000);
    //  });
    //  $('.menuitem8').mouseleave(function(){
    //  $('.menufirst8').animate({height: "0px"},500);
    //  });
     
    //  $('.menuitem9').mouseenter(function(){
    //  $('.menufirst9').animate({height: "600px"},500);
    //  $('.menufirst9').slideDown(1000);
    //  });
    //  $('.menuitem9').mouseleave(function(){
    //  $('.menufirst9').animate({height: "0px"},500);
    //  });
     
     






    //  $('.back-to-top').click(function(){
    //     $('html,body').animate({
    //         scrollTop: 0
    //     },1500,'easeInOutExpo');
    //      return false;
    // });


});
