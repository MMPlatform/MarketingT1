<?php 
$url=$_GET["url"]; 
$str = file_get_contents($url);
$str = preg_replace( "@<script(.*?)</script>@is", "", $str ); 
$str = preg_replace( "@<iframe(.*?)</iframe>@is", "", $str ); 
$str = preg_replace( "@<style(.*?)</style>@is", "", $str ); 
$str= preg_replace("/<(.*?)>/","",$str); 
$str= preg_replace("/xGv00/","",$str);
$str= preg_replace("/http/","",$str);
$str= preg_replace("/blank/","",$str);
$str= preg_replace("/title/","",$str);
$str= preg_replace("/href/","",$str);
$str= preg_replace("/target/","",$str);
$str= preg_replace("/index.htm/","",$str);
function characet($data){
  if( !empty($data) ){
    $fileType = mb_detect_encoding($data , array('UTF-8','GBK','LATIN1','BIG5')) ;
    if( $fileType != 'UTF-8'){
      $data = mb_convert_encoding($data ,'utf-8' , $fileType);
    }
  }
  return $data;
}
$str = characet($str);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WordFreq - text corpus calculation in Javascript</title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Le styles -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap-responsive.min.css" rel="stylesheet">
  <style>
  @media (min-width: 980px) {
    body { padding-top: 60px; }
  }

  *[hidden] {
    display: none;
  }

  textarea {
    height: 4em;
    transition: height 0.2s ease 0.5s;
    -webkit-transition: height 0.2s ease 0.5s; }
  textarea:focus {
    height: 20em;
    transition: height 0.2s ease;
    -webkit-transition: height 0.2s ease; }
  select { width: 100%; }

  #result {
    background: #f0f0f0; padding: 1em;
    box-sizing: border-box; -moz-box-sizing: border-box;}
  #result li { display: inline-block; margin-right: 1em; }
  #result span {
    display: inline-block; width: 0; overflow: hidden; }
  #result:empty { display: none; }

  #loading {
    animation: blink 2s infinite;
    -webkit-animation: blink 2s infinite;
  }
  @-webkit-keyframes blink {
    0% { opacity: 1; }
    100% { opacity: 0; }
  }
  @keyframes blink {
    0% { opacity: 1; }
    100% { opacity: 0; }
  }
  </style>
 
</head>
<body>
  <center>
          <canvas id="canvas" class="canvas" width="700" height="400"></canvas>
      </center>      
  <div class="container">
    
    <form id="form" method="get" action="">
      <textarea id="text-input"  rows="2" cols="30" class="span12"  style="display: none;" ><?php echo  $str;?></textarea>
      <div class="row">
        <div class="span6">
          <button class="btn btn-primary" type="submit" style="display: none;">Run</button>
          
          <span id="loading" hidden>......</span>
        </div>
  
      </div>
    </form>
    <ul id="result" class="lead span12 unstyled"></ul>
   
  </div>
  <script src="jquery.min.js"></script>
  <script src="./src/wordfreq.js"></script>
  <script src="./src/wordcloud2.js"></script>
  <script src="./src/wordfreq.worker.js"></script>

<script>


    var $form = $('#form');
    var $text = $('#text-input');
    var $result = $('#result');
    var $loading = $('#loading');

   
// Create an options object for initialization
var Option = { workerUrl: './src/wordfreq.worker.js' };

// Initialize and run process() function

//WordCloud(document.getElementById('my_canvas'),list);

 var showList = function showList(list) {
      $loading.prop('hidden', true);
      $result.empty();
      highestCount = list[0] ? list[0][1] : 0;

      textList = list.map(function (item) {
        return item[1] + '\t' + item[0];
      }).join('\n');

      // Use native DOM API for speed
      var docFragment = document.createDocumentFragment();
      list.forEach(function appendItem(item) {
        var li = document.createElement('li');
        li.textContent = item[0];
        var span = document.createElement('span');
        span.textContent = item[1] + '\t';
        li.insertBefore(span, li.firstChild);
        var gray = Math.round(51 +
          160 * Math.pow((highestCount - item[1]) / (highestCount - 2), 6));
        li.style.color = 'rgb(' + gray + ',' + gray + ',' + gray + ')';
        li.title = item[1];
        docFragment.appendChild(li);
      });
      $result.append(docFragment);
    };

     WordFreq(Option).process($text.val(), function (list) {
  // console.log the list returned in this callback.
  console.log(list);
 WordCloud(document.getElementById('canvas'), { list: list } );
});
 
 //var wordfreq = WordFreqSync(Option);
 //showList(wordfreq.process($text.val()));
 
 </script>
  

</body>
</html>
