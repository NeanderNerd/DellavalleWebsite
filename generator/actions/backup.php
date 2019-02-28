<?php
if(!$db->hasPermission(3))
	die('Unauthorized.');

include('./pclzip.lib.php');

if(!$db->hasPermission(3))
	die('Unauthorized.');
$archive = new PclZip('assets/backup_'.date("dFY-h-i-sA").'.zip');
$v_list = $archive->create(PS_SQL_FILE, PCLZIP_OPT_REMOVE_ALL_PATH);
if($v_list == 0)
	die("Error : ".$archive->errorInfo(true));

header("Location: default.php?page=backup");
