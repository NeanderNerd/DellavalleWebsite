<?php
if(!$db->hasPermission(1))
	die('Unauthorized.');
if(empty($doc))
	exit;

// Saves updated page contents.

if(isset($_SESSION['userdomain'])) {
	$pdoc = $db->getLocalData($_REQUEST['doc']);
	if(empty($pdoc["name"]) || $pdoc['name'] != $_SESSION['username'])
		die('Unauthorized Access.');
}

$return_page = isset($_REQUEST['return'])?$_REQUEST['return']:'';
$url_append = empty($return_page) ? "" : "&return=$return_page";

if(isset($_REQUEST['myEditorCode']))
	$myEditorCode = $_REQUEST['myEditorCode'];
if(!$db->docExists($doc))
	$db->addKey($doc);
$db->setContent($doc, $myEditorCode);
redirect("default.php?page=pages&view=edit&doc=" . urlencode($_REQUEST["doc"]) . "&saved$url_append");
