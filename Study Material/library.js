// JavaScript Document

var undefined;

// if not the top frame - make top
if (self !== top) {
	$("body").html("");
	var target = self.location.href.split("?");
	top.location = escapeHTML(target[0]);
}

function escapeHTML(str){
	var div = document.createElement('div');
    div.appendChild(document.createTextNode(str));
    return div.innerHTML;
}
	
function LinkAlert(URL) {
	BANK_NAME = "Community First Bank";
	MSG =       "You are leaving "+BANK_NAME+"'s website and will be redirected to another site. ";
	MSG = MSG + ""+BANK_NAME+" makes no endorsements or claims about the accuracy or content of ";
	MSG = MSG + "the information contained in these sites.  The security and privacy policies on ";
	MSG = MSG + "these sites may be different than those of "+BANK_NAME+".";
	if (URL!=undefined) {
		if (confirm(MSG)) window.open(URL,"_blank");
		}
	else return confirm(MSG);
	}
	
function EmailAlert() {
	MSG = "We want to remind you that e-mail is not necessarily secure against interception. If your information is very sensitive, or includes personal or confidential information -- such as your bank account, charge card, or social security number -- you may want to call us, send it by postal mail to one of the addresses listed in our locations, or log on to our online banking and send your question via secured email.  For your safety and privacy, specific account questions will not be answered that are initiated via this unsecured form.";
	return confirm(MSG);
	}
	
function toggle_label(obj, ev) {
	switch(ev) {
		case "focus":
			document.getElementById(obj.id + "-label").style.display = "none";
			break;
		case "blur":
			if (obj.value=="") document.getElementById(obj.id + "-label").style.display = "block";
			break;
		}
	}

/* https://github.com/i-like-robots/jQuery-Slideshow */
(function(e,t){"use strict";function r(t,r){this.target=t;this.$target=e(t);this.opts=e.extend({},n,r,this.$target.data());this.$carousel=this.$target.children(this.opts.carousel);this.$items=this.$carousel.children(this.opts.items);this.count=this.$items.length;if(this.count>1){this._init()}return this}var n={carousel:".carousel",items:".carousel li",slideWidth:false,jumpQueue:true,offset:1,skip:true,pagination:true,gestures:false,auto:6e3,autostop:true,hoverPause:false,loop:false,nextText:"Next",previousText:"Previous",transition:"scroll",speed:600,easing:"swing",visible:1,onupdate:false,oncomplete:false};r.prototype._init=function(){var t=this;this.$wrapper=this.$carousel.wrap('<div style="position:relative;overflow:hidden;">').parent();if(this.opts.pagination){this.$pagination=e('<ul class="slides-pagination">');for(var n=0,r=this.count;n<r;n++){this.$pagination.append('<li><a href="#" data-slides="'+n+'">'+(n+1)+"</a></li>")}this.$target.append(this.$pagination)}if(this.opts.skip){this.$prev=e('<a href="#" class="slides-prev" data-slides="previous">'+this.opts.previousText+"</a>");this.$next=e('<a href="#" class="slides-next" data-slides="next">'+this.opts.nextText+"</a>");this.$target.append(this.$next,this.$prev)}if(this.opts.pagination||this.opts.skip){this.$target.on("click.slides","[data-slides]",function(n){n.preventDefault();var r=e(this);if(!r.hasClass("disabled")){t.to(r.data("slides"),true)}})}this.redraw();if(this.opts.gestures&&"ontouchstart"in document.documentElement){this.target.addEventListener("touchstart",function(e){t.t={x1:e.touches[0].pageX,el:e.touches[0].target,dif:0}},false);this.target.addEventListener("touchmove",function(e){t.t.x2=e.touches[0].pageX;t.t.dif=Math.abs(t.t.x1-t.t.x2);e.preventDefault()},false);this.target.addEventListener("touchend",function(){if(t.t.x2>0&&t.t.dif>30){t.to(t.t.x1-t.t.x2>0?"next":"previous",true)}},false)}if(this.opts.auto){if(this.opts.hoverPause){this.$target.hover(function(){if(!t.stopped){t.pause()}},function(){if(t.paused){t.play()}})}this.play()}};r.prototype._oncomplete=function(){this.current=this.future;if(this.opts.pagination){this.$pagination.children().removeClass("selected").slice(this.current,this.current+this.opts.visible).addClass("selected")}if(this.opts.skip){if(!this.hasNext()&&!this.opts.loop){this.$next.addClass("disabled")}else{this.$next.removeClass("disabled")}if(!this.hasPrevious()&&!this.opts.loop){this.$prev.addClass("disabled")}else{this.$prev.removeClass("disabled")}}if(this.opts.oncomplete){this.opts.oncomplete.call(this,this.current)}};r.prototype.hasNext=function(){return this.current<this.count-1};r.prototype.hasPrevious=function(){return this.current>0};r.prototype.next=function(){this.to(this.current+1)};r.prototype.previous=function(){this.to(this.current-1)};r.prototype.to=function(e,t){if(this.opts.jumpQueue){this.$items.stop(true,true)}else if(this.$items.queue("fx").length){return}if(e==="next"){e=this.current+1}else if(e==="previous"){e=this.current-1}if(typeof e!=="number"){e=parseInt(e,10)}if(e>=this.count){e=this.opts.loop?0:this.count-1}else if(e<0){e=this.opts.loop?this.count-1:0}if(t&&!this.stopped){if(this.opts.autostop){this.stop()}else if(!this.paused){this.play()}}if(e!==this.current){this.future=e;this.transition.execute.call(this);if(this.opts.onupdate){this.opts.onupdate.call(this,e)}}};r.prototype.redraw=function(e){if(this.transition){this.transition.teardown.call(this)}if(e){this.opts.transition=e}this.current=t;this.transition=i[this.opts.transition].call(this);this.to(this.opts.offset-1)};r.prototype.play=function(){var e=this;clearInterval(this.timeout);this.paused=this.stopped=false;this.timeout=setInterval(function(){e.to("next")},this.opts.auto)};r.prototype.pause=function(){this.paused=true;clearInterval(this.timeout)};r.prototype.stop=function(){this.stopped=true;this.paused=false;clearInterval(this.timeout)};var i={crossfade:function(){var e=this;this.$items.filter(function(t){return t!==e.opts.offset-1}).css("display","none");this.execute=function(){var t=this.$items.eq(this.future),n=this.$items.eq(this.current).css({position:"absolute",left:0,top:0});t.fadeIn(this.opts.speed,this.opts.easing,function(){e._oncomplete.call(e)});n.fadeOut(this.opts.speed,this.opts.easing,function(){n.css("position","")})};this.teardown=function(){this.$items.stop(true,true).removeAttr("style")};return this},scroll:function(){var e=this;this.$items.css({"float":"left",width:this.opts.slideWidth});this.$carousel.css({minWidth:this.$items.outerWidth(true)*this.count});this.realcount=this.count;this.count-=this.opts.visible-1;this.execute=function(){var t=this.$items.eq(this.future).position().left+this.$wrapper.scrollLeft();this.$wrapper.animate({scrollLeft:t},this.opts.speed,this.opts.easing,function(){e._oncomplete.call(e)})};this.teardown=function(){this.count=this.realcount;this.$carousel.stop(true,true).removeAttr("style");this.$items.removeAttr("style")};return this}};e.fn.slides=function(t){return this.each(function(){if(!e.data(this,"slides")){e.data(this,"slides",new r(this,t))}})};if(typeof define==="function"&&define.amd){define(function(){return r})}else if(typeof module!=="undefined"&&module.exports){module.exports=r}})(jQuery)

