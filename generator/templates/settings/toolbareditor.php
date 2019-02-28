<?php
if(!$db->hasPermission(4))
	die('Unauthorized.');
?>
<form id="toolbar" class="tile" method="post" action="default.php?action=savesettings&amp;type=toolbar">
	
	<?php
	function sbgroup($key) {
		?><div class="sbgroup">
			<div id="sb_<?php echo $key; ?>_first" class="first sortbar"><?php dragrow($key, "first"); ?></div>
			<div id="sb_<?php echo $key; ?>_second" class="second sortbar"><?php dragrow($key, "second"); ?></div>
		</div><?php
	}
	$bcount = 0;
	function dragrow($key, $order="", $sortbar=true) {
		global $db, $bcount;
		if($key)
			$buttons = $db->getButtons($key, $order);
		else
			$buttons = $db->unusedButtons();
		foreach($buttons as $button) {
			?><span id="<?php echo $button, "_", $bcount++; ?>" class="btnsim" style="background-image:url(/generator/scripts/icons/btn<?php echo editor::getButton($button); ?>.gif);" title="<?php echo $button; ?>"></span><?php
		}
		if($sortbar) {
		?><div class="clear"></div><?php
		}
	}
	?>
	
	<div id="simbar">
		<?php
		foreach(array("page", "edit", "font", "paragraph", "style", "insert") as $key)
			sbgroup($key);
		?>
		<div class="clear"></div>
	</div>
	
	<strong>Toolbar Editor</strong>
	<p>Drag and drop the buttons on the toolbar above into the spot that you wish for them to be. Buttons in the tray below will not be shown on the toolbar. Changes made here are automatically saved.</p>
	
	<div id="buttontray">
		<div class="sortbar">
		<?php
		dragrow(false, "", false);
		?>
		</div>
		<div class="clear"></div>
	</div>
	
</form>

<script type="text/javascript">
<!--
$(document).ready(function() {
	$(".sortbar").sortable({
		connectWith: ".sortbar",
		cancel: ".clear",
		items: "span:not(.clear)",
		update: function(e,u) {
			if(this.id == "")
				return;
			$.post(
				"/generator/ajax/savetoolbar.php",
				{
					"buttons": $(this).sortable("serialize"),
					"id": this.id
				},
				function(d) {
					
				}
			);
		}
	}).disableSelection();
});
-->
</script>