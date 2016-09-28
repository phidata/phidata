/*
支持手势的基于css3的幻灯片
方式为当前子元素充满frame，上一个和下一个相对于中心位移和缩放，需要根据实际需要进行样式设定。

.frame{width:100%;height:300px;position:relative;}
.frame .child{position:absolute;left:0;top:0;width:100%;height:100%;background-position:center center;background-size:cover;background-repeat:no-repeat;}
<div class="frame">
  <div class="child" style="background-image:url(image/pic16.jpg)"></div>
  <div class="child" style="background-image:url(image/pic16.jpg)"></div>
</div>
*/
(function($) {
	$.fn.mScroll3d = function(options) {
		var opts = $.extend({},$.fn.mScroll3d.defaults,options); 
		this.each(function(){
			//初始化
			var m,f,s,c,n,np,w,h,size,iv,sw=1,idx=0,x1=0,y1=0,x2=0,y2=0;
			f = $(this);
			c = f.children();
			size=c.size();
			
			if(opts.direction=="h"){
				x1=opts.length*f.width();
				x2=opts.length*f.width()*-1;
			}
			if(opts.direction=="v"){
				y1=opts.length*f.height();
				y2=opts.length*f.height()*-1;
			}
			
			$("body").append("<style id='ms5'></style>");
			$("#ms5").html(".ms5{transition:transform "+opts.speed+"s "+opts.easing+" 0s,opacity "+opts.speed+"s "+opts.easing+" 0s;-webkit-transition:-webkit-transform "+opts.speed+"s "+opts.easing+" 0s,opacity "+opts.speed+"s "+opts.easing+" 0s;}");
			c.addClass("ms5");
			
			function move(act){
				if(act==-1){
					idx--;
					if(idx<0){
						idx=size-1;
					}
				}
				if(act==1){
					idx++;
					if(idx==size){
						idx=0;
					}
				}
				
				//all
				c.css({"-webkit-transform":"translate(0,0) scale(0)","transform":"translate(0,0) scale(0)",opacity:0,zIndex:-1}).removeClass("now").removeClass("before").removeClass("next");
				
				//-2
				if(opts.layer==2){
					var before2;
					if(idx-1<0){
						before2=size-2;
					}
					else{
						before2=idx-2;
					}
					c.eq(before2).css({"-webkit-transform":"translate("+x2*1.5+"px,"+y2*1.5+"px) scale("+opts.scale*0.5+")","transform":"translate("+x2*1.5+"px,"+y2*1.5+"px) scale("+opts.scale*0.5+")",opacity:0.3,zIndex:1}).addClass("before");
				}
				
				//-1
				var before;
				if(idx-1<0){
					before=size-1;
				}
				else{
					before=idx-1;
				}
				c.eq(before).css({"-webkit-transform":"translate("+x2+"px,"+y2+"px) scale("+opts.scale+")","transform":"translate("+x2+"px,"+y2+"px) scale("+opts.scale+")",opacity:0.8,zIndex:2}).addClass("before");
				
				//0
				c.eq(idx).css({"-webkit-transform":"translate(0,0) scale(1)","transform":"translate(0,0) scale(1)",opacity:1,zIndex:3}).addClass("now");
				
				//+1
				var next;
				if(idx+1>=size){
					next=0;						
				}
				else{
					next=idx+1;
				}
				c.eq(next).css({"-webkit-transform":"translate("+x1+"px,"+y1+"px) scale("+opts.scale+")","transform":"translate("+x1+"px,"+y1+"px) scale("+opts.scale+")",opacity:0.8,zIndex:2}).addClass("next");
				
				//+2
				if(opts.layer==2){
					var next1;
					if(idx+1>=size){
						next1=1;						
					}
					else{
						next1=idx+2;
					}
					c.eq(next1).css({"-webkit-transform":"translate("+x1*1.5+"px,"+y1*1.5+"px) scale("+opts.scale*0.5+")","transform":"translate("+x1*1.5+"px,"+y1*1.5+"px) scale("+opts.scale*0.5+")",opacity:0.3,zIndex:1}).addClass("next");
				}
				
			}
			move();//初始化
			
			if(opts.prev){
				$(opts.prev).click(function(){
					move(opts.arrow*-1);
					auto();
				});
			}
			if(opts.next){
				$(opts.next).click(function(){
					move(opts.arrow);
					auto();
				});
			}
			
			/*c.click(function(){
				if(!opts.touch){
					if($(this).hasClass("before")){
						move(-1);
					}
					if($(this).hasClass("next")){
						move(1);
					}
					auto();
				}
			});*/
			
			function auto(){
				if(opts.auto==1){
					clearInterval(iv);
					iv = window.setInterval(function(){move(opts.arrow);},opts.delay);
				}
			}
			auto();
			
			if(opts.touch){
				f.attr("id","frame"+f.offset().top);
				var touch;
				var obj1=document.getElementById(f.attr("id"));
				var start,move,end;
				
				obj1.addEventListener('touchstart',function(event){console.log(1);
					touch = event.targetTouches[0];
					if(opts.direction=="h"){start=touch.pageX;}
					if(opts.direction=="v"){start=touch.pageY;}
					if(opts.auto){
						clearInterval(iv);
					}
					
				},false);
				obj1.addEventListener('touchmove',function(event){
					event.preventDefault();//阻止浏览器默认事件
					touch = event.targetTouches[0];
					if(opts.direction=="h"){
						end=touch.pageX;
					}
					if(opts.direction=="v"){
						end=touch.pageY;
					}
					
				},false);
				obj1.addEventListener('touchend',function(event){
					if(opts.direction=="h"){
						if(end-start<0 && end-start<f.width()*-0.3){
							move(1);
						}
						if(end-start>0 && end-start>f.width()*0.3){
							move(-1);
						}
					}
					if(opts.direction=="v"){
						if(end-start<0 && end-start<f.height()*-0.3){
							move(1);
						}
						if(end-start>0 && end-start>f.height()*0.3){
							move(-1);
						}
					}
					auto();
				},false);
			}
			
		})
	};
	$.fn.mScroll3d.defaults = {
		     auto : 1,             //自动开始(1,0)
		    speed : 0.5,           //移动速度(s)
		direction : "v",           //移动方向(h,v)
		   length : 0.5,           //位移量(%)
		    scale : 0.8,           //缩放度(%)
		   easing : "ease-out",    //渐变缓冲类型(css3)
			delay : 3000,          //自动滚动延迟(ms)
			 prev : null,          //前一个按钮(class)
			 next : null,          //后一个按钮(class)
			arrow : 1,             //是否反转(1,-1)
		   layers : 1,             //叠层数量(1,2)
		    touch : 1              //支持触摸(1,0)
	}
})(jQuery);
/*
$().mScroll3d({
		     auto : 1,             //自动开始(1,0)
		    speed : 0.5,           //移动速度(s)
		direction : "v",           //移动方向(h,v)
		   length : 0.5,           //位移量(%)
		    scale : 0.8,           //缩放度(%)
		   easing : "ease-out",    //渐变缓冲类型(css3)
			delay : 3000,          //自动滚动延迟(ms)
			 prev : null,          //前一个按钮(class)
			 next : null,          //后一个按钮(class)
			arrow : 1,             //是否反转(1,-1)
		   layers : 1,             //叠层数量(1,2)
		    touch : 1              //支持触摸(1,0)
});
*/