<?php


function displayContent( $get ) { // Refactored
	global $db, $gname;
	
	if(!isset($_SERVER['REQUEST_URI']))
		$return_page =	($_SERVER['HTTPS']=='on'?'https':'http') .
						'://' .
						$_SERVER['HTTP_HOST'] .
						$_SERVER['PHP_SELF'];
	else
		$return_page = urlencode($_SERVER['REQUEST_URI']);
    $content = "";
	$doc_unsafe = getPageName();
    $document =  urlencode($doc_unsafe);
	
	$sEditorPath = "/generator/default.php?page=pages&view=edit&doc=$document&return=$return_page";
    
	if(!defined('SEED_JS')) {
		define('SEED_JS', true);
		$content .= <<<SCRIPT
<script type="text/javascript">
<!--
	if( ( navigator.userAgent.indexOf( "MSIE" ) > -1 ) ) {
		document.onkeypress = ieKeyPress;
	} else {
		document.captureEvents( Event.keypress );
		document.onkeypress = function( event ) {
			if( (event.which == 121 || event.which == 25) && (event.ctrlKey == true) ) {
				psredirect();
				return false;
			}
		}
	}
	function ieKeyPress() {
		if( window.event.keyCode == 25 ) {
			psredirect();
		}
	}
	function psredirect() {
		document.location = '$sEditorPath';
	}
-->
</script>
SCRIPT;
	}
	
    $sContent = $db->getContent( $get );
	
    if((empty($sContent) && !is_string($sContent)) || $sContent === false)
        $content .= ERR_SEED_NO_CONTENT;
	else
		$content .= $sContent;
	
	if($doc_unsafe == $get && empty($gname))
		$content .= $db->getSetting('poweredBy');
	unset($gname);

    return $content;
}

function getlost() { // Refactored
    header('HTTP/1.0 401 Unauthorized');
    die("<div align=center>Unauthorized access.</div>");
}

$gname = '';
function getPageName($name='') { // Refactored
	global $gname;
	if(!empty($name)) {
		$gname = $name;
		return $name;
	}
	if(empty($_GET["content"])) {
		$page = $_SERVER["SCRIPT_NAME"];
		if(substr($page, 0, 1) == '/')
			$page = substr($page, 1);
	} else
		$page = $_GET["content"];
	return $page;
}

function list_directory($dir) {
    $file_list = "";
    $stack[] = $dir;
    while( $stack ) {
        $current_dir = array_pop( $stack );
        if( $dh = @opendir( $current_dir ) ) {
            while( ( $file = @readdir( $dh ) ) !== false ) {
                if( $file !== "." AND $file !== ".." AND substr($file,-3) == "zip" AND substr_count($file, "backup")!=0 ) {
                    $current_file = "$current_dir/$file";
                    if( is_file( $current_file ) )
                        $file_list[] = $file;
                }
            }
        }
    }
    return $file_list;
}

/* 
 * This function will display content without power by 
 * image and without javascript
 */
function displayContentSub( $get ) {
	global $db;
	
    $content = $db->getContent( $get );
    if(empty($content)) 
        $content = ERR_SEED_NO_SIDECAR;
    return $content;  
}


// Settings

// Refactored below this point.

function getCheckboxValue($value) {return 'value="on" ' . (($value == "true") ? 'checked="checked"' : '');}

function setCheckboxValue($name) {
	global $db;
	if(isset($_REQUEST[$name]))
		$value = $_REQUEST[$name];
	
	$db->setSetting($name, ($value == "on") ? 'true' : 'false');
	return $name;
}

function getLineBreak($name) {
	global $db;
	
    if($name == "useDIV" && $db->getSetting("useDIV") == "true" && $db->getSetting("useBR") == "false") {
		return 'checked="checked"';	
    } elseif($name == "useBR" && $db->getSetting("useDIV") == "false" && $db->getSetting("useBR") == "true") {
		return 'checked="checked"';
    } elseif($name == "useP" && $db->getSetting("useDIV") == "false" && $db->getSetting("useBR") == "false") {
		return 'checked="checked"';	
    } else {
		return "";	
    }
}

function setLineBreak() {
	global $db;
	switch($_REQUEST["useLineBreak"]) {
		case 'useDIV':
			$db->setSetting("useDIV", "true");
			$db->setSetting("useBR", "false");
			break;
		case 'useBR':
			$db->setSetting("useDIV", "false");
			$db->setSetting("useBR", "true");  
			break;
		case 'useP':
			$db->setSetting("useDIV", "false");
			$db->setSetting("useBR", "false");
			break;
    }
}

