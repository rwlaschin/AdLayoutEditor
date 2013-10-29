<?php
$defaultTemplate = "templates/base.php";
$editor = ($_REQUEST['editor'] == 'enabled');
$templateFilePath = $_REQUEST['templateFilePath'] && "base";

if( ! file_exists($templateFilePath) ) {
	$templateFilePath = "base";
}

?>
<!DOCTYPE html>
<html>
	<head>
<?php  if($editor) { ?>
		<title>AMS Template Editor</title>
		<link rel="stylesheet" type="text/css" href="/ams/editor/css/template-editor.css"/>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script type="text/javascript">
			if(typeof RockYou === 'undefined') { window.RockYou = {} }
			if(typeof RockYou.Editor === 'undefined') { window.RockYou.Editor = {} }
			window.RockYou.Editor.jquery = $.noConflict(true)
		</script>
		<script type="text/javascript" src="/ams/editor/js/template-editor.js"></script>
<?php } ?>
	</head>
	<body>
<?php  if($editor) { ?>
		<div class="left-panel">
			<div class="editor-popup-panel">
<?php		include("panels/editor-popup-panel.php"); ?>
			</div>
			<div class="logging-window">
				<fieldset>
					<legend>Logging</legend>
					<div class="editor-log-window"></div>
				</fieldset>
			</div>
		</div>
<?php } ?>
		<div class="right-panel">
			<div id="ad-frame">
<?php		include("templates/{$templateFilePath}.php"); ?>
			</div>
		</div>
	</body>
</html>