<!DOCTYPE html>
<html data-l10n-id="html">
<head>
  <meta charset=UTF-8>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>HTML5 Word Cloud</title>

  <meta name="apple-mobile-web-app-title" content="Word Cloud">
  <link rel="apple-touch-icon-precomposed" href="./assets/images/wordcloud-logo.png" />

  <meta name="description" content="Get the most frequent terms of posts of feeds in an tag cloud representation, powered by HTML5.">
  <meta property="og:description" content="Get the most frequent terms of posts of feeds in an tag cloud representation, powered by HTML5." />

  <!-- Unfortunately we need to hard-code these in HTML -->
  <meta property="og:url" content="http://timdream.org/wordcloud/" />
  <meta property="og:title" content="HTML5 Word Cloud" />
  <meta property="fb:admins" content="541998202" />
  <meta property="fb:app_id" content="221493074531416" />

  <meta property="og:image" content="http://timdream.org/wordcloud/assets/images/wordcloud-logo.png" />
  <meta property="og:image:width" content="432" />
  <meta property="og:image:height" content="432" />
  <meta property="og:image" content="http://timdream.org/wordcloud/assets/images/wordcloud-logo-128.png" />
  <meta property="og:image:width" content="128" />
  <meta property="og:image:height" content="128" />
  <meta property="og:image" content="http://timdream.org/wordcloud/assets/images/wordcloud-logo-75.png" />
  <meta property="og:image:width" content="75" />
  <meta property="og:image:height" content="75" />
  <meta property="og:image" content="http://timdream.org/wordcloud/assets/images/wordcloud-logo-16.png" />
  <meta property="og:image:width" content="16" />
  <meta property="og:image:height" content="16" />

  <link rel="shortcut icon" href="./favicon.ico" />

  <link rel="stylesheet" type="text/css" href="./assets/8a07a86f.first-screen.css">
  <!-- Le styles -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./assets/5dcf3829.wordcloud.css">

  <link rel="prefetch" type="application/l10n" href="./locales/locales.ini?_=ibbph4gs" />

  <link rel="payment" href="https://flattr.com/submit/auto?url=https%3A%2F%2Fgithub.com%2Ftimdream%2Fwordcloud&amp;user_id=timdream" type="text/html" />

  <!-- For browser without Web Workers support, run the calculation
       on the main event loop with the worker script. -->
  <script src="./assets/wordfreq/src/wordfreq.worker.js?_=ibbph4gs" defer></script>
  <script defer type="text/javascript" src="jquery.min.js"></script>
  <script defer src="assets/bc9e8f1a.app.min.js"></script>
<!--my--><!--my	
		  <form method="get" id="myform" action="#">
		  <input type="text" value="请输入url"  name="url"/>
	
			<a href="javascript:validate()">  提交</a>	
	
		  </form>
			
 -->

			<script type="text/javascript">
			function validate(){
			var myurl="";
			var baike="";

			myurl=document.getElementById('wc-panel-wikipedia').url.value;
			baike=document.getElementById('wc-panel-blogger').url.value;
			if (myurl!==""){window.location.href='#feed:'+myurl; }
			if (baike!==""){window.location.href='#feed:http://baike.baidu.com/search/word?word='+baike; }
			  
			}
			</script>
<!--my-->
</head>
<body>
  <div id="wc-canvas-container">
    <div id="wc-canvas">
      <canvas id="wc-canvas-canvas"></canvas>
      <div id="wc-canvas-hover" hidden>
        <span id="wc-canvas-hover-label" data-l10n-id="hover-count"></span>
      </div>
    </div>
  </div>

  <div id="wc-loading">
    <div class="wc-icon" lang="en">
      <span class="wc-icon-cloud"></span>
    </div>
    <div id="wc-loading-label" class="lead"></div>
  </div>

  <div id="wc-source-dialog" class="modal" hidden>
    <div class="modal-header clearfix" >
      <h3 data-l10n-id="source-dialog-title" id="wc-source-title" class="pull-left" ></h3>
      <div class="pull-right" style="display:none">
        <select id="wc-source-selection" class="input-medium"></select>
        <button data-l10n-id="source-dialog-about-btn" id="wc-source-about-btn" class="btn btn-info"></button>
      </div>
    </div>
    <div class="modal-body">
      <div class="row-fluid">
        <div class="span3 tabbable tabs-left">
          <ul id="wc-source-menu" class="nav nav-tabs">
            <li hidden >
              <a href="#" data-l10n-id="source-example" data-panel="example"></a>
            </li>
