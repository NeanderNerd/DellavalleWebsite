<?php

// Delete a selected list of pages

if(!$db->hasPermission(2))
	die('Unauthorized.');

if(isset($_POST["sel"])) {
	foreach($_POST["sel"] as $selection) {
		$db->deleteKey(urldecode($selection));
	}
}

header("Location: default.php?page=pages");
