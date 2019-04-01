<?php
session_start();
ob_start();

include('../generator.php');

if(!$db->hasPermission(3))
	die("Unauthorized.");

if(!$db->docExists($doc))
	die("Cannot find page.");

$page = $db->getLocalData($doc);
$has_permissions = !empty($page["name"])

?>
<form action="default.php?action=updateperm&amp;doc=<?php echo urlencode($doc); ?>" method="post">
	<h2>Author Permissions</h2>
	<?php
	if($has_permissions) {
		?>
		<fieldset>
			<legend>Current Permissions</legend>
			<p><strong>Author Username:</strong> <?php echo htmlentities($page["name"]); ?></p>
			<p><strong>Author Password:</strong> (hidden)</p>
		</fieldset>
		<?php
	}
	?>
	<p class="inliner">
		<label for="username">Username:</label>
		<input type="text" name="username" value="<?php echo $has_permissions?htmlentities($page["name"]):""; ?>" style="width:150px" size="20" />
	</p>
	<p class="inliner">
		<label for="password">Password:</label>
		<input type="password" name="password" value="" style="width:150px" size="20" />
	</p>
	<p class="buttons">
		<input type="submit" class="submit" value="Save Permission" />
		<?php if($has_permissions) {?>
		<a href="default.php?action=dropperm&amp;doc=<?php echo urlencode($doc); ?>" class="button">Remove Permission</a>
		<?php } ?>
	</p>
	<div class="clear">&nbsp;</div>
</form>