var $ = jQuery;
$(document).ready(function() {

  if($('.body_frontpage_load').length) {

    setTimeout(function() {
      $('.body_frontpage_load').removeClass('body_frontpage_load');
    },3000);
  }

  var swiped = false;

  /*** SLIDER ***/
  // $('.str_slider').owlCarousel({
  //   'items':1,
  //   'loop':true,
  //   'lazyLoad':true,
  //   'responsive': {
  //     0: {
  //       'nav': false
  //     },
  //     640: {
  //       'nav': true
  //     }
  //   },
  //   'navText': [
  //     "<div class='str_previous'>Prev<svg viewBox='0 0 32 32'><use xlink:href='#arrow_left'></use></svg></div>",
  //     "<div class='str_next'>Next<svg viewBox='0 0 32 32'><use xlink:href='#arrow_right'></use></svg></div>"
  //   ],
  //   'mouseDrag':false
  // });

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

  windowResize();
  windowScroll();

  $(window).on("resize",function() {
    windowResize();
  });

  $(window).on("scroll",function() {
    windowScroll();
  });

  $(".news_wrapper").addClass("scroll_load");

  if($(".news_navigation").length) {
    $newsNext = $(".nav-previous a").attr("href");
    $newsScrolling = true;
    newsNextClick();
  }

  if($(".more-link").length) {
    $(".more-link").on("click",function(e) {
      e.preventDefault();
      $(this).parents(".news_article").addClass("content_expanded");
    });
  }

  if( $('.str_slider').length ) {
    $('.str_slider').each(function() {
      sliderInit( $(this) );
    });
  }

});
$winWidth = 0;
$winHeight = 0;
$scrollTop = 0;
$(window).load(function() {
  windowResize();
  // windowScroll();
});

function windowResize() {
  $winWidth = $(window).width();
  $winHeight = $(window).height();

  fb();
}

function windowScroll() {
  $scrollTop = $(window).scrollTop();
  if($(".news_navigation").length) {
    $news_nav = $(".news_wrapper .news_article").last().offset().top - $winHeight;
    if($scrollTop > $news_nav && $newsNext != false && $newsScrolling) {
      loadNextNews();
    }
  }

  // if( $('.str_slider.outview').length ) {
  //   $('.str_slider.outview').each(function() {
  //     var p = $(this).parents('.str_project');
  //     var o = p.offset().top;
  //     var v = o - $winHeight;
  //     if( $scrollTop > v ) {
  //       sliderInit( $(this) );
  //       p.addClass('inview');
  //       $(this).removeClass('outview');
  //     }
  //   });
  // }

  fb();
}

function sliderInit(carousel) {
  $('img', carousel).each(function() {
    var src = $(this).data('src');
    $(this).prop("src", src);
  });

  carousel.owlCarousel({
    'items':1,
    'loop':true,
    'lazyLoad':true,
    'responsive': {
      0: {
        'nav': false
      },
      640: {
        'nav': true
      }
    },
    'navText': [
      "<div class='str_previous'>Prev<svg viewBox='0 0 32 32'><use xlink:href='#arrow_left'></use></svg></div>",
      "<div class='str_next'>Next<svg viewBox='0 0 32 32'><use xlink:href='#arrow_right'></use></svg></div>"
    ],
    'mouseDrag':false
  });

  $('.str_slider_info_link').on('click', function(e) {
    e.preventDefault();
    var thisSlider = $(this).parent().siblings('.str_slider');
    var jumpSlide = thisSlider.data('jumpslide');
    // alert(jumpSlide);
    thisSlider.trigger('to.owl.carousel', jumpSlide);
  });

  $('.str_slider_image img', carousel).on('click', function(e) {
    e.preventDefault();
    var thisSlider = $(this).parents('.str_slider');
    thisSlider.trigger('next.owl.carousel');
  });
}

function fb() {
  // $("#feedback2").html('W: ' + $winWidth + "<br>H: " + $winHeight + "<br>S: " + $scrollTop);
}

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

function loadNextNews() {
  $newsScrolling = false;
  $.get($newsNext, function(data) {
    var posts = $(".news_wrapper .news_article", data);
    var nav = $(".news_wrapper .news_navigation", data);

    $(".news_navigation").remove();

    $(".news_wrapper").append(posts);
    $(".news_wrapper").append(nav);

    $(".more-link").off("click","**")
      .on("click",function(e) {
        e.preventDefault();
        $(this).parents(".news_article").addClass("content_expanded");
      });

    if($(".nav-previous a").length) {
      $newsNext = $(".nav-previous a").attr("href");
      $newsScrolling = true;
    } else {
      $newsNext = false;
    }
  });
}

function newsNextClick() {
  $(".nav-previous a").on("click",function(e) {
    e.preventDefault();
    loadNextNews();
  });
}
