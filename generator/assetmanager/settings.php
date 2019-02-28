<?php

if(!defined('PATH_PREFIX')) {
	if(isset($_SERVER['DOCUMENT_ROOT'])) {
		define('PATH_PREFIX', $_SERVER['DOCUMENT_ROOT'] . '/generator/');
	} else {
		$r = $_SERVER['SCRIPT_FILENAME'];
		$ps = $_SERVER['PHP_SELF'];
		define('PATH_PREFIX',substr($r,0,-1*strlen($ps)).'\\generator\\');
	}
}

$bReturnAbsolute=false;

$sBaseVirtual0="/generator/assets";  //Assuming that the path is http://yourserver/Editor/assets/ ("Relative to Root" Path is required)

$sBase0=PATH_PREFIX . "assets"; //The real path
//$sBase0="/home/yourserver/web/Editor/assets"; //example for Unix server

$sName0="Assets";

$sBaseVirtual1="";
$sBase1="";
$sName1="";

$sBaseVirtual2="";
$sBase2="";
$sName2="";

$sBaseVirtual3="";
$sBase3="";
$sName3="";