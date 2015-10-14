<?php
//$myok='[{"city":"beijing"},{"city":"shanghai"},{"city":"92789"},{"city":"86181"},{"city":"88402"},{"city":"103345"}]';
$myok='{"total":1736218,"data":[{"label":0,"value":639},{"label":1,"value":1269},{"label":2,"value":1178},{"label":3,"value":2214},{"label":4,"value":550},{"label":5,"value":798},{"label":6,"value":1821},{"label":7,"value":541},{"label":8,"value":656},{"label":9,"value":765},{"label":10,"value":1475},{"label":11,"value":2120},{"label":12,"value":2056},{"label":13,"value":1348},{"label":14,"value":1005},{"label":15,"value":1381},{"label":16,"value":1640},{"label":17,"value":2278}]}';
$myok=str_replace("\\/", "/", $myok);
 header('Content-type: application/json');
 //获取回调函数名
 $jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
 //json数据
 $json_data = $myok;
 //输出jsonp格式的数据
 echo $jsoncallback . "(" . $json_data . ")";


//echo  str_replace("\\/", "/", $myok);
?>