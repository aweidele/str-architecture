var $ = jQuery;
$(document).ready(function() {

  //$('body').append('<div class="feedback"></div>');

  //$('.feedback').html($(window).width());
  //$(window).resize(function(){
  //  $('.feedback').html($(window).width());
  //});

  var swiped = false;

  $('.str_project').each(function() {
    $(this).data('current',0);
  });

  /*** NEXT AND PREVIOUS BUTTONS ***/
  $('.str_previous,.str_next').on('click',function() {
    var str_current = $(this).parents('.str_project').data('current');
    var str_this_slider = $(this).parent().siblings('.str_project_slider_container');
    var str_indicator = $(this).parent().siblings('.str_project_indicators');
    var str_indicator_mobile = $(this).parent().siblings('.str_project_indicator_mobile');
    var str_slider_length = $('.str_slide',str_this_slider).length;

    str_current += $(this).index() ? 1 : -1;
    if(str_current < 0) {
      str_current = str_slider_length - 1;
    } else if (str_current >= str_slider_length) {
      str_current = 0;
    }

    $('.str_slide',str_this_slider).removeClass('active');
    $('.str_slide:eq('+str_current+')',str_this_slider).addClass('active');

    $('.str_indicator',str_indicator).removeClass('active');
    $('.str_indicator:eq('+str_current+')',str_indicator).addClass('active');

    $('.str_project_indicator_current',str_indicator_mobile).text(str_current + 1);

    $(this).parents('.str_project').data('current',str_current);
  });

  /*** THE PROJECT INFO LINK ***/
  $('.str_slider_info_link').on('click',function() {
    var str_current = $(this).parents('.str_project').data('current');
    var str_this_slider = $(this).parent().siblings('.str_project_slider_container');
    var str_indicator = $(this).parent().siblings('.str_project_indicators');
    var str_indicator_mobile = $(this).parent().siblings('.str_project_indicator_mobile');
    var str_infoslide = $('.str_slide.project_info',str_this_slider);

    str_current = str_infoslide.index();
    $('.str_slide',str_this_slider).removeClass('active');
    $('.str_slide:eq('+str_current+')',str_this_slider).addClass('active');

    $('.str_indicator',str_indicator).removeClass('active');
    $('.str_indicator:eq('+str_current+')',str_indicator).addClass('active');

    $('.str_project_indicator_current',str_indicator_mobile).text(str_current + 1);

    $(this).parents('.str_project').data('current',str_current);
  });

  /*** THE INDICATOR ACTION ***/
  $('.str_indicator').on('click',function() {
    var str_current = $(this).index();
    var str_this_slider = $(this).parent().siblings('.str_project_slider_container');
    var str_indicator_mobile = $(this).parent().siblings('.str_project_indicator_mobile');

    $('.str_slide',str_this_slider).removeClass('active');
    $('.str_slide:eq('+str_current+')',str_this_slider).addClass('active');

    $(this).siblings('.str_indicator').removeClass('active');
    $(this).addClass('active');

    $('.str_project_indicator_current',str_indicator_mobile).text(str_current + 1);

    $(this).parents('.str_project').data('current',str_current);
  });

  /*** SWIPE ACTION ***/
  $('.str_project_slider').swipe({
    swipeLeft:swipeGo,
    swipeRight:swipeGo,
    tap:tapGo,
    allowPageScroll:"vertical"
  });

  /*** BACK TO TOP ***/
  $(window).on('scroll',function() {
    t = $(window).scrollTop();
    if(t > 10) {
      $('.back_to_top').addClass('scrolled');
    } else {
      $('.back_to_top').removeClass('scrolled');
    }
  });

  $('.back_to_top').on('click',function(e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: "0" }, 500);
  });


  /*** OPEN ALL LINKS IN NEW WINDOW ***/
  $('.text_block a, .str_slide_text a').on('click',(function(e) {
    h = $(this).attr('href');
    if( !h.startsWith('mailto:') ) {
      e.preventDefault();
      window.open(h);
    }
  }));

});

function tapGo(event) {
  thisSlide = $(this);
  slideAdvance(thisSlide,'left');
}

function swipeGo(event, direction) {
  thisSlide = $(this);
  slideAdvance(thisSlide,direction);
}

function slideAdvance(thisSlide,direction) {
  var str_current = thisSlide.parents('.str_project').data('current');
  var str_this_slider = thisSlide.parent();
  var str_indicator = thisSlide.parent().siblings('.str_project_indicators');
  var str_indicator_mobile = thisSlide.parent().siblings('.str_project_indicator_mobile');
  var str_slider_length = $('.str_slide',thisSlide).length;

  // DETERMINE THE DIRECTION, GO FORWARD FOR LEFT, BACKWARD FOR RIGHT
  if(direction == 'right') {
    str_current--;
  } else if(direction == 'left')  {
    str_current++;
  } else {
    return false;
  }

  if(str_current < 0) {
    str_current = str_slider_length - 1;
  } else if (str_current >= str_slider_length) {
    str_current = 0;
  }

  $('.str_slide',str_this_slider).removeClass('active');
  $('.str_slide:eq('+str_current+')',str_this_slider).addClass('active');

  $('.str_indicator',str_indicator).removeClass('active');
  $('.str_indicator:eq('+str_current+')',str_indicator).addClass('active');

  $('.str_project_indicator_current',str_indicator_mobile).text(str_current + 1);

  thisSlide.parents('.str_project').data('current',str_current);
}
