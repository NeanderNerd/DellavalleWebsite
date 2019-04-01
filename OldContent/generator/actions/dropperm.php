<?php

// Saves current user settings

if(!$db->hasPermission(3))
	die("Unauthorized.");

$doc = $_REQUEST['doc'];

if(empty($doc)) {
	redirect("default.php?page=pages&error=docempty");
} else {
	
	$db->setLocalUser($doc, false, "");
	redirect("default.php?page=pages");
	
}

