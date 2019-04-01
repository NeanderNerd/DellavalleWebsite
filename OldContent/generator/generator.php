<?php

// PHPSeeds
// version 5.1.4


/*
// Turn on error reporting
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
/**/

$action = (!empty($_REQUEST['action'])) ? $_REQUEST['action'] : '';
$doc = (!empty($_REQUEST['doc'])) ? $_REQUEST['doc'] : '';

if(!defined('PATH_PREFIX')) {
	if(isset($_SERVER['DOCUMENT_ROOT']) && !isset($_SERVER['URL']) && $_SERVER["SERVER_ADMIN"] != "support@supportwebsite.com") {
		define('PATH_PREFIX', $_SERVER['DOCUMENT_ROOT'] . '/generator/');
	} else {
		$r = $_SERVER['SCRIPT_FILENAME'];
		$ps = $_SERVER['PHP_SELF'];
		define('PATH_PREFIX',substr($r,0,-1*strlen($ps)).'/generator/');
	}
}

// Load up the constants
require(PATH_PREFIX . 'constants.php');
require(PATH_PREFIX . 'includes/errors.php');

// Properly handle magic quotes
if(!IGNORE_MAGIC_QUOTES) {
	if((function_exists("get_magic_quotes_gpc") &&
		get_magic_quotes_gpc()) ||
	   (ini_get('magic_quotes_sybase') &&
		strtolower(ini_get('magic_quotes_sybase')) != "off")){
		function mqprocess(&$root) {
			foreach($root as $k=>$v) {
				if(is_array($v))
					$root[$k] = mqprocess($v);
				else
					$root[$k] = stripslashes($v);
			}
			return $root;
		}
		mqprocess($_GET);
		mqprocess($_POST);
		mqprocess($_REQUEST);
		mqprocess($_COOKIE);
	}
}

function json_die($data) {
	// Serializes information to JSON and then exits.
	die(json_encode(array(
		"error"=>$data
	)));
}


// Check if there's PHP5
if(!function_exists('file_put_contents')) {
	echo ERR_NO_PHP5;
} else {
	
	switch(USE_ASSET_LOADER) {
		case 'sqlite':
			if(!class_exists('PDO') || file_exists(PATH_PREFIX . 'pdo.override')) {
				require(PATH_PREFIX . 'includes/sql.asset_loader.php');
			} else {
				ob_start();
				phpinfo();
				$test = ob_get_clean();
				if(strpos($test, '--disable-pdo') !== false || strpos($test, 'PDO') === false)
					require(PATH_PREFIX . 'includes/sql.asset_loader.php');
				else {
					try {
						require(PATH_PREFIX . 'includes/pdo.asset_loader.php');
						$db = new asset_loader();
					} catch (Exception $e) {
						var_dump($e);
						if($e->getMessage() != "could not find driver")
							require(PATH_PREFIX . 'includes/sql.asset_loader.php');
					}
				}
			}
			break;
		default:
			// Load up the correct asset loader
			require(PATH_PREFIX . 'includes/json.asset_loader.php');
	}

	if(!isset($db))
		$db = new asset_loader();
	
	require(PATH_PREFIX . 'editors/innova.php');
	
	if($db->fail === false) {
		
		require(PATH_PREFIX . 'includes/functions.php');
		
		// Do we need to load up the settings for the first time?
		$settingtest = $db->getSetting('setup');
		if(!$settingtest) {
			require(PATH_PREFIX . 'includes/setup_settings.php');
			require(PATH_PREFIX . 'includes/setup_testdata.php');
		}

		if( strpos( $_SERVER['PHP_SELF'], 'generator.php' ) !== false ) {
			echo ERR_AUTH_BAD_UNPW;
			$action = '';
		}
		
		if( $action == "login" ) {
			session_start();

			$name = $_REQUEST["name"]; // Username
			$passwd = $_REQUEST["passwd"]; // Password
			
			$requested_action = $_REQUEST["requested_action"];
			$requested_doc = $_REQUEST["requested_doc"];
			
			// requested doc checks!
			$sRequest = "";
			switch($requested_action) {
				case 'edit':
					$sRequest = "?page=pages&view=edit&doc=$requested_doc";
					if(isset($_REQUEST["return"])) {
						$return = urlencode($_REQUEST["return"]);
						$sRequest .= "&return=$return";
					}
					break;
				//case '':
				default:
					$sRequest = "?doc=$requested_doc";
					if(!empty($_REQUEST["page"]))
						$sRequest .= "&page=" . urlencode($_REQUEST["page"]);
					if(!empty($_REQUEST["view"]))
						$sRequest .= "&view=" . urlencode($_REQUEST["view"]);
					if(!empty($_REQUEST["return"]))
						$sRequest .= "&return=" . urlencode($_REQUEST["return"]);
					break;
			}
			
			
			/*
			Rights Chart:
			0 - Guest
			1 - Author
			2 - Webmaster
			3 - Admin
			4 - Deployer
			*/
			
			$formalUser = $db->getUser($name, $passwd);
			if($formalUser)
				$formalUser = $db->getUserType($formalUser);
			
			$failed = false;
			if(!empty($formalUser)) {
				$_SESSION['username'] = $name;
				$_SESSION['loggedin'] = true;
				$_SESSION['userdomain'] = null;
				switch($formalUser) {
					case 'deployer':
						$_SESSION['rights'] = 4;
						break;
					case 'admin':
						$_SESSION['rights'] = 3;
						break;
					case 'webmaster':
						$_SESSION['rights'] = 2;
						break;
				}
			} else {
				$passwd = trim($passwd);
				$passwd = sha1($passwd);
				
				$aLocalLogin = $db->getLocalData($requested_doc);
				
				if($db->findAuthor($name, $passwd)) {
					$_SESSION['username'] = $name;
					$_SESSION['password'] = $passwd;
					$_SESSION['userdomain'] = true;
					$_SESSION['rights'] = 1;
					$_SESSION['loggedin'] = true;
				} else {
					session_destroy();
					$failed = true;
					//getlost();
				}
			}
			header("Location: default.php$sRequest" . ($failed?'&failed=true':''));
		}

		$sid = session_id();
		if(!empty($sid)) {
			// Perform session maintenance.

			if(isset($_SESSION['loggedin'])) {
				define('USER_TYPE', isset($_SESSION['usertype'])?$_SESSION['usertype']:'');
				define('USER_DOMAIN', isset($_SESSION['userdomain'])?$_SESSION['userdomain']:null);
				define('RIGHTS', isset($_SESSION['rights'])?$_SESSION['rights']:'');
			} else {
				define('USER_TYPE', 'guest');
				define('USER_DOMAIN', '');
				define('RIGHTS', 0);
			}
		}
		
	} else {
		function getpagename($blank) {return false;}
		function displaycontent() {return false;}
	}
}
