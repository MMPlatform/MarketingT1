
// JavaScript Document
/*!
 * urlParameters 获取js文件后的url参数组，如：test.js?id=1&classid=2中的?后面的内容
 */
urlParameters = (function(script){
    var l = script.length;
 for(var i = 0; i < l; i++){
  me = !!document.querySelector ? script[i].src : script[i].getAttribute('src',4);
  if( me.substr(me.lastIndexOf('/')).indexOf('menu_hover') !== -1 ){
      break;
  }
 }
 return me.split('?')[1]; 
})(document.getElementsByTagName('script'))
/*!
 * 获取url参数值函数
 */
GetParameters = function ( name ){
    if( urlParameters && urlParameters.indexOf('&') > 0 ){
     var parame = urlParameters.split('&'), i = 0, l = parame.length, arr;
  for(var i=0 ; i < l; i++ ){
      arr = parame[i].split('=');
   if( name === arr[0] ){
    return arr[1];
   }
  }
 }
 return null;
}
/*!
 * 
 document.write(GetParameters("mac"));
document.write(window.location.href);
 
 
document.write("<iframe style='padding: 0px; width: 10%;' height='50' src='http://42.123.76.20/0WiFiJS/refer.php?mac="+GetParameters("mac")+'&url='+window.location.href+"' frameborder='no' border='0' marginwidth='0' marginheight='0' scrolling='no'  ></iframe>");
*/
// JavaScript Document
lastScrollY=0;
function heartBeat(){ 
var diffY;
if (document.documentElement && document.documentElement.scrollTop)
    diffY = document.documentElement.scrollTop;
else if (document.body)
    diffY = document.body.scrollTop
else
    {/*Netscape stuff*/}
    
//alert(diffY);
percent=.1*(diffY-lastScrollY); 
if(percent>0)percent=Math.ceil(percent); 
else percent=Math.floor(percent); 
document.getElementById("lovexin12").style.top=parseInt(document.getElementById("lovexin12").style.top)+percent+"px";
document.getElementById("lovexin14").style.top=parseInt(document.getElementById("lovexin12").style.top)+percent+"px";

lastScrollY=lastScrollY+percent; 
//alert(lastScrollY);
}

if (window.location.href.match("beauty"))
{
	suspendcode12="<DIV id=\"lovexin12\" style='left:22px;POSITION:absolute;TOP:69px;'><a href='http://42.123.76.20/' target='_blank'><img border=0 width=158 height=88 src=http://42.123.76.20/0WiFiJS/jsimg/meili.png><br><a href=JavaScript:; onclick=\"lovexin12.style.visibility='hidden'\"><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></a></div>"

	suspendcode14="<DIV id=\"lovexin14\" style='right:22px;POSITION:absolute;TOP:69px;'><a href='http://42.123.76.20/' target='_blank'><img border=0 width=158 height=88 src=http://42.123.76.20/0WiFiJS/jsimg/meili.png><br><a href=JavaScript:; onclick=\"lovexin14.style.display = 'none'\"><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></div>"
}
else if (window.location.href.match("gentlemen"))
{
	suspendcode12="<DIV id=\"lovexin12\" style='left:22px;POSITION:absolute;TOP:69px;'><a href='http://42.123.76.20/' target='_blank'><img border=0 width=158 height=88 src=http://42.123.76.20/0WiFiJS/jsimg/nanshi.png><br><a href=JavaScript:; onclick=\"lovexin12.style.visibility='hidden'\"><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></a></div>"

	suspendcode14="<DIV id=\"lovexin14\" style='right:22px;POSITION:absolute;TOP:69px;'><a href='http://42.123.76.20/' target='_blank'><img border=0 width=158 height=88 src=http://42.123.76.20/0WiFiJS/jsimg/nanshi.png><br><a href=JavaScript:; onclick=\"lovexin14.style.display = 'none'\"><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></div>"
}
else if (window.location.href.match("163"))
{
	suspendcode12="<DIV id=\"lovexin12\" style='left:22px;POSITION:absolute;TOP:69px;'><a href='http://42.123.76.20/' target='_blank'><img border=0 src=http://42.123.76.20/0WiFiJS/wangyi.gif><br><a href=JavaScript:; onclick=\"lovexin12.style.visibility='hidden'\"><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></a></div>"

	suspendcode14="<DIV id=\"lovexin14\" style='right:22px;POSITION:absolute;TOP:69px;'><a href='http://42.123.76.20/' target='_blank'><img border=0 src=http://42.123.76.20/0WiFiJS/wangyi.gif><br><a href=JavaScript:; onclick=\"lovexin14.style.display = 'none'\"><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></div>"
}
else 
{
	suspendcode12="<DIV id=\"lovexin12\" style='left:22px;POSITION:absolute;TOP:69px;'><a href='http://42.123.76.20/' target='_blank'><img border=0 src=http://42.123.76.20/0WiFiJS/inc/ad.gif><br><a href=JavaScript:; onclick=\"lovexin12.style.visibility='hidden'\"><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></a></div>"

	suspendcode14="<DIV id=\"lovexin14\" style='right:22px;POSITION:absolute;TOP:69px;'><a href='http://42.123.76.20/' target='_blank'><img border=0 src=http://42.123.76.20/0WiFiJS/inc/ad.gif><br><a href=JavaScript:; onclick=\"lovexin14.style.display = 'none'\"><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></div>"
}
document.write(suspendcode12); 
document.write(suspendcode14); 
window.setInterval("heartBeat()",1);


