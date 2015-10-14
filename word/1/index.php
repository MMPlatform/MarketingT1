<?php
function JSON($array) {
	arrayRecursive($array, 'urlencode', true);
	$json = json_encode($array);
	return urldecode($json);
}
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


$content='123';
$categories='abc';

$month1='87469';
$month2='90121';
$month3='92789';
$month4='86181';
$month5='88402';
$month6='103345';
$month7='103556';
//$total=$month1+$month2+$month3+$month4+$month5+$month6;
$total='103556';
$label='label';
$value='value';

$my1= array
       (
               // 'feedUrl'=>$link,
             $label=>'2015/1',
			 $value=>$month1

       );
$my2=array(
			 $label=>'2015/2',
			 $value=>$month2
			 
);
$my3= array
       (
			 $label=>'2015/3',
			 $value=>$month3
			 );
$my4=array(
			 $label=>'2015/4',
			 $value=>$month4			 
);
$my5= array
       (
			 $label=>'2015/5',
			 $value=>$month5			 
       );
$my6=array(
			 $label=>'2015/6',
			 $value=>$month6		 
);
$my7= array
       (
               // 'feedUrl'=>$link,
             $label=>'2015/7',
			 $value=>$month7	

       );

$my8= array
       (
			 $label=>'2015/8',
			 $value=>'541'
			 );
$my9=array(
			 $label=>'2015/9',
			 $value=>'656'			 
);
$my10= array
       (
			 $label=>'2015/10',
			 $value=>'765'			 
       );
$my11=array(
			 $label=>'2015/11',
			 $value=>'1475'			 
);
$my12= array
       (
               // 'feedUrl'=>$link,
             $label=>'2015/12',
			 $value=>'2120'

       );
$my13=array(
			 $label=>'2015/13',
			 $value=>'2056'
			 
);
$my14= array
       (
			 $label=>'2015/14',
			 $value=>'1348'
			 );
$my15=array(
			 $label=>'2015/15',
			 $value=>'1005'			 
);
$my16= array
       (
			 $label=>'2015/16',
			 $value=>'1381'			 
       );
$my17=array(
			 $label=>'2015/17',
			 $value=>'1640'			 
);
$my18=array(
			 $label=>'2015/18',
			 $value=>'2278'
			 
);


$myarr=array
       (
               
              $my1,$my2, $my3,$my4, $my5,$my6,$my7,
       );


$myarr1= array
       (
                'total'=>$total,
				'data'=>$myarr
       );


$myok=json_encode($myarr1);


$myok=str_replace("\\/", "/", $myok);
 header('Content-type: application/json');
 //获取回调函数名
 $jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
 //json数据
 $json_data = $myok;
 //输出jsonp格式的数据
 echo $jsoncallback . "(" . $json_data . ")";



//'{"total":1736218,"data":[{"label":0,"value":639},{"label":1,"value":1269},{"label":2,"value":1178},{"label":3,"value":2214},{"label":4,"value":550},{"label":5,"value":798},{"label":6,"value":1821},{"label":7,"value":541},{"label":8,"value":656},{"label":9,"value":765},{"label":10,"value":1475},{"label":11,"value":2120},{"label":12,"value":2056},{"label":13,"value":1348},{"label":14,"value":1005},{"label":15,"value":1381},{"label":16,"value":1640},{"label":17,"value":2278}]}'
//echo  str_replace("\\/", "/", $myok);
//({"total":"103345","data":[{"label":"2015/1","value":"87469"},{"label":"2015/2","value":"90121"},{"label":"2015/3","value":"92789"},{"label":"2015/4","value":"86181"},{"label":"2015/5","value":"88402"},{"label":"2015/6","value":"103345"}]})
?>