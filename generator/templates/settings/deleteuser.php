<?php
if(!$db->hasPermission(3))
	die('Unauthorized.');

$user = $_GET["user"];
if($db->getUserType($user) == false) {
	?>
	<h1>User Not Found</h1>
	<p>The user that you chose to delete is not available.</p>
	<?php
} else {
	?>
<div class="notice_box">
	<strong>Are you sure you want to delete this user?</strong>
	<p>Once this user has been deleted, it is permanently removed from the server and cannot be retrieved.</p>
	<p class="inliner">
		<strong>Are you sure?</strong>
		<a class="button" href="default.php?action=deleteuser&amp;user=<?php echo urlencode($user); ?>">Confirm Delete</a>
		<a href="default.php?page=settings&amp;view=users">Cancel</a>
	</div>
</div>
<div class="clear"></div>
<div class="p2 g8">
	<h1></h1>
</div>
<?php
}
