<div id="container" class="login_box <?php if($db->getSetting("showLogo") == "true") {echo ' wlogo';} ?>" style="width:300px">
	<form style="background:#fff;" method="post" name="login" action="default.php">
		<input type="hidden" class="hidden" name="action" value="login" />
		<?php if(!empty($_GET["page"])) { ?>
		<input type="hidden" class="hidden" name="page" value="<?php echo htmlentities($_GET["page"]); ?>" />
		<?php }
		if(!empty($_GET["view"])) { ?>
		<input type="hidden" class="hidden" name="view" value="<?php echo htmlentities($_GET["view"]); ?>" />
		<?php }
		if(!empty($_GET["return"])) { ?>
		<input type="hidden" class="hidden" name="return" value="<?php echo htmlentities($_GET["return"]); ?>" />
		<?php } ?>
		
		<?php if(isset($_REQUEST['failed'])){ ?>
		<p class="formerror">Invalid Login</p>
		<?php }?>
		
		<?php
		/* Get values */
		$action = isset($_REQUEST['action'])?$_REQUEST['action']:'';
		$doc = isset($_REQUEST['doc'])?$_REQUEST['doc']:'';
		$newdoc = isset($_REQUEST['newpage'])?$_REQUEST['newpage']:'';
		?>
		
		<label for="name" id="username_context">Username</label>
		<input type="text" id="name" name="name" value="">
		
		<label for="passwd" id="passwd_context">Password</label>
		<input type="password" name="passwd" value="">
		
		<?php
		if( $action == "edit" ) {
			?><input type="hidden" name="requested_action" value="<?php echo $action; ?>" /><?php
		} ?>
		
		<div id="login_disclosure" class="hidden"<?php if(!SHOW_SHOWOPTIONS) {echo ' style="display:none"';} ?>>
			<a href="#" onclick="$(this.parentNode).toggleClass('hidden');">Show Options</a>
			<div id="login_expander">
				<label for="requested_doc" id="doc_context">Document</label>
				<input type="text" id="requested_doc" name="requested_doc" value="<?php echo htmlentities(isset( $doc ) ? $doc : $newdoc); ?>">
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		
		<p class="buttons">
			<input type="submit" value="Login" class="submit">
		</p>
		
	</form>
</div>
<script type="text/javascript">
<!--
document.getElementById('name').focus();
-->
</script>