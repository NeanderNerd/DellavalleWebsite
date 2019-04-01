<?php

// Saves settings.

if(!$db->hasPermission(4))
	die('Unauthorized.');

if(empty($_REQUEST["type"]))
	die('Invalid Request');

switch($_REQUEST["type"]) {
	case "poweredby":
		$db->setSetting("poweredBy", $_REQUEST['poweredBy']);
		redirect("default.php?page=settings&view=poweredby&saved");
		break;
	case "internal":
		setCheckboxValue("showLogo");
		redirect("default.php?page=settings&view=poweredby&saved");
		break;
	default:
		editor::save_settings();
		$db->setSetting("editorLanguage", $_REQUEST['editorLanguage']);
		redirect("default.php?page=settings&view=editor&saved");
}

