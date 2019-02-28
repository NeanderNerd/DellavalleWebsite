<?php

// Edit page

function editpage() {
	global $doc, $db, $return_page;
	
	$rename_prefix = "/generator/ajax/renamekey.php?doc=";
	if(isset($_GET["saved"])) {
		?>
		<div id="pagesaved" class="notice_box positive">
			<strong>Saved</strong>
		</div>
<script type="text/javascript">
<!--
$(document).ready(function() {
	setTimeout(function() {
		$("#pagesaved").fadeOut();
	}, 3500);
});
-->
</script>
		<?php
	}
	
	if($db->hasPermission(2)) {
?>
<form id="edit_title_form" method="post" action="<?php echo $rename_prefix, urlencode($doc); ?>">
	<p class="inliner" id="edit_title">
		<span>Editing:</span>
		<input type="text" class="chunky" id="newname" name="pagename" value="<?php echo htmlentities($doc); ?>" />
        <small>
			<a href="#" class="thinbutton" onclick="document.getElementById('newname').focus();return false;">Rename</a>
			<?php if(!empty($doc)) { ?><a class="return_page thinbutton" href="<?php echo empty($return_page)?'/'.$doc:$return_page?>">View Page</a><?php } ?>
		</small>
		<input type="submit" id="edit_savetitle" value="Save" />
		<span id="saved_inline" style="display:none">Saved!</span>
	</p>
	<input type="hidden" id="origname" name="oldname" value="<?php echo htmlentities($doc); ?>" />
	<input type="hidden" id="etf_return" name="return" value="<?php echo empty($return_page)?'/'.$doc:$return_page?>" />
</form>
<?php 
	} else {
		?>
		<p class="inliner" id="edit_title">
			<span>Editing:</span>
			<span class="chunky"><?php echo htmlentities($doc); ?></span>
			
			<?php 
			if( !empty($doc) ) {
				?><small>( <a class="return_page" href="<?php echo empty($return_page)?'/'.$doc:$return_page?>">Return to Page</a> )<small><?php
			}
			?>
		</p>
		<?php
	}
	
	if(!empty($doc) && $doc != "true") {
		$sContent = $db->getContent($doc);
		?>
		<div id="textEditor">
			<form name="contentForm" id="contentForm" method="post" action="/generator/default.php" onsubmit="window.saving = true;">
				<input type="hidden" id="fdoc" name="doc" value="<?php echo htmlentities($doc);?>" />
				<input type="hidden" name="return" value="<?php echo htmlentities($return_page);?>" />
				<input type="hidden" name="action" value="edit" />
				<?php
				editor::display($sContent);
				?>
			</form>
		</div>
		<?php
	}
?>
<div class="clear"></div>
<script type="text/javascript">
<!--
$(document).ready(function() {
	<?php
	if($db->getSetting("warnOnUnsaved") == "true") {?>
	$("a").click(function() {
		$(window).bind('beforeunload', function() {
			//if(document.getElementById('myEditorCode').value != document.getElementById('origEditorCode').value)
			if(oEdit1.isContentChanged() && !("saving" in window)) {
				return 'You are about to leave without saving your changes.';
			}
		});
	});
	<?php
	}?>
	
	var etitl = document.getElementById("edit_savetitle");
	var etitlf = document.getElementById("edit_title_form");
	var fdoc = document.getElementById("fdoc");
	var og = document.getElementById("origname");
	var nn = document.getElementById("newname");
	$("#edit_title_form input[type=\"text\"]").keyup(function() {
		var orig = og.value;
		var newn = nn.value;
		if(orig != newn) {
			etitl.style.display = "inline";
			nn.className = "hidectr chunky";
		} else {
			etitl.style.display = "none";
			nn.className = "chunky";
		}
	});
	$(etitlf).submit(function() {
		$.getJSON("<?php echo $rename_prefix; ?>" + escape(fdoc.value) + "&pagename=" + escape(document.getElementById("newname").value) + "&ajax", function(data) {
			if("error" in data) {
				alert(data.error);
				return;
			}
			etitl.style.display = "none";
			etitlf.action = "<?php echo $rename_prefix; ?>" + data.doc;
			fdoc.value = data.doc;
			og.value = data.doc;
			nn.className = "chunky";
			if(window.history.replaceState)
				window.history.replaceState(true, "Page Saved - Content Administration", "/generator/default.php?page=pages&view=edit&doc=" + data.doc);
			$("#saved_inline").fadeIn().delay(1500).fadeOut();
		});
		return false;
	});
});
-->
</script><?php

}

if(isset($_SESSION['userdomain'])) {
	$pdoc = $db->getLocalData($_REQUEST['doc']);
	if($pdoc['name'] != $_SESSION['username']) {
		?>
		<h1>Unauthroized Access</h1>
		<p>You aren't authorized to edit this page. Contact the site administrator to gain the proper credentials.</p>
		<?php
	} else
		editpage();
} else
	editpage();
