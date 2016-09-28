// JavaScript Document

//弹出层
function showalert(e){
	$(".shadow").show();
	$(e).css({marginTop:$(e).height()*-0.5});
	$(e).show();
	$(e).addClass("show");
}
function hidealert(e){
	$(".shadow").hide();
	$(e).removeClass("show");
}

function shake(fun){
	if(window.DeviceMotionEvent) {
		var speed = 25;
		var x = y = z = lastX = lastY = lastZ = 0;
		window.addEventListener('devicemotion', function(){
			var acceleration =event.accelerationIncludingGravity;
			x = acceleration.x;
			y = acceleration.y;
			if(Math.abs(x-lastX) > speed || Math.abs(y-lastY) > speed) {
				fun();
			}
			lastX = x;
			lastY = y;
		}, false);
	}
}

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
	$("html").css("font-size",(ww/320)+"px");
}

function autobutton(e){
	var sto1;
	$(e).css({left:0,bottom:0,width:"100%",position:"fixed"});
	$(window).scroll(function(){
		if(!$(e).hasClass("hide")){
			$(e).stop().animate({bottom:$(e).height()*-1},300).addClass("hide");
		}
		clearTimeout(sto1);
		sto1=setTimeout(function(){
			$(e).stop().animate({bottom:0},300).removeClass("hide");
		},500);
	});
}

//数字初始化效果
function numshow(e,begin,end,length,speed){
	var stv,x;
	x=parseInt(begin);
	end=parseInt(end);
	
	var stv=setInterval(function(){
		x=x+length;
		$(e).text(x);
		if(x+length>=end){
			$(e).text(end);
			clearInterval(stv);
		}
		console.clear();
	},speed);
}
//强制小数点两位
changeTwoDecimal= function changeTwoDecimal(floatvar){
	var f_x = parseFloat(floatvar);
	if(isNaN(f_x)){
		alert('function:changeTwoDecimal->parameter error');
		return false;
	}
	var f_x = Math.round(floatvar*100)/100;
	return f_x;
}

//拖动内容
function scorllbar(e){
	var obj=document.getElementById(e);
	$("#"+e).children().wrapAll("<div class='inner'></div>");
	var w=0;
	$("#"+e).find(".inner").children().each(function(index, element) {
        w+=$(this).width()+parseInt($(this).css("margin-left"))+parseInt($(this).css("margin-right"));
    });
	$("#"+e).find(".inner").width(w);
	$("#"+e).attr("l",0);
	var x,x0;
	obj.addEventListener('touchstart',function(event){
		touch = event.targetTouches[0];
		x0=touch.screenX;
	},false);
	obj.addEventListener('touchmove',function(event){
		touch = event.targetTouches[0];
		obj.scrollLeft=x0-touch.screenX+parseInt($("#"+e).attr("l"));
		//console.clear();
		//console.log(x0+":"+touch.screenX+":"+$("#bar").attr("l"));
	},false);
	obj.addEventListener('touchend',function(event){
		touch = event.targetTouches[0];
		x=x0-touch.screenX+parseInt($("#"+e).attr("l"));
		if(x<0){x=0;}
		if(x>=$("#"+e).find(".inner").width()-$("#"+e).width()){x=$(".inner").width()-$("#"+e).width();}
		$("#"+e).attr("l",x);
	},false);
}