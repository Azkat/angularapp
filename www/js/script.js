
//ナビゲーション 背景変化

$(function() {
  $("nav ul li").mouseover(function(){
    $("nav ul li")
    	$(this).css("background","-webkit-gradient(linear, left top, left bottom, from(#c5ecf8), to(#b4daf1))")
      .css("background","-moz-linear-gradient(linear, left top, left bottom, from(#c5ecf8), to(#b4daf1))")
      .css("background","-ms-linear-gradient(top, #c5ecf8, #b4daf1)")
      .css("background","linear-gradient(linear, left top, left bottom, from(#c5ecf8), to(#b4daf1))")
      .css("box-shadow","1px 1px 2px 0px rgba(180,180,180,0.35) inset")
    	.attr("style", $(this).attr("style").replace("_off.", "_on."));
  }).mouseout(function(){
    $("nav ul li")
    	$(this).css("background","none").css("box-shadow","none");
  });
});


//サイドカラム固定

$(function($) {
	var tab = $('#sidebar_site_list'), offset = tab.offset();
	$(window).scroll(function () {
		if($(window).scrollTop() > offset.top) {
			tab.addClass('fixed');
		} else {
			tab.removeClass('fixed');
		}
	});
});