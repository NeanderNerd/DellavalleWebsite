<?php

// Saves current user settings

if(!$db->hasPermission(3))
	die("Unauthorized.");

$doc = $_REQUEST['doc'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if(empty($password) || empty($username)) {
	redirect("default.php?page=pages&error=userempty");
} else {
	
	$db->setLocalUser($doc, $username, $password);
	redirect("default.php?page=pages");
	
}

