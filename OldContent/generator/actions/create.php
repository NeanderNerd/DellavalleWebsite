<?php

// Creates new pages.

if(!$db->hasPermission(2))
	die('Unauthorized.');

$newpage = $_REQUEST['newpage'];
if(empty($newpage) || $newpage == 'true') {
	redirect("default.php?page=pages&error=createempty");
	exit;
}
$db->addKey($newpage);
redirect("default.php?page=pages&view=edit&doc=" . urlencode($newpage));