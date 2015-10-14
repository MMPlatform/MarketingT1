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
$arr1 = explode("?",$results);
$arr = explode('"',$arr1[1]);
$arr = explode('=',$arr[0]);
echo $arr[1]; 

/*
$method='post';
$url='http://42.123.76.18/auth/login?mac=3C970ED78589&rand=49174&auth_type=option&dev_id=8e5b7e60be4d5998647d3adea16c466a&browser_type=Chrome&terminal_type=Windows';

function curl($url,$post_data=array()){
	$postData=$join='';
	foreach($post_data as $key => $value){
		$postData.=$join.$key.'='.urlencode($value);
		$join='&';
	}
	$ch = curl_init();

	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$postData);

	$output=curl_exec($ch);

	if( $error = curl_error($ch) )
	{
		$output='CURL ERROR:'.$error;
		return $output;
	}
	curl_close($ch);
	return $output;
}


//print_r(curl($url,));




        $ch = curl_init('http://42.123.76.18/auth/login');  
        curl_setopt($ch, CURLOPT_POST, 1);  
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_HEADER, 0); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
        //ob_start();  
        echo   curl_exec ($ch); 
        //$return_content = ob_get_contents();  
       // ob_end_clean();  
		curl_close($ch); 
		//print_r($return);
       // $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
       // return array($return_code, $return_content);
	    
$data=json_encode(array('mac'=>'3C970ED78589','rand'=>'49174','auth_type'=>'option','dev_id'=>'8e5b7e60be4d5998647d3adea16c466a','browser_type'=>'Chrome','terminal_type'=>'Windows'));
//$url  = "http://whtt.cn/wechat/a.php"; 
$url  = "http://42.123.76.18/auth/login"; 
function http_post_data($url, $data_string) {  
  
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_POST, 0);  
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(strlen($data_string)));  
        ob_start(); 
		ob_end_clean(); 
       echo curl_exec($ch); 
	    
       // 
    }  
  
http_post_data($url, $data); 
*/
/*
  $ch = curl_init("http://42.123.76.18/") ;  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回  
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回  
echo  curl_exec($ch) ;
//$url  = "http://xx.xx.cn";  
//$data = json_encode(array('a'=>1, 'b'=>2));   
  
//http_post_data($url, $data); 


  // 创建一个新cURL资源



$phone='shouji';
$ch = curl_init();  
$data = 'mac=3C970ED78589&rand=49174&auth_type=option&dev_id=8e5b7e60be4d5998647d3adea16c466a&browser_type=Chrome&terminal_type=Windows';
// 设置URL和相应的选项  
curl_setopt($ch, CURLOPT_URL, "http://42.123.76.18/auth/login");  
curl_setopt($ch, CURLOPT_POST, 1);  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
// 抓取URL并把它传递给浏览器  
curl_exec($ch);  
  
//关闭cURL资源，并且释放系统资源  
curl_close($ch); 
*/
/*
// 创建一个新cURL资源  
$ch = curl_init();  
  
// 设置URL和相应的选项  
curl_setopt($ch, CURLOPT_URL, "http://www.baidu.com/");  
curl_setopt($ch, CURLOPT_HEADER, false);  
  
// 抓取URL并把它传递给浏览器  
curl_exec($ch);  
  
//关闭cURL资源，并且释放系统资源  
curl_close($ch); 
*/

?>
