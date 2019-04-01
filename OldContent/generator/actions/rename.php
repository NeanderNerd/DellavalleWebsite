<?php

// Renames a page.

if(!$db->hasPermission(2))
	die('Unauthorized.');

$newdoc = $_REQUEST['newdoc'];
$db->renameKey($doc, $newdoc);
redirect("default.php?action=edit&doc=" . urlencode($newdoc));