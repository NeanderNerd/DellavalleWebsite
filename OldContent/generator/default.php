<?php
session_start();
ob_start();

$return_page = isset($_REQUEST['return'])?$_REQUEST['return']:'';

include('./generator.php');
/*
if(empty($action) && !empty($doc)) {
	$sRedirectTo = "/generator/default.php?return=".urlencode($return_page)."&doc=$doc";
	header("Location: $sRedirectTo");
	exit;
}
*/
function redirect($url) {
	header("Location: $url");
}

$preprocess_actions = array(
	'backup'=>true,
	'changeuser'=>true,
	'create'=>true,
	'createuser'=>true,
	'delbackups'=>true,
	'delete'=>true,
	'deletebackup'=>true,
	'deleteuser'=>true,
	'delpages'=>true,
	'dropperm'=>true,
	'edit'=>true,
	'impersonate'=>true,
	'logout'=>true,
	'rename'=>true,
	'restore'=>true,
	'savesettings'=>true,
	'updateperm'=>true
);
if(isset($preprocess_actions[$action])) {
	require("./actions/$action.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
	<title>Content Administration V5</title>
	<link rel="stylesheet" href="includes/frame.css" type="text/css" />
	<link rel="stylesheet" href="includes/style.css" type="text/css" />
	<script type="text/javascript" src="includes/jquery/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="includes/jquery/js/jquery-ui-1.8.7.custom.min.js"></script>
	<script type="text/javascript" src="includes/colorbox/jquery.colorbox-min.js"></script>
	<?php
	editor::head();
	?>
	<script type="text/javascript">
	<!--
	$(document).ready(function() {
		$(".colorbox").colorbox({scrolling:false,onComplete:$.colorbox.resize});
	});
	-->
	</script>
</head>
<body class="med gg0g sans-serif">
<!--[if lt IE 7]>
<div style="background:#b00;color:#fff;padding:100px;margin:40px;border:15px dotted #000;">
Your browser is too old to properly use this control panel. Upgrade to a modern browser like <a href="http://getfirefox.com/">Mozilla Firefox</a>, <a href="http://google.com/chrome/">Google Chrome</a>, or <a href="http://opera.com/">Opera</a>.
</div>
<![endif]--> 
<?php
// Check that the user is logged in.
if(!$db->hasPermission(1)) {
	require("templates/login.php");
} else {?>
<div id="header"<?php if($db->getSetting("showLogo") != "true") {echo ' style="background-image:none"';} ?>>
	<strong>PHPSeed</strong>
	<span>
		<?php echo htmlentities($_SESSION['username']); ?> | <a href="?action=logout">Log Out</a>
	</span>
</div>
<div id="container">
	<div id="tab_bar">
		<?php
		function getTabAtts($page) {
			$p = empty($_REQUEST["page"])?"pages":$_REQUEST["page"];
			return ($p == $page)?' class="active"':'';
		}
		?>
		<ul>
			<li<?php echo getTabAtts("pages"); ?>><a href="default.php?page=pages">Pages</a></li>
			<?php if($db->hasPermission(3)) { ?>
				<li<?php echo getTabAtts("settings"); ?>><a href="default.php?page=settings">Settings</a></li>
				<li<?php echo getTabAtts("backup"); ?>><a href="default.php?page=backup">Backup</a></li>
			<?php } ?>
		</ul>
	</div>
	<?php
	$menus = array(
		"pages"=>array(
			'List Pages'=>''
		),
		"settings"=>array(
			'My Account'=>''
		)
	);
	if($db->hasPermission(2)) {
		$menus["pages"]["Create New Page"] = "create";
	}
	if($db->hasPermission(3)) {
		$menus["backup"] = array(
			'Backups'=>'',
			'Create Backup'=>'create'
		);
	}
	if($db->hasPermission(3))
		$menus["settings"]["Users"] = 'users';
	if($db->hasPermission(4)) {
		$menus["settings"]["Editor Settings"] = 'editor';
		$menus["settings"]["Toolbar Editor"] = 'toolbareditor';
		$menus["settings"]["Branding"] = 'poweredby';
	}
	$page = isset($_REQUEST["page"])?$_REQUEST["page"]:'pages';
	$view = isset($_REQUEST["view"])?$_REQUEST["view"]:'';
	if(isset($menus[$page]) && count($menus[$page]) - 1) {
	?>
	<div id="tab_menu">
		<div id="tab_wrap"><?php
		$c = 0;
		foreach($menus[$page] as $title=>$v) {
			if($view != $v) {
				if($v != "create" || $page != "pages") {
					?><a class="subtab<?php if($c==0) {echo " first";} ?>" href="default.php?page=<?php echo $page; ?>&amp;view=<?php echo $v; ?>"><?php echo $title; ?></a><?php
				} else {
					?><a class="subtab colorbox<?php if($c==0) {echo " first";} ?>" href="/generator/ajax/createpage.php"><?php echo $title; ?></a><?php
				}
			} else {
				?><span<?php if($c==0) {echo " class=\"first\"";} ?>><?php echo $title; ?></span><?php
			}
			$c++;
		}
		?></div>
	</div>
	<?php
	}
	?>
	<div id="page_view">
		<?php
		
		$view = str_replace("/","", $view);
		$view = str_replace(".","", $view);
		
		$view = empty($view)?'default.php':"$view.php";
		$page_to_load = PATH_PREFIX . "templates/$page/$view";
		if(file_exists($page_to_load))
			require($page_to_load);
		else {
			?>
			<h2>Well isn't this embarassing.</h2>
			<p>Looks like we couldn't find the page you were hoping for. Report what you were doing in the <a href="http://mediacarbon.com/Boards/">PHPSeeds Forums</a>.</p>
			<?php
		}
		
		?>
	</div>
</div>
<?php
}
?>
</body>
</html>
<?php
ob_end_flush();
