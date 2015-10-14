//load images
var el = document.getElementById('loadImagesSection');

function loadImages(isReplay) {
  document.getElementById('myresult').value="";
  var imgs = ['1'];
  
  if (typeof window.replayLoadImages === 'undefined') {
    window.replayLoadImages = 1;
  } else {
    window.replayLoadImages++;
  }
  
  for (var img in imgs) {
    (function(imgName) {
      var req = new XMLHttpRequest();
      req.onprogress = function(evt) {
        if (evt.lengthComputable) 
        {
          var percentComplete = (evt.loaded / evt.total) * 100;
          progressJs("img[data-img='" + imgName + "']").set(percentComplete);
        }
      }
      
      req.onreadystatechange = function() {
        if (req.readyState == 4) 
        {
          if (req.status == 200)
          {
			  //liuyufei
			  //alert(req.responseText);
			  
              setTimeout(function() {
              
              document.querySelector("img[data-img='" + imgName  + "']").src = 'img/'+req.responseText + '.jpg?v=' + window.replayLoadImages + req.responseText;
			  progressJs("img[data-img='" + imgName + "']").end();
			  var mycars=new Array(14)
					mycars["sports"]="体育";
					mycars["business"]="财经";
					mycars["house"]="房产";
					mycars["learning"]="教育";
					mycars["women"]="女性";
					mycars["yule"]="娱乐";
					mycars["2008"]="会议";
					mycars["travel"]="旅行";
					mycars["news"]="新闻";
					mycars["health"]="健康";
					mycars["it"]="it";
					mycars["cul"]="文化";
					mycars["mil"]="军事";
					mycars["auto"]="汽车";
			  document.getElementById('myresult').style.display="block";
			  document.getElementById('myresult').value=req.responseText;
			  var myttstr="class:"+mycars[document.getElementById('myresult').value];
			  document.getElementById('myresult').value=myttstr;
            }, 500);
          }
        }
      };
       progressJs("img[data-img='" + imgName + "']").setOptions({overlayMode: true, theme: 'blueOverlayRadiusWithPercentBar'}).start().autoIncrease(1, 150);
      var myrul = document.getElementById('wc-panel-twitter').url.value;
      req.open("GET",  "1.php?q="+myrul, true);
      req.send();
     
    })(imgs[img]);
  }
}


