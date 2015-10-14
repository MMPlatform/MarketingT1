<?php
/**************************************************************
 *
 *	使用特定function对数组中所有元素做处理
 *	@param	string	&$array		要处理的字符串
 *	@param	string	$function	要执行的函数
 *	@return boolean	$apply_to_keys_also		是否也应用到key上
 *	@access public
 *
 *************************************************************/
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if (++$recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }
 
        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}
 
/**************************************************************
 *
 *	将数组转换为JSON字符串（兼容中文）
 *	@param	array	$array		要转换的数组
 *	@return string		转换得到的json字符串
 *	@access public
 *
 *************************************************************/
function JSON($array) {
	arrayRecursive($array, 'urlencode', true);
	$json = json_encode($array);
	return urldecode($json);
}
   

function characet($data){
  if( !empty($data) ){
    $fileType = mb_detect_encoding($data , array('UTF-8','GBK','LATIN1','BIG5')) ;
    if( $fileType != 'UTF-8'){
      $data = mb_convert_encoding($data ,'utf-8' , $fileType);
    }
  }
  return $data;
}

$url=$_GET["q"];

$str = file_get_contents($url);



$str = characet($str);

//$str = mb_convert_encoding($str, 'UTF-8', 'GB2312');
 
preg_match_all('/[\x{4e00}-\x{9fff}]/u', $str, $matches);
$str = join('', $matches[0]);
 
//转换 UTF-8 -> GB2312

$str = substr($str,0,10000);

$title=characet('青海大通山体滑坡致2人遇难1人受伤(图)');
$link='http://news.qq.com/a/20150702/042687.htm';
$contentSnippet=characet('');
$content=$str;

$author="www.qq.com";
$description="";
$type="rss20";
$publishedDate="Thu, 02 Jul 2015 15:17:14 -0700";
$categories="";
$array = array
       (
        //'title'=>$title,

		'content'=>$content,
		//'categories'=>$categories
       );
$arr = Array($array);

$myarr= array
       (
       // 'feedUrl'=>$link,
		'entries'=>$arr
       );
$myarr1= array
       (
        'feed'=>$myarr,
       );

$myok="callback('ctx',".JSON($myarr1).', 200, null, 200)';





echo $myok;



?>


