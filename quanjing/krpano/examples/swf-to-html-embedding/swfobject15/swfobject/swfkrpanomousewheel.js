/* swfkrpanomousewheel.js (for swfobject 1.5) krpano 1.0.8.10 */
function SWFkrpanoMouseWheel(a){SWFkrpanoMouseWheel.isMac=navigator.appVersion.toLowerCase().indexOf("mac")!=-1;var b=String(a.params.wmode).toLowerCase();this.wmodefix=b=="opaque"||b=="transparent";this.so=a;this.init()}
SWFkrpanoMouseWheel.prototype={init:function(){if(!SWFkrpanoMouseWheel.instances){SWFkrpanoMouseWheel.instances=[];window.addEventListener&&window.addEventListener("DOMMouseScroll",SWFkrpanoMouseWheel_wheelEvent,false);if(window.opera)window.attachEvent("onmousewheel",SWFkrpanoMouseWheel_wheelEvent);else window.onmousewheel=document.onmousewheel=SWFkrpanoMouseWheel_wheelEvent;if(SWFkrpanoMouseWheel.isMac||this.wmodefix){document.onmouseup=SWFkrpanoMouseWheel_upEvent;var a=window.onload;window.onload=
typeof window.onload!="function"?SWFkrpanoMouseWheel_registerEvents_delayed:function(){a();SWFkrpanoMouseWheel_registerEvents_delayed()}}}SWFkrpanoMouseWheel.instances.push(this)},handleMacWheel:function(a){var b=document[this.so.getAttribute("id")];b&&b.externalMouseEvent&&b.externalMouseEvent(a)},hasWheelEvent:function(){var a=document[this.so.getAttribute("id")];if(a&&a.get)return a.get("has_mousewheel_event()")=="true";return false}};
function SWFkrpanoMouseWheel_registerEvents_delayed(){setTimeout(SWFkrpanoMouseWheel_registerEvents,1E3)}
function SWFkrpanoMouseWheel_registerEvents(){var a=0,b=SWFkrpanoMouseWheel.instances.length;for(a=0;a<b;a++){var d=SWFkrpanoMouseWheel.instances[a].so,c=d.getAttribute("id");if(c=document[c]){c.wmodefix=SWFkrpanoMouseWheel.instances[a].wmodefix;if(window.opera&&SWFkrpanoMouseWheel.isMac)if(b==1)SWFkrpanoMouseWheel.overobj=d.getAttribute("id");c.onclick=SWFkrpanoMouseWheel_overEvent;c.onmouseover=SWFkrpanoMouseWheel_overEvent;c.onmouseout=SWFkrpanoMouseWheel_outEvent;if(c.wmodefix)if(c.enable_mousewheel_js_bugfix){c.enable_mousewheel_js_bugfix();
c.jsmwfix_on=true}}}}function SWFkrpanoMouseWheel_overEvent(a){if(a=a&&a.target&&a.target.id?a.target.id:this.id){var b=document[a];SWFkrpanoMouseWheel.overobj=a;if(b.wmodefix)if(b.jsmwfix_on!=true)if(b.enable_mousewheel_js_bugfix){b.enable_mousewheel_js_bugfix();b.jsmwfix_on=true}}}function SWFkrpanoMouseWheel_outEvent(){SWFkrpanoMouseWheel.overobj=null}
function SWFkrpanoMouseWheel_upEvent(){var a=0,b=SWFkrpanoMouseWheel.instances.length;for(a=0;a<b;a++){var d=SWFkrpanoMouseWheel.instances[a].so.getAttribute("id");if((d=document[d])&&(SWFkrpanoMouseWheel.isMac||d.wmodefix))d.externalMouseEvent2&&d.externalMouseEvent2(0,"mouseUp")}}
function SWFkrpanoMouseWheel_wheelEvent(a){if(!a)a=window.event;var b=0;if(a.wheelDelta){b=a.wheelDelta/120;if(window.opera)if(SWFkrpanoMouseWheel.isMac==false)b=-b}else if(a.detail)b=-a.detail;var d=false;if(b){var c=0,f=SWFkrpanoMouseWheel.instances.length;for(c=0;c<f;c++){var e=SWFkrpanoMouseWheel.instances[c].so.getAttribute("id"),g=document[e];if(SWFkrpanoMouseWheel.isMac||g.wmodefix)if(SWFkrpanoMouseWheel.overobj==e){SWFkrpanoMouseWheel.instances[c].handleMacWheel(b);document[e].focus();d=true;
break}if(SWFkrpanoMouseWheel.instances[c].hasWheelEvent()){d=true;break}}}if(SWFkrpanoMouseWheel.overobj)d=true;if(d){a.stopPropagation&&a.stopPropagation();a.preventDefault&&a.preventDefault();a.cancelBubble=true;a.cancel=true;a.returnValue=false}};
