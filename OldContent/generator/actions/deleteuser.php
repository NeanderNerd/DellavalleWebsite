<?php

// Saves current user settings

if(!$db->hasPermission(3))
	die("Unauthorized.");

$username = $_REQUEST['user'];

if(empty($username) || $username == $_SESSION["username"]) {
	die("Bad request.");
} elseif($db->getUserType($username) == false) {
	redirect("default.php?page=settings&view=users&error=missing");
} else {
	
	$db->deleteUser($username);
	redirect("default.php?page=settings&view=users");
	
}
