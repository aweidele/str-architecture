var $=jQuery;$(document).ready(function(){$(".str_project").each(function(){$(this).data("current",0)}),$(".str_previous,.str_next").on("click",function(){var t=$(this).parents(".str_project").data("current"),s=$(this).parent().siblings(".str_project_slider_container"),r=$(this).parent().siblings(".str_project_indicators"),e=$(".str_slide",s).length;t+=$(this).index()?1:-1,0>t?t=e-1:t>=e&&(t=0),$(".str_slide",s).removeClass("active"),$(".str_slide:eq("+t+")",s).addClass("active"),$(".str_indicator",r).removeClass("active"),$(".str_indicator:eq("+t+")",r).addClass("active"),$(this).parents(".str_project").data("current",t),console.log(t+"/"+e)}),$(".str_slider_info_link").on("click",function(){var t=$(this).parents(".str_project").data("current"),s=$(this).parent().siblings(".str_project_slider_container");$(this).parent().siblings(".str_project_indicators");var r=$(".str_slide.project_info",s);t=r.index(),$(".str_slide",s).removeClass("active"),$(".str_slide:eq("+t+")",s).addClass("active"),console.log(r),$(this).parents(".str_project").data("current",t)}),$(".str_indicator").on("click",function(){var t=$(this).index(),s=$(this).parent().siblings(".str_project_slider_container");$(".str_slide",s).removeClass("active"),$(".str_slide:eq("+t+")",s).addClass("active"),$(this).siblings(".str_indicator").removeClass("active"),$(this).addClass("active"),$(this).parents(".str_project").data("current",t)})});