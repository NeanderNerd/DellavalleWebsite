<?php

// Constants

define("USE_ASSET_LOADER", "json");
define("SHOW_SHOWOPTIONS", false);

//define('PS_ASSETS', PATH_PREFIX . 'content/assets.php');
define('PS_SQL_REL', 'assets/');
define('PS_SQL_NAME', 'db.' . (USE_ASSET_LOADER == "sqlite"?"sqlite":"php"));
define('PS_SQL_FILE', PATH_PREFIX . PS_SQL_REL . PS_SQL_NAME);
define('IGNORE_MAGIC_QUOTES', false);