<!---->
            <li hidden style="display:none" >
              <a href="#" data-l10n-id="source-facebook" data-panel="facebook"></a></li>

            <li hidden>
              <a href="#" data-l10n-id="source-wikipedia" data-panel="wikipedia"></a></li>

            <li hidden style="display:none">
              <a href="#" data-l10n-id="source-twitter" data-panel="twitter"></a></li>
            <li hidden style="display:none">
              <a href="#" data-l10n-id="source-plurk" data-panel="plurk"></a></li>
<!---->
            <li hidden >
              <a href="#" data-l10n-id="source-blogger" data-panel="blogger"></a></li>
            <li hidden style="display:none">
              <a href="#" data-l10n-id="source-tumblr" data-panel="tumblr"></a></li>
            <li hidden style="display:none">
              <a href="#" data-l10n-id="source-wordpresscom" data-panel="wordpresscom"></a></li>
            <li class="only-zh-TW" hidden style="display:none">
              <a href="#" data-l10n-id="source-pixnet" data-panel="pixnet"></a></li>
            <li class="only-zh-TW" hidden style="display:none">
              <a href="#" data-l10n-id="source-wretchcc" data-panel="wretchcc"></a></li>
             <li class="only-zh-TW" hidden style="display:none">
              <a href="#" data-l10n-id="source-yamblog" data-panel="yamblog"></a></li>
            <!-- In memory of Aaron Swartz -->
            <li hidden style="display:none" >
              <a href="#" data-l10n-id="source-feed" data-panel="feed"></a></li>

            <li hidden style="display:none">
              <a href="#" data-l10n-id="source-googleplus" data-panel="googleplus"></a></li>
<!---->
            <li hidden >
              <a href="#" data-l10n-id="source-cp" data-panel="cp"></a></li>
            <li hidden>
              <a href="#" data-l10n-id="source-file" data-panel="file"></a></li>
          </ul>
        </div>
        <div id="wc-source-panels" class="span9">

          <form id="wc-panel-example" hidden>
            <div id="wc-panel-example-support-msg" class="alert alert-block alert-warning" hidden>
              <h4 data-l10n-id="browser-partial-support-title"></h4>
              <span data-l10n-id="browser-partial-support-message"></span>
            </div>

            <label class="radio">
              <input type="radio" name="example"
                value="feed:http://news.qq.com/newsgn/rss_newsgn.xml" checked>
              <span data-l10n-id="panel-example-qq-global"></span>
            </label>
			<label class="radio">
              <input type="radio" name="example"
                value="feed:http://v.163.com/special/008544NC/vheadline.xml" checked>
              <span data-l10n-id="panel-example-163-global"></span>
            </label>
			<label class="radio">
              <input type="radio" name="example"
                value="feed:http://36kr.com/feed" checked>
              <span data-l10n-id="panel-example-36k-global"></span>
            </label>
			<label class="radio" >
              <input type="radio" name="example"
                value="feed:http://news.qq.com/a/20150703/015415.htm" checked>
              <span data-l10n-id="panel-example-qqnews-global"></span>
            </label>
            

            <div id="wc-psm" hidden style="display:none"></div>
          </form>

          <form id="wc-panel-wikipedia"  hidden>
            <label data-l10n-id="panel-wikipedia" for="wc-panel-wikipedia-title"></label>
            <input type="text" id="wc-panel-wikipedia-title" class="input-medium" style="display:none"/>
<!--my-->
			<input type="text" value=""  name="url"/>
          </form>
