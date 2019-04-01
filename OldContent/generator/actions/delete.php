<?php

// Deletes pages.

if(!$db->hasPermission(2))
	die('Unauthorized.');

$db->deleteKey($doc);
redirect("default.php?page=pages&deleted");