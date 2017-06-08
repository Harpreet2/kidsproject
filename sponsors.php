
<?php 
include ('header.php');?>

<section>
<h1>Here are the Sponsors</h1>

 
<div id="cf">
<a href="http://www.apple.com.au">
  <img class="bottom" src="images/iphonead.jpg" style="width:150px;height:150px" />
  <img class="top" src="images/iphonead1.jpg" style="width:150px;height:150px"  />
</a>
  </div>
 <video autoplay="autoplay" width="240" height="240" loop>
	<source src="videos/dogs.mp4" type="video/mp4" />
	<source src="videos/dogs.webm" type="video/webm" />
	<object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
		<param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
		<param name="allowFullScreen" value="true" />
		<param name="wmode" value="transparent" />
		<param name="flashVars" value="config={'playlist':[{'url':'dogs.mp4','autoPlay':true}]}" />
		<span title="No video playback capabilities, please visit the advertiser">pets</span>
	</object>
</video>
<p>
	<strong>To adopt a pet visit:</strong> <a href="http://www.rspca.org.au/adopt-pet">RSPCA</a>
</p>
</section>

<?php
include ('footer.php');
?>
