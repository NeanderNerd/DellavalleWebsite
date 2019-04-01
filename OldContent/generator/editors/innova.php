<?php

/*
Innova - Editor Driver
*/


class editor {
	public static $height = 0;
	public static $width = 0;
	public static $language = '';
	
	public static $buttons = array();
	
	public static function head() {
		global $editorLangauge;
		?>
		<script type="text/javascript" src="/generator/scripts/language/<?php echo editor::$language; ?>/editor_lang.js"></script>
		<script type="text/javascript" src="/generator/scripts/innovaeditor.js"></script>
		<?php
	}
	public static function save_settings() {
		global $db;
		setCheckboxValue("useTagSelector");
		setCheckboxValue("warnOnUnsaved");
		$db->setSetting("editorCSS", $_REQUEST['editorCSS']);
		$db->setSetting("editorTheme", $_REQUEST['editorTheme']);
		$db->setSetting("editorHeight", $_REQUEST['editorHeight']);
		$db->setSetting("editorWidth", $_REQUEST['editorWidth']);
		setLineBreak();
	}
	public static function display($sContent) {
		global $db;
		?>
	<textarea id="origEditorCode" style="display:none"><?php echo $sContent?></textarea>
	<textarea id="myEditorCode" name="myEditorCode" rows=4 cols=30><?php echo $sContent?></textarea>
		
		<script>
			var oEdit1 = new InnovaEditor("oEdit1");
			
			oEdit1.mode = "XHTMLBody";
			
			<?php if ($db->getSetting("editorCSS") != "") { ?>
			oEdit1.css="<?php echo trim($db->getSetting("editorCSS")); ?>";
			<?php } ?>
			
			
			oEdit1.tabs=[
				["tabHome","Home",["grpPage","grpEdit","grpFont","grpPara","grpStyle"]],
				["tabStyle2","Insert",["Insert","grpTables"]]
			];
			<?php
			function dragrow($key, $order="") {
				global $db;
				$buttons = $db->getButtons($key, $order);
				$c = 0;
				$out = "";
				foreach($buttons as $button) {
					if($order != "first" || $c > 0)
						$out .= ",";
					$out .= "\"$button\"";
					$c++;
				}
				return $out;
			}
			function genGroupOut($key) {
				$first = dragrow($key, "first");
				$second = dragrow($key, "second");
				return $first . ", \"BRK\" ". $second;
			}
			?>
			oEdit1.groups=[
				[
					"grpPage",
					"Page & View",
					[
						<?php echo genGroupOut("page");?>
					]
				],
				[
					"grpEdit",
					"Edit", 
					[
						<?php echo genGroupOut("edit");
						?>
					]
				],
				[
					"grpFont",
					"Font",
					[
						<?php echo genGroupOut("font");?>
					]
				],
				[
					"grpPara",
					"Paragraph",
					[
						<?php echo genGroupOut("paragraph");?>
					]
				],
				["grpStyle","",[<?php echo genGroupOut("style");?>]],
				["Insert","",[<?php echo genGroupOut("insert");?>]]
			];
			
			oEdit1.toolbarMode = 2;
			
			oEdit1.useTagSelector=<?php echo $db->getSetting("useTagSelector"); ?>;
			oEdit1.useDIV=<?php echo $db->getSetting("useDIV"); ?>;
			oEdit1.useBR=<?php echo $db->getSetting("useBR"); ?>;
			
			
			oEdit1.width="100%";
			oEdit1.height="<?php echo self::$height; ?>";

			oEdit1.cmdAssetManager = "modalDialogShow('/generator/assetmanager/assetmanager.php',640,465)"; //Command to open the Asset Manager add-on.
			
			oEdit1.customColors=["#ff4500","#ffa500","#808000","#4682b4","#1e90ff","#9400d3","#ff1493","#a9a9a9"];//predefined custom colors
			oEdit1.REPLACE("myEditorCode");
			
		</script>
		<?php
	}
	
	public static function getLanguages() {
		return array(
			'en-US'=>'English',
			'da-DK'=>'Danish',
			'nl-NL'=>'Dutch',
			'fi-FI'=>'Finnish',
			'fr-FR'=>'French',
			'de-DE'=>'German',
			'zh-CHS'=>'Chinese Simplified',
			'zh-CHT'=>'Chinese Traditional',
			'nn-NO'=>'Norwegian',
			'es-ES'=>'Spanish',
			'sv-SE'=>'Swedish',
			'it-IT'=>'Italian'
		);
	}
	
	public static function getButton($button) {
		switch($button) {
			case "XHTMLSource":
			case "XHTMLFullSource":
				return "Source";
			case "JustifyLeft":
				return "Left";
			case "JustifyFull":
				return "Full";
			case "JustifyCenter":
				return "Center";
			case "JustifyRight":
				return "Right";
			case "Numbering":
				return "Number";
			case "Bullets":
				return "List";
			case "Characters":
				return "Symbol";
			case "Guidelines":
				return "Guideline";
			case "Styles":
				return "StyleSelect";
			case "StyleAndFormatting":
				return "Style";
			case "AutoTable":
				return "TableEdit";
			default:
				return $button;
		}
	}
	
}

editor::$height = $db->getSetting("editorHeight");
editor::$width = $db->getSetting("editorWidth");
editor::$language = $db->getSetting("editorLanguage");

editor::$buttons = file(PATH_PREFIX . 'editors/buttons.innova.txt', FILE_IGNORE_NEW_LINES);
