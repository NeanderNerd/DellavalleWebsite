<?php
if(!$db->hasPermission(3))
	die('Unauthorized.');

function toolbar() {
    ?>
    <p class="toolbar inliner">
    <span>Actions:</span> <input type="submit" value="Delete Selected" />
    </p>
    <?php
}

$aKeys = list_directory(PATH_PREFIX . '/assets');
$counter = 0;
if ($aKeys !== "") {
	?>
<form action="default.php?action=delbackups" method="post">
    <?php toolbar(); ?>
	<table class="dialog" id="listing">
	<tr>
		<th><input type="checkbox" id="selectall" /></th>
		<th class="icon_col">Download</th>
		<th class="icon_col">Delete</th>
		<th width="100%">Backup Name</th>
		<th class="block_col">Restore</th>
	</tr>
	<?php
	foreach( $aKeys as $tempstring ) {
		?>
		<tr>
			<td><input type="checkbox" name="sel[]" value="<?php echo urlencode($tempstring); ?>" /></td>
			<td class="icon_col"><a href="/generator/assets/<?php echo $tempstring?>"><img src="/generator/images/disk.png" alt="" title="Download" /></a></td>
			<td class="icon_col"><a href="default.php?page=backup&amp;view=delete&amp;backup=<?php echo urlencode($tempstring); ?>"><img src="/generator/images/cancel.png" alt="" title="Delete" /></a></td>
			<td><?php echo htmlentities($tempstring); ?></td>
			<td class="block_col link_do"><a href="default.php?page=backup&amp;view=restore&amp;backup=<?php echo urlencode($tempstring); ?>">Restore</a></td>
		</tr>
		<?php
		$counter++;
	}
	?></table>
    <?php toolbar(); ?>
</form>
<?php
} else {
	?>
	<div class="emptyset">
		No backups have been created.<br />
		<a href="default.php?page=backup&amp;view=create">Create one now</a>
	</div>
	<?php
}
?>
<script type="text/javascript">
<!--
$(document).ready(function() {
	var checks = $("#listing td input"),
	    selall = document.getElementById("selectall");
	$(selall).click(function() {
		var c = this.checked;
		checks.attr("checked", c);
	});
	checks.click(function() {
		selall.indeterminate = true;
		selall.checked = true;
	});
});
-->
</script>
