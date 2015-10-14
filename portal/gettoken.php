<?php
$mac=$_GET["mac"];
$dev_id=$_GET["dev_id"];
$rand=$_GET["rand"];
$auth_type=$_GET["auth_type"];
$browser_type=$_GET["browser_type"];
$terminal_type=$_GET["terminal_type"];
$shell='curl -d "';

$myget='mac='.$mac.'&rand='.$rand.'&auth_type='.$auth_type.'&dev_id='.$dev_id.'&browser_type='.$browser_type.'&terminal_type='.$terminal_type.'"';


$shell=$shell.$myget.' "http://42.123.76.18/auth/login"';

//system($shell);
$results = shell_exec($shell);
//exec($shell,$info);  

//print_r $info;
//$arr1 = explode("?",$results);
//$arr = explode('"',$arr1[1]);
//$arr = explode('=',$arr[0]);
//echo $arr[1]; 
//echo $results;
$myok=str_replace("\\/", "/", $results);
header('Content-type: application/json');
 //获取回调函数名
 $jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
 //json数据
 $json_data = $myok;
 //输出jsonp格式的数据
 echo $jsoncallback . "(" . $json_data . ")";
//echo  str_replace("\\/", "/", $myok);

?>
