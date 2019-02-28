<?php
session_start();
ob_start();

include('../generator.php');

if(!$db->hasPermission(4))
	die('Unauthorized.');

if(empty($_REQUEST["buttons"]) || empty($_REQUEST["id"])) {
	die("Missing parameters");
}

$id = $_REQUEST["id"];
$buttons = $_REQUEST["buttons"];

$db->updateButtons($id, $buttons);
