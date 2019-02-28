<?php

// Saves current user settings

if(!$db->hasPermission(3))
	die("Unauthorized.");

$user = $_REQUEST['user'];
$type = $db->getUserType($user);
$rights = array(
	"deployer"=>4,
	"admin"=>3,
	"webmaster"=>2
);

if(!$db->hasPermission($rights[$type]))
	die("Unauthorized.");

$_SESSION["username"] = $user;
$_SESSION["rights"] = $rights[$type];

redirect("default.php");