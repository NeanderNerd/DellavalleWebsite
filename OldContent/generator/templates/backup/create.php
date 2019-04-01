<?php
if(!$db->hasPermission(3))
	die('Unauthorized.');
?>
<form id="form1" method="post" action="default.php?action=backup">
	<fieldset>
		<legend>Create a new backup</legend>
		<p>The backup will be stored as a ZIP file in your <samp>/generator/assets/</samp> directory.</p>
		<p class="inliner"><label for="backup_create">Create new backup file:</label> <input type="submit" class="button" value="Create Backup" /></p>
	</fieldset>
</form>