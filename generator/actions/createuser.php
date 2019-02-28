<?php

// Creates new users.

if(!$db->hasPermission(3))
	die('Unauthorized.');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$role = $_REQUEST['role'];

if(empty($username) || empty($password) || empty($role)) {
	redirect("default.php?page=settings&view=users&error=empty");
} elseif($db->getUserType($newname) !== false) {
	redirect("default.php?page=settings&view=users&error=exists");
} elseif($role != "admin" && $role != "webmaster") {
	die("Bad role");
} else {
	
	$db->newUser($username, $password, $role);
	redirect("default.php?page=settings&view=users");
	
}
