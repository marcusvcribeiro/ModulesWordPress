/* ===================================== /
/  =Slider /
/ ===================================== */

$(document).ready(function() {
   $('.slider-banner-fullwidth').show().revolution({
    delay:6000,
    startwidth:1400,
    startheight:790,
    hideThumbs:10,
    hideTimerBar:"on",
    navigationArrows:"solo",
    navigationHAlign:"center",
    navigationVAlign:"bottom",
    navigationHOffset:0,
    navigationVOffset:20,

    soloArrowLeftHalign:"left",
    soloArrowLeftValign:"center",
    soloArrowLeftHOffset:20,
    soloArrowLeftVOffset:0,

    soloArrowRightHalign:"right",
    soloArrowRightValign:"center",
    soloArrowRightHOffset:20,
    soloArrowRightVOffset:0,

    fullWidth:"off",
    fullScreen:"on",

    spinner:"spinner2",

    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,
    onHoverStop: "off",

    shuffle:"off",

    autoHeight:"off",
    forceFullWidth:"off",

    hideThumbsOnMobile:"off",
    hideNavDelayOnMobile:1500,
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"off",
    hideThumbsUnderResolution:0,

    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0
  });
});


$(window).load(function(){
  $(".slider-banner-fullwidth ul").css("display", "block");
});

/* ===================================== /
/  =Tooltip /
/ ===================================== */

$(document).ready(function() {
  $('.my-tooltip').tooltip();
});

/* ===================================== /
/  =Form Masks /
/ ===================================== */

$(document).ready(function(){
   $(".data").mask("99/99/9999");
   $(".hora").mask("99:99");
});

/* ===================================== /
/  =Before / After /
/ ===================================== */

$(document).ready(function(){
   $('.project-preview').qbeforeafter({defaultgap:325, leftgap:5, rightgap:10, caption: true});
   $('.project-preview-internal').qbeforeafter({defaultgap:550, leftgap:5, rightgap:10, caption: true});
});

/* ===================================== /
/  =Projetos /
/ ===================================== */

$(document).ready(function() {
  $(".projects-list").owlCarousel({
      items : 1,
      margin: 2,
      nav : true,
      loop : true,
      dots : false,
      autoplay : true,
      autoplaySpeed : 800,
      autoplayTimeout : 6000,
      responsiveRefreshRate : 1,
      animateIn : "fadeIn",
      animateOut : "fadeOut"
  });
});

$(document).ready(function() {
  $(".projects-carousel-list").owlCarousel({
      items : 5,
      margin: 20,
      nav : true,
      loop : true,
      dots : false,
      autoplay : true,
      autoplaySpeed : 800,
      autoplayTimeout : 6000,
      responsiveRefreshRate : 1,
      animateIn : "fadeIn",
      animateOut : "fadeOut",
      responsive : {
        // breakpoint from 0 up
        0 : {
            items : 2
        },
        // breakpoint from 768 up
        768 : {
            items : 3
        },
        // breakpoint from 768 up
        991 : {
            items : 5
        }
    }
  });
});

/* ===================================== /
/  =Scroll Top /
/ ===================================== */

$(document).ready(function(){
    $('.go-top').click(function(){
        $.scrollTo( this.hash, 1200, { offset: 0 });
        return false;
    });
});

/* ===================================== /
/  =Testimonials /
/ ===================================== */

$(document).ready(function() {
  $(".testimonials-list").owlCarousel({
      items : 1,
      margin: 2,
      nav : true,
      loop : true,
      dots : false,
      autoplay : true,
      autoplaySpeed : 800,
      autoplayTimeout : 6000,
      responsiveRefreshRate : 1,
      animateIn : "fadeIn",
      animateOut : "fadeOut"
  });
});

/* ===================================== /
/  =Colorbox /
/ ===================================== */

$(document).ready(function(){
    $(".view-photo").colorbox({width:"80%", height:"80%"});
    $(".view-preview").colorbox({rel:'preview', width:"80%", height:"80%"});
    $(".view-video").colorbox({iframe:true, width:"80%", height:"80%"});
    $(".view-gallery").colorbox({rel:"gallery", width:"80%", height:"80%"});
});

/* ===================================== /
/  =Tabs /
/ ===================================== */

$(document).ready(function(){
  $( ".tabs" ).tabs();
});

/* ===================================== /
/  =Accordions /
/ ===================================== */

$(document).ready(function(){
    $(".my-accordions").accordion({
      collapsible: true,
      active: false
    });
});