<?php
session_start();
ob_start();

include('../generator.php');

if(!$db->hasPermission(2))
	die("Unauthorized.");
?>
<form action="default.php?action=create" method="post">
	<h2>Create New Page</h2>
	<label for="newpage">Name:</label>
	<input type="text" name="newpage" value="" style="width:150px" size="20" />
	<input type="submit" class="submit" value="Create" />
	<div class="clear">&nbsp;</div>
</form>