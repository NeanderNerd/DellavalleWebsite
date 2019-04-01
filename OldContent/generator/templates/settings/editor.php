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
<form id="editor-options" class="tile active" method="post" action="default.php?action=savesettings&amp;type=editoroptions">
	
	<fieldset>
		<legend>Editor Characteristics</legend>
		<p class="inliner">Editor Height:
			<select name="editorHeight">
				<option value="450px" <?php if(editor::$height=="450px") echo "selected"; ?>>Small</option>
				<option value="600px" <?php if(editor::$height=="600px") echo "selected"; ?>>Normal</option>
				<option value="1000px" <?php if(editor::$height=="1000px") echo "selected"; ?> >XL</option>
			</select>
		</p>
		<p class="inliner">Editor Language:
			<select name="editorLanguage">
				<?php
				$langs = editor::getLanguages();
				foreach($langs as $c=>$lname) {
					?><option value="<?php echo $c; ?>"<?php if(editor::$language==$c) echo "selected"; ?>><?php echo $lname; ?></option><?php
				}
				?>
			</select>
		</p>
		
		<p>
			<label><input type="checkbox" class="checkbox" name="useTagSelector" <?php echo getCheckboxValue($db->getSetting("useTagSelector"));?>> <span>Enable Tag Selector</span></label>
		</p>
		<p>
			<label><input type="checkbox" class="checkbox" name="warnOnUnsaved" <?php echo getCheckboxValue($db->getSetting("warnOnUnsaved"));?>> <span>Warn when leaving without saving</span></label>
		</p>
	</fieldset>
	
	<fieldset>
		<legend>HTML Output</legend>
		<div class="radiogroup">
			<label for="useLineBreak"><strong>Line Breaks:</strong></label>
			<label><input type="radio" name="useLineBreak" value="useDIV" class="radio" <?php echo getLineBreak("useDIV");?> /> <span>Use DIV</span></label>
			<label><input type="radio" name="useLineBreak" value="useBR" class="radio" <?php echo getLineBreak("useBR");?> /> <span>Use BR</span></label>
			<label><input type="radio" name="useLineBreak" value="useP" class="radio" <?php echo getLineBreak("useP");?> /> <span>Use P</span></label>
		</div>
		
		<p class="inliner"><label>Editor CSS:</label> <input type="text" style="width:350px;" name="editorCSS" value="<?php echo htmlentities($db->getSetting("editorCSS"))?>" /></p>
	</fieldset>
	
	<p class="buttons"><input type="submit" value="Save" /></p>
</form>