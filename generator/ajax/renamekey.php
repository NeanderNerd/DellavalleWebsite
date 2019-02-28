<?php
session_start();
ob_start();

$ajax = isset($_GET['ajax']);

include('../generator.php');

if(!$db->hasPermission(2))
	die('Unauthorized.');

$return_page = isset($_REQUEST['return'])?$_REQUEST['return']:'';
$url_append = empty($return_page) ? "" : "&return=$return_page";

if(empty($_GET["doc"])) {
	if($ajax)
		json_die(DOC_UNAVAILABLE);
	else {
		header("Location: /generator/default.php?page=pages&error=docempty$url_append");
		exit;
	}
}

$doc = $_GET["doc"];

if(!$db->docExists($doc)) {
	if($ajax)
		json_die(DOC_UNAVAILABLE);
	else {
		header("Location: /generator/default.php?page=pages&error=docmissing$url_append");
		exit;
	}
}


if(empty($_REQUEST["pagename"])) {
	if($ajax)
		json_die(EMPTY_PAGENAME);
	else {
		header("Location: /generator/default.php?page=pages&error=emptypagename$url_append");
		exit;
	}
}

$pagename = $_REQUEST["pagename"];

if($db->docExists($pagename)) {
	if($ajax)
		json_die(PAGE_EXISTS);
	else {
		header("Location: /generator/default.php?page=pages&error=pageexists$url_append");
		exit;
	}
}

if($db->docExists($doc))
	$db->renameKey($doc, $pagename);


if($ajax)
	echo json_encode(array(
		"doc"=>$pagename
	));
else
	header("Location: /generator/default.php?page=pages&doc=$pagename&action=edit");
