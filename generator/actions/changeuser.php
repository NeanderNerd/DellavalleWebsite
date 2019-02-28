<?php

// Saves current user settings

if(!$db->hasPermission(2))
	die("Unauthorized.");

$newname = $_REQUEST['newname'];
$newpassword = $_REQUEST['newpassword'];
$confpassword = $_REQUEST['confpassword'];

if($newpassword != $confpassword) {
	redirect("default.php?page=settings&error=confirm");
} elseif(empty($newpassword) || empty($newname)) {
	redirect("default.php?page=settings&error=empty");
} elseif($newname != $_SESSION["username"] && $db->getUserType($newname) !== false) {
	redirect("default.php?page=settings&error=exists");
} else {
	
	$db->updateUser($_SESSION['username'], $newname, $newpassword);
	$_SESSION["username"] = $newname;
	redirect("default.php?page=settings&changed");
	
}
