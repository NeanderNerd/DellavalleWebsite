<?php
if(!$db->hasPermission(4))
	die('Unauthorized.');
?>
<noscript>
<div class="notice_box">
	<strong>Javascript Disabled</strong>
	<p>In order to use the settings editor, Javascript must be enabled in your browser.</p>
</div>
</noscript>
<?php
if(isset($_GET["saved"])) {
?>
<div id="pagesaved" class="notice_box positive">
	<strong>Saved</strong>
</div>
<script type="text/javascript">
<!--
$(document).ready(function() {
	setTimeout(function() {
		$("#pagesaved").fadeOut();
	}, 3500);
});
-->
</script><?php
}
?>

<form id="powered-by" class="tile" method="post" action="default.php?action=savesettings&amp;type=poweredby">
	<fieldset>
		<legend>Powered By</legend>
		<div id="viewpoweredby">
			<p>The Powered By code is included at the bottom of each page managed by PHPSeeds*. You can modify it to contain custom text.</p>
			<div id="poweredBy" style="border: 1px solid #A7BAE4;overflow:auto;background:#F6F8FC;height:120px;width:440px;"><?php echo $db->getSetting("poweredBy")?></div>
			<p class="buttons"><button onclick="$('#editpoweredby').show();$('#viewpoweredby').hide();return false;">Modify</button></p>
		</div>
		<div id="editpoweredby" style="display:none;">
			<textarea name="poweredBy"><?php echo htmlentities($db->getSetting("poweredBy"))?></textarea>
			<p class="buttons">
				<input type="submit" value="Save" />
				<a href="#" onclick="$('#viewpoweredby').show();$('#editpoweredby').hide();return false;">Cancel</a>
			</p>
		</div>
	</fieldset>
</form>

<form method="post" action="default.php?action=savesettings&amp;type=internal">
	<fieldset>
		<legend>Branding</legend>
		
		<p>
			<label><input type="checkbox" class="checkbox" name="showLogo" <?php echo getCheckboxValue($db->getSetting("showLogo"));?>> <span>Show PHPSeeds logo in administration panel</span></label>
		</p>
		
		<p class="buttons">
			<input type="submit" value="Save" />
		</p>
		
	</fieldset>
</form>