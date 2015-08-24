<html>

  <head>

    <title>Jackal Radio</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Jackal Radio: The Howler" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
  <!--  <link rel="shortcut icon" href="../favicon.ico">-->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/main.css" />

    <script>
      /*
          VIEWPORT BUG FIX
          iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
      */
      (function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));          </script>
  <!--
  <link type="text/css" href="/skin/pink.flag/css/jplayer.pink.flag.css" rel="stylesheet" />

  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>
  -->

  <!--
   <script type="text/javascript">
      $(document).ready(function(){
        $("#jquery_jplayer_1").jPlayer({
          ready: function () {
            $(this).jPlayer("setMedia", {
              title: "WNYUAD",
              mp3: "http://heek.in:8000/;stream/1",
            });
          },
          cssSelectorAncestor: "#jp_container_1",
          swfPath: "/js",
          supplied: "mp3",
          useStateClassSkin: true,
          autoBlur: false,
          smoothPlayBar: true,
          keyEnabled: true,
          remainingDuration: true,
          toggleDuration: true
        });
      });
    </script>

  -->

  </head>

  <body>
    <div class="container">
      <h1>JACKAL RADIO</h1>
      <h2>The Howler!!!</h2>
      <audio src="http://heek.in:8000/;stream/1" preload="auto" controls autoplay></audio>  
      <br>
      <p>Questions, comments or want to get involved?</p>
      <button>Click here</button>
    </div>

  <!--
  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
  <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
    <div class="jp-type-single">
      <div class="jp-gui jp-interface">
        <div class="jp-volume-controls">
          <button class="jp-mute" role="button" tabindex="0">mute</button>
          <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
          <div class="jp-volume-bar">
            <div class="jp-volume-bar-value"></div>
          </div>
        </div>
        <div class="jp-controls-holder">
          <div class="jp-controls">
            <button class="jp-play" role="button" tabindex="0">play</button>
            <button class="jp-stop" role="button" tabindex="0">stop</button>
          </div>
          <div class="jp-progress">
            <div class="jp-seek-bar">
              <div class="jp-play-bar"></div>
            </div>
          </div>
          <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
          <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
          <div class="jp-toggles">
            <button class="jp-repeat" role="button" tabindex="0">repeat</button>
          </div>
        </div>
      </div>
      <div class="jp-details">
        <div class="jp-title" aria-label="title">&nbsp;</div>
      </div>
      <div class="jp-no-solution">
        <span>Update Required</span>
        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
      </div>
    </div>
  </div>
  <br />
  -->
  
    
<!--

  <div id="sc_stats"><?php include_once 'sc_stats.php'; ?></div> 

  <script type="text/javascript"> 
  var refreshId = setInterval(function() { 
      $.get("sc_stats.php", function(data) { 
          $("#sc_stats").html(data); 
      }); 
  }, 10000); 
  </script>
  
-->


  </body>

</html>