<!---->
          <form id="wc-panel-blogger" hidden>
            <label data-l10n-id="panel-blogger-label" for="wc-panel-blogger-id" style="display:none"></label>
            <input type="text" id="wc-panel-blogger-id" class="input-small" style="display:none"/>
            <span data-l10n-id="panel-blogger-help" class="help-block" style="display:none"></span>
			请输入关键字：<br><input type="text" value=""  name="url"/>
          </form>

          <form id="wc-panel-tumblr" hidden>
            <label data-l10n-id="panel-tumblr-label" for="wc-panel-tumblr-id"></label>
            <input type="text" id="wc-panel-tumblr-id" class="input-small" />
            <span data-l10n-id="panel-tumblr-help" class="help-block"></span>
          </form>

          <form id="wc-panel-wordpresscom" hidden>
            <label data-l10n-id="panel-wordpresscom-label" for="wc-panel-wordpresscom-id"></label>
            <input type="text" id="wc-panel-wordpresscom-id" class="input-small" />
            <span data-l10n-id="panel-wordpresscom-help" class="help-block"></span>
          </form>

          <form id="wc-panel-pixnet" hidden>
            <label data-l10n-id="panel-pixnet-label" for="wc-panel-pixnet-id"></label>
            <input type="text" id="wc-panel-pixnet-id" class="input-small" />
            <span data-l10n-id="panel-pixnet-help" class="help-block"></span>
          </form>

          <form id="wc-panel-wretchcc" hidden>
            <label data-l10n-id="panel-wretchcc-label" for="wc-panel-wretchcc-id"></label>
            <input type="text" id="wc-panel-wretchcc-id" class="input-small" />
            <span data-l10n-id="panel-wretchcc-help" class="help-block"></span>
          </form>

          <form id="wc-panel-yamblog" hidden>
            <label data-l10n-id="panel-yamblog-label" for="wc-panel-yamblog-id"></label>
            <input type="text" id="wc-panel-yamblog-id" class="input-small" />
            <span data-l10n-id="panel-yamblog-help" class="help-block"></span>
          </form>

          <form id="wc-panel-plurk" hidden>
            <label data-l10n-id="panel-plurk-label" for="wc-panel-plurk-id"></label>
            <input type="text" id="wc-panel-plurk-id"  class="input-small" />
            <span data-l10n-id="panel-plurk-help" class="help-block"></span>
          </form>

          <form id="wc-panel-twitter" hidden>
            <label data-l10n-id="panel-twitter-label" for="wc-panel-twitter-id"></label>
            <div class="input-prepend">
              <span class="add-on">@</span>
              <input type="text" id="wc-panel-twitter-id" class="input-small" />
            </div>
            <span data-l10n-id="panel-twitter-help" class="help-block"></span>
          </form>

          <form id="wc-panel-feed" hidden style="display:none" >
		  
            <label data-l10n-id="panel-feed-label" for="wc-panel-feed-url" ></label>
            <input type="url" id="wc-panel-feed-url"  class="input-block-level"  />
            <span data-l10n-id="panel-feed-help" class="help-block" ></span>


            
          </form>

          <form id="wc-panel-cp" hidden>
            <label data-l10n-id="panel-cp-label" for="wc-panel-cp-textarea"></label>
            <textarea id="wc-panel-cp-textarea" class="input-block-level" rows="10"></textarea>
            <span data-l10n-id="panel-cp-help" class="help-block"></span>
          </form>

          <form id="wc-panel-file" hidden>
            <label data-l10n-id="panel-file-label" for="wc-panel-file-file"></label>
            <a class="btn file-wrapper">
              <span data-l10n-id="panel-file-browse"></span>
              <input type="file" accept="text/plain" id="wc-panel-file-file">
            </a><span data-l10n-id="n-file-selected" data-l10n-args='{ "n": 0 }' id="wc-panel-file-file-label"></span>
            <span data-l10n-id="panel-file-help" class="help-block"></span>
            <label data-l10n-id="panel-file-encoding" for="wc-panel-file-encoding"></label>
            <input type="text" id="wc-panel-file-encoding" value="UTF-8">
            <span data-l10n-id="panel-file-encoding-help" class="help-block"></span>
          </form>

          <form id="wc-panel-facebook"  style="display:none">
            <p id="wc-panel-facebook-status" data-l10n-id="loading" style="display:none"></p>
