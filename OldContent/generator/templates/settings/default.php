<?php
if(!$db->hasPermission(2))
	die('Unauthorized.');

if(isset($_GET['changed'])) {
?>
<div id="saved" class="notice_box positive">
	<strong>Saved</strong>
</div>
<script type="text/javascript">
<!--
$(document).ready(function() {
	setTimeout(function() {
		$("#saved").fadeOut();
	}, 3500);
});
-->
</script><?php
}
?>
<form>
	<fieldset>
		<legend>My Credentials</legend>
		<p class="inliner"><label>Name:</label> <input type="text" style="width: 150px" size="20" value="<?php echo htmlentities($_SESSION["username"]); ?>" disabled="disabled" /></p>
		<p class="inliner"><label>Password:</label> <span>Hidden</span></p>
		<p class="inliner"><label>Rights:</label> <span class="myrights"><?php
		switch($_SESSION["rights"]) {
			case 4:
				echo "Deployer";
				break;
			case 3:
				echo "Admin";
				break;
			case 2:
				echo "Webmaster";
				break;
			case 1:
				echo "Author";
				break;
		}
		?></span></p>
	</fieldset>
</form>
<?php

if(isset($_GET["error"])) {
?><div class="notice_box"><strong>Error</strong><?php
	switch($_GET["error"]) {
		case 'empty':
			?><p>All fields must not be blank.</p><?php
			break;
		case 'confirm':
			?><p>The two password fields must match.</p><?php
			break;
		case 'exists':
			?><p>The username you have chosen already exists.</p><?php
			break;
	}
?></div><?php
}

?>
<form id="form2" method="post" action="default.php?action=changeuser">
	<fieldset>
		<legend>Change My Information</legend>
		<p class="inliner"><label>Username:</label> <input name="newname" type="text" style="width: 150px" size="20" value="<?php echo htmlentities($_SESSION["username"]); ?>" /></p>
		<p class="inliner"><label>Password:</label> <input name="newpassword" type="password" style="width: 150px" size="20" /></p>
		<p class="inliner"><label>Confirm:</label> <input name="confpassword" type="password" style="width: 150px" size="20" /></p>
		<p class="buttons"><input type="submit" value="Change" class="submit" /></p>
	</fieldset>
</form>