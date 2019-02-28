<?php

// Delete a selected list of pages

if(!$db->hasPermission(3))
	die('Unauthorized.');

if(isset($_POST["sel"])) {
	foreach($_POST["sel"] as $selection) {
		$doc = str_replace("..", "", $selection);
		$doc = str_replace("/", "", $doc);

		unlink(PATH_PREFIX . "assets/".$doc);
	}
}

header("Location: default.php?page=backup");