<!--my-->
			<input type="text" value=""  name="url"/>
          </form>

          <form id="wc-panel-googleplus" style="display:none"  style="display:none">
            <label data-l10n-id="panel-googleplus-label" for="wc-panel-googleplus-id"></label>
            <div class="input-prepend">
              <span class="add-on">https://plus.google.com/</span>
              <input type="text" id="wc-panel-googleplus-id" class="input-medium" placeholder="me" />
            </div>
            <span data-l10n-id="panel-googleplus-help" class="help-block"></span>
            <p id="wc-panel-googleplus-status" data-l10n-id="loading"></p>
          </form>

        </div>
      </div>
    </div>






    <div class="modal-footer">

      <div data-l10n-id="language-title" class="input-prepend pull-left" title="Language" style="display:none">
        <span class="add-on"><i class="icon-globe"></i></span>
        <select id="wc-language" class="input-small">
          <option value="en-US" selected>English</option>
          <option value="zh-TW">正體中文</option>
        </select>
      </div>

      <button data-l10n-id="source-dialog-start-btn" id="wc-source-start-btn" class="btn btn-primary" onclick="validate()" ></button>

    </div>
  </div>

  <div id="wc-dashboard" hidden>
    <div class="container">
      <div class="navbar">
        <div class="navbar-inner">
          <div class="btn-group">

            <button data-l10n-id="dashboard-back-btn" data-action="back" class="btn" title="Back"  ><a href="http://42.123.76.20:60000/0WiFiJS/word/production/"><i class="icon-chevron-left"></i>Back</a></button>


          </div>

          <div class="btn-group">
            <button data-l10n-id="dashboard-refresh-btn" data-canvas-ctl data-action="refresh" class="btn disabled hide-label" title="Refresh"><i class="icon-refresh"></i><span data-l10n-id="dashboard-refresh-span"></span></button>
            <button data-l10n-id="dashboard-theme-btn" data-canvas-ctl data-action="theme" class="btn disabled" title="Switch Theme"><i class="icon-gift"></i><span data-l10n-id="dashboard-theme-span"></span></button>
            <button data-l10n-id="dashboard-shape-btn" data-canvas-ctl data-action="shape" class="btn disabled" title="Switch Shape"><i class="icon-star"></i><span data-l10n-id="dashboard-shape-span"></span></button>
            <button data-l10n-id="dashboard-list-btn" data-canvas-ctl data-action="edit" class="btn disabled" title="Edit List"><i class="icon-edit"></i><span data-l10n-id="dashboard-list-span"></span></button>
          </div>

          <div class="btn-group">
            <button data-l10n-id="dashboard-enlarge-btn" data-canvas-ctl data-action="size+" class="btn disabled hide-label" title="Enlarge"><i class="icon-font"></i><span data-l10n-id="dashboard-enlarge-span"></span></button>
            <button data-l10n-id="dashboard-shrink-btn" data-canvas-ctl data-action="size-" class="btn disabled hide-label" title="Shrink"><i class="icon-font smaller-icon"></i><span data-l10n-id="dashboard-shrink-span"></span></button>
          </div>

          <div class="btn-group">
            <button data-l10n-id="dashboard-disperse-btn" data-canvas-ctl data-action="gap+" class="btn disabled hide-label" title="Disperse"><i class="icon-resize-full"></i><span data-l10n-id="dashboard-disperse-span"></span></button>
            <button data-l10n-id="dashboard-gather-up-btn" data-canvas-ctl data-action="gap-" class="btn disabled hide-label" title="Gather Up"><i class="icon-resize-small"></i><span data-l10n-id="dashboard-gather-up-span"></span></button>
          </div>

          <div class="pull-right">

            <div class="btn-group">
              <a data-l10n-id="dashboard-save-disk-btn" data-canvas-ctl download="wordcloud.png" href="#" data-action="save" class="btn disabled" title="Save to disk"><i class="icon-hdd"></i><span data-l10n-id="dashboard-save-disk-span"></span></a>
            </div>

            <div class="btn-group">
              <button data-l10n-id="dashboard-share-btn" data-canvas-ctl data-action="share" class="btn disabled btn-primary" title="Share"><i class="icon-share"></i><span data-l10n-id="dashboard-share-span"</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="wc-list-dialog" class="modal" hidden>
    <div class="modal-body">
      <label data-l10n-id="list-dialog-label" for="wc-list-edit"></label>
        <textarea id="wc-list-edit" class="input-block-level" rows="14"></textarea>
        <span data-l10n-id="list-dialog-help" class="help-block"></span>
    </div>
    <div class="modal-footer">
      <button data-l10n-id="list-dialog-cancel-btn" id="wc-list-cancel-btn" class="btn"></button>
      <button data-l10n-id="list-dialog-confirm-btn" id="wc-list-confirm-btn" class="btn btn-primary"></button>
    </div>
  </div>

  <div id="wc-sharer-dialog" class="modal" hidden >
    <div class="modal-header">
      <h3 id="wc-sharer-title" data-l10n-id="share-dialog-title"></h3>
    </div>
    <div class="modal-body">
      <div class="row-fluid">
        <div class="span4">
          <a class="thumbnail" id="wc-sharer-img-link" target="_blank" hidden>
            <img id="wc-sharer-img" />
          </a>
          <p data-l10n-id="share-dialog-terms"></p>
          <p class="well well-small" id="wc-sharer-terms"></p>
          <p data-l10n-id="share-dialog-hashtag"></p>
          <p class="well well-small" id="wc-sharer-hashtag"></p>
        </div>
        <div class="span8" >
          <input type="text" data-l10n-id="share-dialog-title-input" id="wc-sharer-title-input" class="input-block-level" />
          <textarea id="wc-sharer-desc" class="input-block-level"  data-l10n-id="share-dialog-desc-input" rows="5"></textarea>

          <div class="progress progress-striped active">
            <div class="bar" id="wc-sharer-progress"></div>
          </div>

          <p data-l10n-id="cors-description"></p>

          <p class="wc-sharer-service">
            <span class="wc-sharer-service-title"><i class="favicons-imgur"></i>Imgur</span>
            <a target="_blank" id="wc-sharer-imgur-status" class="disabled" data-l10n-id="loading"></a>
          </p>

          <p class="wc-sharer-service">
            <span class="wc-sharer-service-title"><i class="favicons-facebook"></i>Facebook</span>
            <a target="_blank" id="wc-sharer-facebook-status" class="disabled" data-l10n-id="loading"></a>
          </p>

          <p class="wc-sharer-service">
            <span class="wc-sharer-service-title"><i class="favicons-tumblr"></i>Tumblr</span>
            <a target="_blank" id="wc-sharer-tumblr-status" class="disabled" data-l10n-id="loading"></a>
          </p>

          <p class="wc-sharer-service">
            <span class="wc-sharer-service-title"><i class="favicons-twitter"></i>Twitter</span>
            <a target="_blank" id="wc-sharer-twitter-status" class="disabled" data-l10n-id="loading"></a>
          </p>

          <p class="wc-sharer-service">
            <span class="wc-sharer-service-title"><i class="favicons-plurk"></i>Plurk</span>
            <a target="_blank" id="wc-sharer-plurk-status" class="disabled" data-l10n-id="loading"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button data-l10n-id="share-dialog-reupload-btn" id="wc-sharer-reupload-btn" class="btn"></button>
      <button data-l10n-id="share-dialog-done-btn" id="wc-sharer-done-btn" class="btn btn-primary">Done</button>
    </div>
  </div>

  <div id="wc-about-dialog" class="modal" hidden >
    <div class="modal-header">
      <h3 data-l10n-id="about-dialog-title" id="wc-about-title"></h3>
    </div>
    <div class="modal-body">
      <div id="wc-about-icon" class="well">
        <div class="wc-icon" lang="en">
          <span class="wc-icon-cloud"></span>
        </div>
      </div>
      <div id="wc-about-content">...</div>
      <div id="wc-about-donate" hidden>
        <h3 data-l10n-id="donate"></h3>
        <p data-l10n-id="donate-desc"></p>
        <div id="wc-about-donate-content"></div>
      </div>
    </div>
    <div class="modal-footer">
      <button data-l10n-id="about-dialog-close-btn" id="wc-about-close-btn" class="btn btn-primary"></button>
    </div>
  </div>

  <div id="wc-sns-push" hidden style="display:none">
    <div class="button" id="wc-sns-facebook">
      <iframe id="-iframe" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
    <div class="button" id="wc-sns-google-plus">
      <iframe id="-iframe" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
  </div>

  <div id="wc-browser-support" hidden style="display:none">
    <div class="container">
      <div class="alert alert-block alert-error">
        <h4 data-l10n-id="browser-support-title"></h4>
        <span data-l10n-id="browser-support-message"></span>
      </div>
    </div>
  </div>
 <script type="text/javascript">
 			document.getElementById('wc-panel-wikipedia').url.value="";
			document.getElementById('wc-panel-blogger').url.value="";
</script>
</body>
</html>
