<?php
/**************************************************************
 *
 *	ʹ���ض�function������������Ԫ��������
 *	@param	string	&$array		Ҫ������ַ���
 *	@param	string	$function	Ҫִ�еĺ���
 *	@return boolean	$apply_to_keys_also		�Ƿ�ҲӦ�õ�key��
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
 *	������ת��ΪJSON�ַ������������ģ�
 *	@param	array	$array		Ҫת��������
 *	@return string		ת���õ���json�ַ���
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
 
//ת�� UTF-8 -> GB2312

$str = substr($str,0,10000);

$title=characet('�ຣ��ͨɽ�廬����2������1������(ͼ)');
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


