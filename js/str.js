function windowResize(){$winWidth=$(window).width(),$winHeight=$(window).height()}function windowScroll(){$scrollTop=$(window).scrollTop(),$(".news_navigation").length&&($news_nav=$(".news_wrapper .news_article").last().offset().top-$winHeight,$scrollTop>$news_nav&&0!=$newsNext&&$newsScrolling&&loadNextNews()),$("#feedback").html($news_nav+"<br>"+$scrollTop)}function tapGo(t){thisSlide=$(this),slideAdvance(thisSlide,"left")}function swipeGo(t,e){thisSlide=$(this),slideAdvance(thisSlide,e)}function slideAdvance(t,e){var i=t.parents(".str_project").data("current"),s=t.parent(),r=t.parent().siblings(".str_project_indicators"),n=t.parent().siblings(".str_project_indicator_mobile"),o=$(".str_slide",t).length;if("right"==e)i--;else{if("left"!=e)return!1;i++}i<0?i=o-1:i>=o&&(i=0),$(".str_slide",s).removeClass("active"),$(".str_slide:eq("+i+")",s).addClass("active"),$(".str_indicator",r).removeClass("active"),$(".str_indicator:eq("+i+")",r).addClass("active"),$(".str_project_indicator_current",n).text(i+1),t.parents(".str_project").data("current",i)}function loadNextNews(){$newsScrolling=!1,$.get($newsNext,function(t){var e=$(".news_wrapper .news_article",t),i=$(".news_wrapper .news_navigation",t);$(".news_navigation").remove(),$(".news_wrapper").append(e),$(".news_wrapper").append(i),$(".nav-previous a").length?($newsNext=$(".nav-previous a").attr("href"),$newsScrolling=!0):$newsNext=!1})}function newsNextClick(){$(".nav-previous a").on("click",function(t){t.preventDefault(),loadNextNews()})}var $=jQuery;$(document).ready(function(){$(".body_frontpage_load").length&&setTimeout(function(){$(".body_frontpage_load").removeClass("body_frontpage_load")},3e3);$(".str_project").each(function(){$(this).data("current",0)}),$(".str_previous,.str_next").on("click",function(){var t=$(this).parents(".str_project").data("current"),e=$(this).parent().siblings(".str_project_slider_container"),i=$(this).parent().siblings(".str_project_indicators"),s=$(this).parent().siblings(".str_project_indicator_mobile"),r=$(".str_slide",e).length;(t+=$(this).index()?1:-1)<0?t=r-1:t>=r&&(t=0),$(".str_slide",e).removeClass("active"),$(".str_slide:eq("+t+")",e).addClass("active"),$(".str_indicator",i).removeClass("active"),$(".str_indicator:eq("+t+")",i).addClass("active"),$(".str_project_indicator_current",s).text(t+1),$(this).parents(".str_project").data("current",t)}),$(".str_slider_info_link").on("click",function(){var t=$(this).parents(".str_project").data("current"),e=$(this).parent().siblings(".str_project_slider_container"),i=$(this).parent().siblings(".str_project_indicators"),s=$(this).parent().siblings(".str_project_indicator_mobile");t=$(".str_slide.project_info",e).index(),$(".str_slide",e).removeClass("active"),$(".str_slide:eq("+t+")",e).addClass("active"),$(".str_indicator",i).removeClass("active"),$(".str_indicator:eq("+t+")",i).addClass("active"),$(".str_project_indicator_current",s).text(t+1),$(this).parents(".str_project").data("current",t)}),$(".str_indicator").on("click",function(){var t=$(this).index(),e=$(this).parent().siblings(".str_project_slider_container"),i=$(this).parent().siblings(".str_project_indicator_mobile");$(".str_slide",e).removeClass("active"),$(".str_slide:eq("+t+")",e).addClass("active"),$(this).siblings(".str_indicator").removeClass("active"),$(this).addClass("active"),$(".str_project_indicator_current",i).text(t+1),$(this).parents(".str_project").data("current",t)}),$(".str_project_slider").swipe({swipeLeft:swipeGo,swipeRight:swipeGo,tap:tapGo,allowPageScroll:"vertical"}),$(window).on("scroll",function(){t=$(window).scrollTop(),t>10?$(".back_to_top").addClass("scrolled"):$(".back_to_top").removeClass("scrolled")}),$(".back_to_top").on("click",function(t){t.preventDefault(),$("html, body").animate({scrollTop:"0"},500)}),$(".text_block a, .str_slide_text a").on("click",function(t){h=$(this).attr("href"),h.startsWith("mailto:")||(t.preventDefault(),window.open(h))}),windowResize(),windowScroll(),$(window).on("resize",function(){windowResize()}),$(window).on("scroll",function(){windowScroll()}),$(".news_wrapper").addClass("scroll_load"),$(".news_navigation").length&&($newsNext=$(".nav-previous a").attr("href"),$newsScrolling=!0,newsNextClick())}),$(window).load(function(){windowResize()});