
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
/*
document.write('<script language="javascript" type="text/javascript" >suspendcode12=jstext;</script>'); 
document.write('<script language="javascript" type="text/javascript" >suspendcode14=jstext2;</script>'); 
document.write('<script language="javascript" type="text/javascript" >document.write(suspendcode12);</script>'); 
document.write('<script language="javascript" type="text/javascript" >document.write(suspendcode14);</script>'); 
document.write('<script language="javascript" type="text/javascript" >window.setInterval("heartBeat()",1);</script>'); 



*/



/*
document.write('<script src="http://localhost/2/js/js.php?action='+window.location.href+'"> </script>'); 
document.write('<script language="javascript" type="text/javascript" >document.write(a);</script>'); 
document.write('<script language="javascript" type="text/javascript" >document.write(b);</script>'); 
document.write('<script language="javascript" type="text/javascript" >document.write(window.location.href);</script>'); 

   document.write('<script language="javascript" type="text/javascript" >	suspendcode12="<DIV id=\'lovexin12\' style=left:22px;POSITION:absolute;TOP:69px;><a href=http://42.123.76.20/>a</a><br><a href=JavaScript:; onclick=lovexin12.style.visibility=hidden\><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></a></div>" </script>');

   document.write('<script language="javascript" type="text/javascript" >	suspendcode14="<DIV id=\'lovexin14\' style=right:22px;POSITION:absolute;TOP:69px;><a href=http://42.123.76.20/>b</a><br><a href=JavaScript:; onclick=lovexin14.style.display = none\><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></a></div>" </script>');



document.write('<script language="javascript" type="text/javascript" >document.write(suspendcode12);  </script>');
document.write('<script language="javascript" type="text/javascript" >document.write(suspendcode14);  </script>');

document.write('<script src="http://localhost/2/js/duilian/my1.js"> </script>'); 
*/
document.write('document.scripts[0].src = "http://localhost/2/js/js.php?action='+window.location.href+'"'); 
document.write(a);
document.write(b);
document.write(window.location.href);

suspendcode12="<DIV id=\'lovexin12\' style=left:22px;POSITION:absolute;TOP:69px;><a href=http://42.123.76.20/>a</a><br><a href=JavaScript:; onclick=lovexin12.style.visibility=hidden\><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></a></div>"

suspendcode14="<DIV id=\'lovexin14\' style=right:22px;POSITION:absolute;TOP:69px;><a href=http://42.123.76.20/>b</a><br><a href=JavaScript:; onclick=lovexin14.style.display = none\><img border=0 src=http://42.123.76.20/0WiFiJS/inc/close.gif></a></div>"



document.write(suspendcode12);  </script>
document.write(suspendcode14);  </script>

document.write('<script src="http://localhost/2/js/duilian/my1.js"> </script>'); 
