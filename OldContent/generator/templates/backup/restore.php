<?php
if(!$db->hasPermission(3))
	die('Unauthorized.');

$backup = $_GET["backup"];
if(!file_exists(PATH_PREFIX . "assets/" . $backup)) {
	?>
	<h1>Backup Not Found</h1>
	<p>The backup that you chose to restore is not available.</p>
	<?php
} else {
	?>
<div class="notice_box neutral">
	<strong>Are you sure you want to restore this backup file?</strong>
	<p>Restoring this backup will wipe out the current database and overwrite the assets (images, audio, etc.).</p>
	<p class="inliner">
		<strong>Are you sure?</strong>
		<a class="button" href="default.php?action=restore&amp;doc=<?php echo urlencode($backup); ?>">Confirm Restore</a>
		<a href="default.php?page=backup">Cancel</a>
	</div>
</div>
<div class="clear"></div>
<div class="p2 g8">
	<h1></h1>
</div>
<?php
}
