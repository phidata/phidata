/*

#loading{position:fixed;width:100%;height:100%;background:#e9415b;left:0;top:0;z-index:10000;}
#loading .tit{position:absolute;left:0;top:50%;margin-top:-30px;width:100%;height:30px;line-height:30px;text-align:center;color:#fff;font-size:14px;font-family:Arial, Helvetica, sans-serif;text-indent:0.5em;}
#loading .bar{position:absolute;left:50%;top:50%;margin-left:-101px;width:208px;height:16px;border-radius:10px;border:2px solid #fff;}
#loading .bar .inner{width:0px;height:8px;background:#fff;border-radius:10px;margin:2px;}

<div id="loading">
  <div class="tit">0%</div>
  <div class="bar">
    <div class="inner"></div>
  </div>
</div>
*/

/* v1.5 */
/* https://github.com/farinspace/jquery.imgpreload */
if("undefined"!=typeof jQuery){(function(a){a.imgpreload=function(b,c){c=a.extend({},a.fn.imgpreload.defaults,c instanceof Function?{all:c}:c);if("string"==typeof b){b=new Array(b)}var d=new Array;a.each(b,function(e,f){var g=new Image;var h=f;var i=g;if("string"!=typeof f){h=a(f).attr("src")||a(f).css('background-image').replace(/^url\((?:"|')?(.*)(?:'|")?\)$/mg, "$1");i=f}a(g).bind("load error",function(e){d.push(i);a.data(i,"loaded","error"==e.type?false:true);if(c.each instanceof Function){c.each.call(i)}if(d.length>=b.length&&c.all instanceof Function){c.all.call(d)}a(this).unbind("load error")});g.src=h})};a.fn.imgpreload=function(b){a.imgpreload(this,b);return this};a.fn.imgpreload.defaults={each:null,all:null}})(jQuery)}

$(function(){
//begin

var imgs=0;
var imgc;
var safe;

safe=setTimeout(function(){
	$("#loading").fadeOut(function(){
		$("#loading").remove();
	});
},60*1000);

//获取loading图片地址
var imgloads = [];
var $loads = $("#loading,#loading *");
$loads.each(function() {
	var item = $(this);
	if (typeof(item.attr("src")) != "undefined" && item.attr("src")!="" && this.nodeName.toLowerCase() == "img") {
		imgloads.push({
			src: item.attr('src')
		});
	} else if (item.css("background-image") != "none") {
		imgloads.push({
			src: item.css("background-image").replace(/^url\(["']?/, '').replace(/["']?\)$/, '')
		});
	}
});

//获取所有图片地址
var imgall = [];
var $alls = $('body').find("*");
$alls.each(function() {
	var item = $(this);
	if (typeof(item.attr("src")) != "undefined" && item.attr("src")!="" && this.nodeName.toLowerCase() == "img") {
		imgall.push({
			src: item.attr('src')
		});
	} else if (item.css("background-image") != "none") {
		imgall.push({
			src: item.css("background-image").replace(/^url\(["']?/, '').replace(/["']?\)$/, '')
		});
	}
});
imgc=imgall.length;


//加载loading图片
if(imgloads.length==0){
	loadall();
}
else{
	$.imgpreload(imgloads,{
		each: function(){
		},
		all: function(){
			//加载所有
			loadall();
		}
	});
}
	
function loadall(){
	if(imgall.length==0){
		$("#loading").fadeOut(1000,function(){
			clearTimeout(safe);	
			loaded();
		});
	}
	else{
		$.imgpreload(imgall,{
			each: function(){
				// this = dom image object
				// check for success with: $(this).data('loaded')
				// callback executes on every image load
				if($(this).data('loaded')){
					imgs+=1;
					var n=Math.floor(imgs/imgc*100);
					$("#loading .tit").text(n+"%");
					$("#loading .bar .inner").css({width:2*n});
				}
			},
			all: function(){
				// this = array of dom image objects
				// check for success with: $(this[i]).data('loaded')
				// callback executes when all images are loaded
				if($("#loading").size()>0){
					$("#loading").fadeOut(1000,function(){
						clearTimeout(safe);	
						loaded();
					});
				}
				else{
					clearTimeout(safe);	
					loaded();
				}
			}
		});
	}
}

//end
});