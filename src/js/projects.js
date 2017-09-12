var $ = jQuery;
$(document).ready(function() {
  var swiped = false;

  $('.str_project').each(function() {
    $(this).data('current',0);
  });

  /*** NEXT AND PREVIOUS BUTTONS ***/
  $('.str_previous,.str_next').on('click',function() {
    var str_current = $(this).parents('.str_project').data('current');
    var str_this_slider = $(this).parent().siblings('.str_project_slider_container');
    var str_indicator = $(this).parent().siblings('.str_project_indicators');
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

    $(this).parents('.str_project').data('current',str_current);
  });

  /*** THE PROJECT INFO LINK ***/
  $('.str_slider_info_link').on('click',function() {
    var str_current = $(this).parents('.str_project').data('current');
    var str_this_slider = $(this).parent().siblings('.str_project_slider_container');
    var str_indicator = $(this).parent().siblings('.str_project_indicators');
    var str_infoslide = $('.str_slide.project_info',str_this_slider);

    str_current = str_infoslide.index();
    $('.str_slide',str_this_slider).removeClass('active');
    $('.str_slide:eq('+str_current+')',str_this_slider).addClass('active');

    $('.str_indicator',str_indicator).removeClass('active');
    $('.str_indicator:eq('+str_current+')',str_indicator).addClass('active');

    $(this).parents('.str_project').data('current',str_current);
  });

  /*** THE INDICATOR ACTION ***/
  $('.str_indicator').on('click',function() {
    var str_current = $(this).index();
    var str_this_slider = $(this).parent().siblings('.str_project_slider_container');

    $('.str_slide',str_this_slider).removeClass('active');
    $('.str_slide:eq('+str_current+')',str_this_slider).addClass('active');

    $(this).siblings('.str_indicator').removeClass('active');
    $(this).addClass('active');

    $(this).parents('.str_project').data('current',str_current);
  });

  /*** SWIPE ACTION ***/
  $('.str_project_slider').swipe( {
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      var str_current = $(this).parents('.str_project').data('current');
      var str_this_slider = $(this).parent();
      var str_indicator = $(this).parent().siblings('.str_project_indicators');
      var str_slider_length = $('.str_slide',this).length;

      // DETERMINE THE DIRECTION, GO FORWARD FOR LEFT, BACKWARD FOR RIGHT
      if(direction == 'right') {
        str_current--;
        swiped = true;
      } else if(direction == 'left')  {
        str_current++;
        swiped = true;
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

      $(this).parents('.str_project').data('current',str_current);
    }
  }

  /*** CLICK ACTION ***/
  ).on('click',function(){
    if(!swiped) {
      var str_current = $(this).parents('.str_project').data('current');
      var str_this_slider = $(this).parent();
      var str_indicator = $(this).parent().siblings('.str_project_indicators');
      var str_slider_length = $('.str_slide',this).length;

      str_current++;
      if (str_current >= str_slider_length) {
        str_current = 0;
      }

      $('.str_slide',str_this_slider).removeClass('active');
      $('.str_slide:eq('+str_current+')',str_this_slider).addClass('active');

      $('.str_indicator',str_indicator).removeClass('active');
      $('.str_indicator:eq('+str_current+')',str_indicator).addClass('active');

      $(this).parents('.str_project').data('current',str_current);
    }
    swiped = false;
  });
});
