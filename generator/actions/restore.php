<?php
if(!$db->hasPermission(3))
	die('Unauthorized.');


include('./pclzip.lib.php');

// Restores a backup file.

if(!$db->hasPermission(3))
	die('Unauthorized.');

$db->close();
chown(PS_SQL_FILE, 'phpseeddaemon');
unlink(PS_SQL_FILE);
if(file_exists(PS_SQL_FILE))
	rename(PS_SQL_FILE, PS_SQL_FILE . '.old');

$backupfile = PATH_PREFIX . 'assets/'.$doc;
chmod($backupfile, 777);
chown($backupfile, 'phpseeddaemon');
$archive = new PclZip($backupfile);

//extract to a folder  
if ($archive->extract(PS_SQL_REL, '') == 0)
	die("Error : ".$archive->errorInfo(true));
else
	redirect("default.php?page=backup");