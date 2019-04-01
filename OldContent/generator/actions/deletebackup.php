<?php

// Deletes backups.

if(!$db->hasPermission(3))
	die('Unauthorized.');

$doc = str_replace("..", "", $doc);
$doc = str_replace("/", "", $doc);

unlink(PATH_PREFIX . "assets/".$doc);
redirect("default.php?page=backup");