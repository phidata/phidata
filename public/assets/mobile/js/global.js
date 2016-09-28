// JavaScript Document

//全局js
$(function(){
//start

function autowindow(){
	ww=320;
	if($(window).width()>540){
		ww=540;
	}
	else if($(window).width()<320){
		ww==320;
	}
	else{
		ww=$(window).width();
	}
	$("#zoom").css({"-webkit-transform":"scale("+(ww/320)+")","transform":"scale("+(ww/320)+")"});//,height:550*(ww/320)
}
autowindow();
$(window).resize(autowindow);

//phone
//全局点击事件
$(window).bind("touchend",function(event){
	$(".nav_m").removeClass("show");
	event.stopPropagation();
});
//导航按钮
$("header .menu").bind("touchend",function(event){
	$(".nav_m").toggleClass("show");
	event.stopPropagation();
});
//导航
$(".nav_m").bind("touchend",function(event){
	event.stopPropagation();
});


//end
});