$(document).ready(function() {
	
	$('a').click(function(){
		if (this.href.indexOf("http")==0 && this.href.indexOf(location.hostname)<0 && this.href.indexOf("fundsxpress.com")<0) this.href = "javascript:LinkAlert('" + this.href + "');";
		if (this.href.indexOf("mailto")==0) return EmailAlert();
		});
	
   	$('.calculator').click(function() {
		url = "https://gateway.fundsxpress.com/calculators/";
		window.open(url + $(this).attr("href"), "calculator","width=780,height=500,scrollbars=1,resizable=1");
		return false;
        });
	
	$.fn.accessibleDropDown = function () {
			
			var el = $(this);
			
			/* Reset container z-index on keyboard focus */
			$(this).focusin(function() {
				$(this).css({'z-index': '999'});
			}).focusout(function() {
				$(this).css({'z-index': '99'});
			});
			
			
			/* Setup dropdown menus for IE 6 */
			$("li", el).mouseover(function() {
				$(this).addClass("hover");
			}).mouseout(function() {
				$(this).removeClass("hover");
			});
		
			/* Make dropdown menus keyboard accessible */
			$("a", el).focus(function() {
				$(this).parents("li").addClass("hover");
			}).blur(function() {
				$(this).parents("li").removeClass("hover");
			});
			
			/* Make dropdown menus keyboard accessible */
			$("input", el).focus(function() {
				$(this).parents("li").addClass("hover");
			}).blur(function() {
				$(this).parents("li").removeClass("hover");
			});
		}
	
	// Create slideshow instances
	var $s = $('.slideshow').slides({
		loop: true,
		hoverPause: true,
		transition: "crossfade",
		nextText:	"&gt;",
		previousText:	"&lt;"
		});
		
	$("#login-toggle a.control").click(function(){
		$("#login-toggle a").toggleClass("on");
		$("#login").toggle();
		});
	
	var state = "down";
	
	$("#weather #click").click(function(){
		$(".weather-forecast").slideToggle();
		state = (state=="down") ? "up" : "down";
		$("#click").html("Forecast" + '<img src="images/arrow-weather-'+state+'.png" border=0 height=10 width=10 align="texttop" />');
		});
		
	$("#google-search input[type=text]").focus(function(){
			$("#google-search b").toggle();
		}).blur(function(){
			if (!$("#google-search input[type=text]").val()) $("#google-search b").toggle();
		});
	
	$("#google-search b").click(function(){
			$("#google-search input[type=text]").focus();
		});
		
	});