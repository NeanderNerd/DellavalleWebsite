<h1 class="replace_text rt_page_listing">Page Listing</h1>
<?php

// List Pages

function toolbar() {
	global $can_delete;
	if(!$can_delete) return;
	?>
	<p class="toolbar inliner">
		<span>Actions:</span> <input type="submit" value="Delete Selected" />
	</p>
	<?php
}

$limited_account = isset($_SESSION['userdomain']);
$can_add_author = $db->hasPermission(3);
$can_delete = $db->hasPermission(2);

if(isset($_GET["error"])) {
?><div class="notice_box"><strong>Error</strong><?php
	switch($_GET["error"]) {
		case 'createempty':
			$message = CREATE_EMPTY;
			break;
		case 'userempty':
			$message = USER_EMPTY;
			break;
		case 'docempty':
		case 'docmissing':
			$message = DOC_UNAVAILABLE;
			break;
		case 'emptypagename':
			$message = EMPTY_PAGENAME;
			break;
		case 'pageexists':
			$message = PAGE_EXISTS;
			break;
	}
	?><p><?php echo $message; ?></p><?php
?></div><?php
} elseif(isset($_GET["deleted"])) {
?><div class="notice_box"><strong>Deleted</strong></div><?php
}
?>
<form action="default.php?action=delpages" method="post">
<div id="ws_wrap">
    <?php toolbar(); ?>
	<table id="listing">
		<thead>
		<tr>
			<?php if($can_delete) { ?>
			<th><input type="checkbox" id="selectall" /></th>
			<?php } ?>
			<th>Name</th>
			<?php if($can_add_author) { ?>
			<th class="f_c">Author</th>
			<?php } ?>
			<th class="block_col">Actions</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$keys = $db->getKeys();
		sort($keys);
		foreach($keys as $key_name) {
			$key = $db->getLocalData($key_name);
			$has_author = !empty($key["name"]);
			if($limited_account) {
				if(!$has_author) continue;
				if($key["name"] != $_SESSION["username"] ||
				   $key["password"] != $_SESSION["password"]) continue;
			}
		?>
		<tr>
			<?php if($can_delete) { ?>
			<td><input type="checkbox" name="sel[]" value="<?php echo urlencode($key_name); ?>" /></td>
			<?php } ?>
			<td width="100%" class="link_col"><a href="default.php?page=pages&view=edit&doc=<?php echo urlencode($key_name); ?>"><?php echo htmlentities($key["doc"]); ?></a></td>
			<?php if($can_add_author) { ?>
			<td class="block_col f_c">
				<?php
				if($has_author) {
					?><a href="/generator/ajax/authperm.php?doc=<?php echo urlencode($key_name); ?>" class="colorbox active_tag">Edit</a><?php
				} else {
					?><a href="/generator/ajax/authperm.php?doc=<?php echo urlencode($key_name); ?>" class="colorbox">Add</a><?php
				}
				?>
			</td>
			<?php } ?>
			<td class="block_col disdefault">
				<?php if($can_delete) { ?>
				<a href="default.php?action=delete&amp;doc=<?php echo urlencode($key["doc"]); ?>">Delete</a>
				<?php } else { echo "None"; } ?>
			</td>
		</tr>
		<?php
		}
		?>
		</tbody>
	</table>
    <?php toolbar(); ?>
</div>
</form>
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
