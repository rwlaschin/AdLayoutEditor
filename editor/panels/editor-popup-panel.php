<?php
// this is a panel so options can be changed
//			only all setting of min-sizes
echo <<<END
		<fieldset>
			<legend>Options</legend>
			<label>Background</label><input type="text" size="30" value="" title="Enter url for background image"><br/>
			<button>Add Reward Button</button><br/>
			<button>Add Close Button</button><br/>
			<button>Add Status Text</button><br/>
			<button>Add Count Down Text</button><br/>
			<button>Add Help Link</button><br/>
		</fieldset>
		<!-- http://www.iab.net/media/file/IAB-Video-Ad-Format-Standards.pdf -->
		<fieldset style="float:left">
		    <legend>Companion Images</legend>
		    <form>
		        <span>300x250</span><!-- show position -->
		        <span>300x100</span>
		        <span>300x60</span>
		        <span>468x60</span>
		        <span>728x90</span>
		    </form>
		</fieldset>
		<fieldset style="float:left">
			<legend>Linear Video Ad</legend>
			<form>
		        <span>300x50</span><!-- show position -->
		        <span>300x250</span>
		        <span>699x400</span>
		    </form>
		</fieldset>
		<fieldset>
			<legend>Auxilliary Ads</legend>
			<form>
		        <span title="300x50 or 450x50 sized ad">Overlay Ad</span><br/>
		        <span title="">Invitation Ad</label><br/>
		    </form>
		</fieldset>
		<fieldset id="template-file">
			<legend>Template Name: <span id="template-name">&lt;new&gt;</span> <span id="template-saved-status"></span></legend>
			<!--form-->
				<input type=hidden id="new" value="false"/>
				<input type=hidden id="saved" value="false"/>
		        <button id="editor-load-button" onclick="RockYou.Editor.load(); false">Load</button>
		        <button id="editor-save-button" onclick="RockYou.Editor.save('base.css','ad-window'); false;">Save</button>
		    <!--/form-->
		</fieldset>
END;
echo PHP_EOL;
?>