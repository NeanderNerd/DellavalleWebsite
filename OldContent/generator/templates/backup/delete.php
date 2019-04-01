<?php
if(!$db->hasPermission(3))
	die('Unauthorized.');

$backup = $_GET["backup"];
if(!file_exists(PATH_PREFIX . "assets/" . $backup)) {
	?>
	<h1>Backup Not Found</h1>
	<p>The backup that you chose to delete is not available.</p>
	<?php
} else {
	?>
<div class="notice_box">
	<strong>Are you sure you want to delete this backup file?</strong>
	<p>Once this backup has been deleted, it is permanently removed from the server and cannot be retrieved.</p>
	<p class="inliner">
		<strong>Are you sure?</strong>
		<a class="button" href="default.php?action=deletebackup&amp;doc=<?php echo urlencode($backup); ?>">Confirm Delete</a>
		<a href="default.php?page=backup">Cancel</a>
	</div>
</div>
<div class="clear"></div>
<div class="p2 g8">
	<h1></h1>
</div>
<?php
}
