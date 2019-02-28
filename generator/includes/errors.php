<?php

//////////////////////////////
// Error Message Constants
//////////////////////////////

define('ERR_NO_PHP5', 'This version of PHPSeed requires that your server is running PHP version 5 or better.');

// ASSET LOADER

define('ERR_AL_NO_ASSETS', 'The assets directory could not be found.');
define('ERR_AL_CANNOT_CREATE','We tried creating the database, but were unable to. Your server may not have proper permissions on the /generator/assets directory. Modify the permissions to allow write access (or "chmod" the /generator/ directory to 777).');

// Non-PDO
define('ERR_AL_NO_SQLITE', 'The SQLite functions are missing from your PHP installation.');
define('ERR_AL_NO_JSON', 'The JSON encoding functions are missing from your PHP installation. Perhaps you aren\'t running PHP5?');

// PDO
define('ERR_PDOAL_NO_PDO', 'Your installation of PHP was not compiled with PDO SQLite drivers. These are necessary to run PHPSeed.');
define('ERR_PDOAL_NOT_LOADED', 'Sorry, your installation isn\'t ready yet. You need to make one tiny modification to your php.ini file: uncomment these lines:<br /><br />extension=php_pdo.dll<br />extension=php_sqlite.dll<br /><br />Once you\'ve done this, everything should be running nice and smooth.');

// JSON
define('ERR_JSON_PERMISSIONS', 'We were unable to access the data file. Ensure that permissions to it have been set to at least 644.');

// AUTHORIZATION

define('ERR_AUTH_BAD_UNPW', 'Access Denied');
define('ERR_AUTH_NOT_FOUND', 'No requested document.');

// SEEDS

define('ERR_SEED_NO_CONTENT', '<p style="text-align:center">No entry exists in the database for this page. Press control-Y on your keyboard to log-in and begin.</p>');
define('ERR_SEED_NO_SIDECAR', '<p style="text-align:center">No entry exists for this secondary page area.</p>');

////////////////////////////////////
// Inline errors
////////////////////////////////////

define('DOC_UNAVAILABLE', 'The document you are trying to modify is unavailable.');
define('EMPTY_PAGENAME', 'The page name you\'ve chosen is empty.');
define('PAGE_EXISTS', 'The name you\'ve chosen already exists.'); // Used in templates/settings/users.php too
define('CREATE_EMPTY', 'You need to enter a page name.');
define('USER_EMPTY', 'You need to enter a username and password.');
define('USER_MISSING', 'The user you tried to delete is unavailable.');
