<?php
session_start();
ob_start();

include('../generator.php');

if(!$db->hasPermission(3))
	die("Unauthorized.");
?>
<form action="default.php?action=createuser" method="post">
	<h2>Create User</h2>
	
	<label for="username">Username:</label>
	<input type="text" name="username" value="" style="width:150px" size="20" />
	
	<label for="password">Password:</label>
	<input type="password" name="password" value="" style="width:150px" size="20" />
	
	<fieldset style="min-width:200px;">
		<legend>User Role</legend>
		
		<p class="inliner">
			<label for="role">Role:</label>
			<select name="role">
				<option value="admin">Admin</option>
				<option value="webmaster">Webmaster</option>
			</select>
		</p>
		<?php if(isset($_GET["choose"])) { ?>
		<table id="compare_roles" class="rolecompare" cellspacing="0">
			<tr>
				<th>Permission</th>
				<th>Admin</th>
				<th>Webmaster</th>
			</tr>
			<tr>
				<td>Manage content</td>
				<td class="f_c"><img src="/generator/images/accept.png" /></td>
				<td class="f_c"><img src="/generator/images/accept.png" /></td>
			</tr>
			<tr>
				<td>Manage backups</td>
				<td class="f_c"><img src="/generator/images/accept.png" /></td>
				<td></td>
			</tr>
			<tr>
				<td>Edit users</td>
				<td class="f_c"><img src="/generator/images/accept.png" /></td>
				<td></td>
			</tr>
			<tr>
				<td>Edit authors</td>
				<td class="f_c"><img src="/generator/images/accept.png" /></td>
				<td></td>
			</tr>
		</table>
		<?php } else { ?>
		<small><a href="#" onclick="$.colorbox({href:'/generator/ajax/createuser.php?choose',onComplete:$.colorbox.resize});return false;">Help me choose</a></small>
		<?php } ?>
		
	</fieldset>
	
	<input type="submit" class="submit" value="Create" />
</form>