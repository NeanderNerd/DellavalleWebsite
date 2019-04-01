<?php

/**
 * Setup default settings
 */

$files = array(
	array(
		'doc' => 'generator/test/default.php',
		'username' => '',
		'password' => '',
		'file' => 'test_default'
	),
	array(
		'doc' => 'generator/test/author.php',
		'username' => 'author',
		'password' => 'author',
		'file' => 'test_author'
	),
	array(
		'doc' => 'generator/test/multiple.php',
		'username' => '',
		'password' => '',
		'file' => 'test_multiple'
	),
	array(
		'doc' => 'generator/test/side.htm',
		'username' => '',
		'password' => '',
		'file' => 'test_side'
	),
	array(
		'doc' => 'generator/test/qstring.php',
		'username' => '',
		'password' => '',
		'file' => 'test_qstring'
	),
	array(
		'doc' => 'generator/test/PHP-AS-HTM.htm',
		'username' => '',
		'password' => '',
		'file' => 'test_htm'
	),
	array(
		'doc' => 'generator/test/PHP-AS-HTML.html',
		'username' => '',
		'password' => '',
		'file' => 'test_html'
	)
);

foreach($files as $f) {
	$contents = file_get_contents(PATH_PREFIX . 'includes/default/' . $f['file']);
	$db->setLocalData($f['doc'], $f['username'], $f['password'], $contents);
}
