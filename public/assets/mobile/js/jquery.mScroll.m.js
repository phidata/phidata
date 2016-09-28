/*
支持手势
*/
(function($) {
	$.fn.mScroll = function(options) {
		var opts = $.extend({},$.fn.mScroll.defaults,options); 
		this.each(function(){
			//初始化
			var f,s,c,n,np,ns,w,ww,h,hh,w1,h1,size,iv,ti,sw=1,sw1=0,idx=0,idx1=0;
			f = $(this);
			
			if(f.children().is("ul")){
				f.children().addClass("scroll");
			}
			else{
				f.children().wrapAll("<div class='scroll' style='height:100%;'></div>");
			}
			s = f.find(".scroll");
			
			size=s.children().size();
			$(opts.count).text(size);
			
			if(opts.cycle==1){s.append(s.html());}
			c = s.children();
			
			n = $(opts.nav);
			if(opts.scrollnav){
				w1 = n.outerWidth()+(parseInt(n.css("margin-left"))?parseInt(n.css("margin-left")):0)+(parseInt(n.css("margin-right"))?parseInt(n.css("margin-right")):0);
				h1 = n.outerHeight()+(parseInt(n.css("margin-top"))?parseInt(n.css("margin-top")):0)+(parseInt(n.css("margin-bottom"))?parseInt(n.css("margin-bottom")):0);
				np= $(opts.nav).parent();
				n.wrapAll("<div class='scroll' style='height:100%;'></div>");
				ns=np.find(".scroll");
				ns.width(n.size()*w1);
				np.stop().animate({scrollLeft:0},100);
			}
			n.eq(0).addClass("now");
			
			w = f.width()/opts.minsize;
			h = f.height()/opts.minsize;
			
			if(opts.direction=="h"){
				if(parseInt(c.css("margin-left"))+parseInt(c.css("margin-right"))+parseInt(c.css("padding-left"))+parseInt(c.css("padding-right"))==0){
					c.css({width:w});
				}
				s.css({width:100000});
				ww=c.size()*w;
				hh=c.size()*h;
				f.stop().animate({scrollLeft:0},100);
			}
			if(opts.direction=="v"){
				if(parseInt(c.css("margin-top"))+parseInt(c.css("margin-bottom"))+parseInt(c.css("padding-top"))+parseInt(c.css("padding-bottom"))==0){
					c.css({height:h});
				}
				s.height(100000);
				ww=c.size()*h;
				hh=c.size()*h;
				f.stop().animate({scrollTop:0},100);
			}
			
			//if(opts.cycle==0){opts.auto=0;}
			if(opts.touch){
				opts.mousestop=0;
				opts.mousewheel=0;
			}
			$(opts.title).text(c.eq(0).attr("alt"));
			
			if(opts.isfocus){
				$(window).resize(function(){
					rs();
					setTimeout(function(){rs();},300);
				});
				rs();
				setTimeout(function(){rs();},300);
			}
			if(opts.auto==1){
				iv = window.setInterval(function(){move(opts.dtype);},opts.delay);
			}
			
			function rs(){
				sw==0;
				clearTimeout(ti);
				if(opts.direction=="h"){
					if(parseInt(c.css("margin-left"))+parseInt(c.css("margin-right"))+parseInt(c.css("padding-left"))+parseInt(c.css("padding-right"))==0){
						c.css({width:w});
					}
					w=f.width()/opts.minsize;
				}
				if(opts.direction=="v"){
					if(parseInt(c.css("margin-top"))+parseInt(c.css("margin-bottom"))+parseInt(c.css("padding-top"))+parseInt(c.css("padding-bottom"))==0){
						c.css({height:h});
					}
					h=f.height()/opts.minsize;
				}
				ww=c.size()*w;
				hh=c.size()*h;
				if(opts.direction=="h"){f.scrollLeft(idx*w);}
				if(opts.direction=="v"){f.scrollTop(idx*h);}
				ti=setTimeout(function(){
					sw==1;
				},500);
			}
			
			function move(act){
				if(sw==1){
					sw=0;
					if(opts.direction=="h"){
						if(act=="left"){
							if(opts.cycle!=1){
								if(idx+opts.minsize<size){
									idx++;idx1++;
									f.animate({scrollLeft:idx*w},opts.speed,opts.easing,function(){sw=1;});
								}
								else{
									f.animate({scrollLeft:idx*w},opts.speed,opts.easing,function(){sw=1;});
									//f.animate({scrollLeft:0},opts.speed,opts.easing,function(){sw=1;});
									//idx=0;idx1=0;
								}
							}
							if(opts.cycle==1){
								if(idx+opts.minsize==size){idx=0;}
								else{idx++;}
								idx1++;
								f.animate({scrollLeft:idx1*w},opts.speed,opts.easing,function(){
									sw=1;
									if(f.scrollLeft()>=ww*0.5){f.scrollLeft(0);idx1=0;}
								});
							}							
						}
						if(act=="right"){
							if(opts.cycle!=1){
								if(idx>0){
									idx--;
									idx1--;
									f.animate({scrollLeft:idx1*w},opts.speed,opts.easing,function(){sw=1;});
								}
								else{
									//f.animate({scrollLeft:0},opts.speed,opts.easing,function(){sw=1;});
									//idx=0;
								}
							}
							if(opts.cycle==1){
								if(f.scrollLeft()<=0){f.scrollLeft(ww*0.5);}
								if(idx1==0){idx=size-1;idx1=size;}
								else{idx--;}
								idx1--;
								f.animate({scrollLeft:idx1*w},opts.speed,opts.easing,function(){
									sw=1;
								});
							}
						}
						
					}
					if(opts.direction=="v"){
						if(act=="left"){
							if(opts.cycle!=1){
								if(idx+opts.minsize<size){
									idx++;idx1++;
									f.animate({scrollTop:idx*w},opts.speed,opts.easing,function(){sw=1;});
								}
								else{
									f.animate({scrollTop:idx*w},opts.speed,opts.easing,function(){sw=1;});
									//f.animate({scrollLeft:0},opts.speed,opts.easing,function(){sw=1;});
									//idx=0;idx1=0;
								}
							}
							if(opts.cycle==1){
								if(idx+opts.minsize==size){idx=0;}
								else{idx++;}
								idx1++;
								f.animate({scrollTop:idx1*w},opts.speed,opts.easing,function(){
									sw=1;
									if(f.scrollTop()>=ww*0.5){f.scrollLeft(0);idx1=0;}
								});
							}							
						}
						if(act=="right"){
							if(opts.cycle!=1){
								if(idx>0){
									idx--;
									idx1--;
									f.animate({scrollTop:idx1*w},opts.speed,opts.easing,function(){sw=1;});
								}
								else{
									//f.animate({scrollLeft:0},opts.speed,opts.easing,function(){sw=1;});
									//idx=0;
								}
							}
							if(opts.cycle==1){
								if(f.scrollTop()<=0){f.scrollTop(ww*0.5);}
								if(idx==0){idx=size-1;idx1=size;}
								else{idx--;}
								idx1--;
								f.animate({scrollTop:idx1*w},opts.speed,opts.easing,function(){
									sw=1;
								});
							}
						}
					}
					n.removeClass("now");
					n.eq(idx).addClass("now");
					$(opts.title).text(c.eq(idx).attr("alt"));
					if(opts.scrollnav){autonav();}
				}
			}
			
			if(opts.prev){
				$(opts.prev).hover(function(){sw=1;});
				$(opts.prev).click(function(){
					if(opts.arrow==1){move("right");}
					else{move("left");}
				});
				
			}
			if(opts.next){
				$(opts.next).hover(function(){sw=1;});
				$(opts.next).click(function(){
					if(opts.arrow==1){move("left");}
					else{move("right");}
				});
			}
			
			n.each(function(index, element) {
				$(this).click(function(){
					if(opts.direction=="h"){f.stop().animate({scrollLeft:index*w},opts.speed,opts.easing,function(){sw=1;});}
					if(opts.direction=="v"){f.stop().animate({scrollTop:index*h},opts.speed,opts.easing,function(){sw=1;});}
					idx=index;
					n.removeClass("now");
					n.eq(idx).addClass("now");
					if(opts.scrollnav){autonav();}
					$(opts.title).text(c.eq(idx).attr("alt"));
					if(opts.auto){
						clearInterval(iv);
						iv = window.setInterval(function(){move(opts.dtype);},opts.delay);
					}						
				});
			});
			
			if(opts.touch){
				f.attr("id","frame"+f.offset().top);
				var touch,x0,fl;
				var obj1=document.getElementById(f.attr("id"));
				var start,end="";
				
				obj1.addEventListener('touchstart',function(event){
					if(sw==1){
						sw1=1;
						touch = event.targetTouches[0];
						x0=touch.screenX;
						start=touch.screenX;
						fl=f.scrollLeft();
						if(opts.auto){
							clearInterval(iv);
						}
					}
				},false);
				obj1.addEventListener('touchmove',function(event){
					event.preventDefault();//阻止浏览器默认事件
					if(sw==1 && sw1==1){
						touch = event.targetTouches[0];
						f.scrollLeft(fl-(touch.screenX-x0));
						end=touch.screenX;
					}
				},false);
				obj1.addEventListener('touchend',function(event){
					if(sw==1 && end!=""){
						if(end-start<w*-0.2){
							move("left");
						}
						else if(end-start>w*0.2){
							move("right");
						}
						else{
							sw=0;
							f.stop().animate({scrollLeft:idx1*w},opts.speed*0.5,opts.easing,function(){sw=1;});
						}
						if(opts.auto){
							clearInterval(iv);
							iv = window.setInterval(function(){move(opts.dtype);},opts.delay);
						}
						sw1=0;
						end=""
					}
				},false);
			}
		
		})
	};
	$.fn.mScroll.defaults = {
		     auto : 1,             //自动开始
		direction : "h",           //h横向,v纵向
		    dtype : "left",        //正反方向
		  isfocus : 1,             //是否作为焦点图
		  minsize : 1,             //最小数量
		    speed : 300,           //滚动速度
		   easing : "jswing",      //渐变缓冲类型
			delay : 5000,          //自动滚动延迟
			  nav : null,          //导航
        scrollnav : 0,             //导航滚动
			 prev : null,          //前一个按钮
			 next : null,          //后一个按钮
		    index : null,          //当前序号
			count : null,          //总数
			title : null,          //标题
			arrow : 1,             //是否反转
			cycle : 0,             //是否循环
	        touch : 1              //是否开启触摸事件
	}
})(jQuery);
/*
$().mScroll({
		     auto : 1,             //自动开始
		direction : "h",           //h横向,v纵向
		    dtype : "left",        //正反方向
		  isfocus : 1,             //是否作为焦点图
		  minsize : 1,             //最小数量
		    speed : 800,           //滚动速度
		   easing : "",            //渐变缓冲类型
			delay : 5000,          //自动滚动延迟
			  nav : null,          //导航
        scrollnav : 0,             //导航滚动
			 prev : null,          //前一个按钮
			 next : null,          //后一个按钮
		    index : null,          //当前序号
			count : null,          //总数
			title : null,          //标题
			arrow : 1,             //是否反转
			cycle : 1,             //是否循环
			touch : 1              //是否开启触摸事件
});
*/