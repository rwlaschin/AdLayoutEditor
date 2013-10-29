<link rel="stylesheet" type="text/css" href="/ams/editor/css/base.css"/>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
	if( typeof RockYou === 'undefined') { window.RockYou = {} }
	if( typeof RockYou.Base === 'undefined') { window.RockYou.Base = {} }
	RockYou.Base.jquery = $.noConflict(true) // make a special one for 
</script>
<!-- html fragment -->
<div id="ad-window" class="not-draggable">
	<div id="top-frame" class="ad-container">
		<span id="header-text" class="ad-text">Watch video to claim reward!</span>
		<img id="close-button-img"/>
	</div>

	<div id="middle-frame" class="ad-container">
		<div class="video-placeholder placeholder"> 
			<object style="visibility: visible;" id="IvaPlayer" data="http://www.videodetective.net/flash/players/?customerid=300120&amp;playerid=595&amp;publishedid=876327&amp;playlistid=0&amp;videokbrate=750&amp;sub=RTO&amp;pversion=5.6" type="application/x-shockwave-flash" height="360" width="700">
				<param value="transparent" name="wmode">
				<param value="false" name="allowfullscreen">
				<param value="always" name="allowscriptaccess"><param value="all" name="allownetworking">
				<param value="autostart=true&amp;plugins=googima&amp;googima.ad.position=pre&amp;googima.scaled_ads=false&amp;googima.ad.tag=http%3A%2F%2Fad.doubleclick.net%2FN6327%2Fpfadx%2Frt.video%2Ftrailers%3Bqcs%3DD%3Bqcs%3DT%3Bqcs%3D7885%3Bqcs%3D2720%3B%3Btile%3D1%3Bsz%3D670x360%3Burl%3D%2Fm%2Firon_man_2%2Ftrailer%2F11076559%2F%3Bord%3D1382992227012" name="flashvars">
			</object>
		</div>
		<div class="companion-placeholder placeholder"> 
			<img id="companion-img" src="http://content7.flixster.com/movie/11/12/20/11122085_det.jpg"/> 
		</div>
	</div>

	<div id="bottom-frame" class="ad-container"> 
		<img id="rockyou-logo-img"/>
		<span id="footer-text" class="ad-text">Claim reward in 30 seconds!</span>
		<img id="reward-button-img"/>
	</div>
</div>