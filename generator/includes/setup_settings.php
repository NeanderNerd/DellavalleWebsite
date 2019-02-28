<?php

/**
 * Setup default settings
 */

$settings = <<<SETTINGS
editorHeight|600px
editorWidth|100%
useTagSelector|true
warnOnUnsaved|true
showLogo|true
editorLanguage|en-US
useDIV|true
useBR|false
poweredBy|<p align="center"><a title="You can easily make this a point to YOUR company OR hide it all together." href="http://contentseed.com/"><img style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px" height="17" alt="You can easily make this a point to YOUR company OR hide it all together." src="http://contentseed.com/images/poweredby.gif" width="135" /></a></p>
videoTurorialsPath|http://contentseed.com/editor-videos
editorCSS|test/images/style.css
setup|true
SETTINGS;

$settings = explode("\n", $settings);
foreach($settings as $s) {
	$setting = explode('|', $s);
	$db->setSetting($setting[0], $setting[1]);
}
/*
foreach(editor::$buttons as $button) {
	$db->setSetting(trim($button), 'true');
}
*/
