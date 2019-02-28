<?php
if(!$db->hasPermission(3))
	die('Unauthorized.');

if(isset($_GET["error"])) {
?><div class="notice_box"><strong>Error</strong><?php
	switch($_GET["error"]) {
		case 'empty':
			$message = USER_EMPTY;
			break;
		case 'exists':
			$message = PAGE_EXISTS; // Generic for "name"
			break;
		case 'missing':
			$message = USER_MISSING;
			break;
	}
	?><p><?php echo $message; ?></p><?php
?></div><?php
}

$aKeys = $db->getAllUsers();
if(!empty($aKeys)) {
	?>
	<p class="toolbar inliner">
		<span>Actions:</span> <a class="button colorbox" href="/generator/ajax/createuser.php">Create User</a>
	</p>
	<table class="dialog" id="listing">
	<tr>
		<th width="60%">Username</th>
		<th width="20%">Type</th>
		<th class="icon_col">Delete</th>
		<th class="block_col">Actions</th>
	</tr>
	<?php
	foreach( $aKeys as $tempstring ) {
		if($tempstring["type"] == "deployer" && !$db->hasPermission(4))
			continue;
		?>
		<tr>
			<td><?php echo htmlentities($tempstring["username"]); ?></td>
			<td><?php
			switch($tempstring["type"]) {
				case "admin":
					echo "Admin";
					break;
				case "deployer":
					echo "Deployer";
					break;
				case "webmaster":
					echo "Webmaster";
					break;
			}
			?></td>
			<td class="icon_col">
				<?php if($tempstring["type"] != "deployer" && $tempstring["username"] != $_SESSION["username"]) { ?>
				<a href="default.php?page=settings&amp;view=deleteuser&amp;user=<?php echo urlencode($tempstring["username"]); ?>"><img src="/generator/images/cancel.png" alt="" title="Delete" /></a>
				<?php } else {echo "-";} ?>
			</td>
			<td class="block_col link_do">
				<?php
				if(!($tempstring["type"] == "deployer" && !$db->hasPermission(4)) && $tempstring["username"] != $_SESSION["username"]) { ?>
				<a href="default.php?action=impersonate&amp;user=<?php echo urlencode($tempstring["username"]); ?>">Impersonate</a>
				<?php } else { echo "-"; } ?>
			</td>
		</tr>
		<?php
	}
	?></table>
<?php
} else {
	?>
	<div class="emptyset">
		No users exist in the system.<br />
		<a href="default.php?page=settings&amp;view=createuser">Create one now</a>
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
