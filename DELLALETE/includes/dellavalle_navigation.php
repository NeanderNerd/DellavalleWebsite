<?php require_once('Connections/connDellavalle.php'); ?>
<?php
mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsParentItems = "SELECT category_title, category_link, id FROM tbl_navigation WHERE ISNULL(parent_id) ORDER BY sort_order ASC";
$rsParentItems = mysql_query($query_rsParentItems, $connDellavalle) or die(mysql_error());
$row_rsParentItems = mysql_fetch_assoc($rsParentItems);
$totalRows_rsParentItems = mysql_num_rows($rsParentItems);

function query_link($parent_id){
	global $script_filename, $database_connDevvavalle, $connDellavalle;
	mysql_select_db($database_connDellavalle, $connDellavalle);
	$query_rsCheckParent = "SELECT id FROM tbl_navigation WHERE category_link = '".$script_filename."' AND parent_id = '".$parent_id."'";
	$rsCheckParent = mysql_query($query_rsCheckParent, $connDellavalle) or die(mysql_error());
	$row_rsCheckParent = mysql_fetch_assoc($rsCheckParent);
	$totalRows_rsCheckParent = mysql_num_rows($rsCheckParent);
	return $totalRows_rsCheckParent;
}
?>
<?php
$explode_filename = explode('/', $_SERVER['SCRIPT_FILENAME']);
$script_filename = $explode_filename[count($explode_filename)-1];

function is_current($category_link){
	global $script_filename;
	if ($category_link == $script_filename){
		return true;
	}
}

function is_parent($parent_id){
	global $script_filename;
	if (query_link($parent_id) > 0){
		return true;
	}
}
?>
<ul class="sidemenu">
  <?php do { ?><li<?php if (is_parent($row_rsParentItems['id']) || is_current($row_rsParentItems['category_link'])){ ?> class="selected"<?php } ?>><a href="<?php echo $row_rsParentItems['category_link']; ?>"><?php echo $row_rsParentItems['category_title']; ?></a><?php
$current_id = $row_rsParentItems['id'];
?>
<?php if (is_parent($row_rsParentItems['id']) || is_current($row_rsParentItems['category_link'])){ ?>
<?php
mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsChildItems = "SELECT category_title, category_link, is_external FROM tbl_navigation WHERE parent_id = $current_id ORDER BY sort_order ASC";
$rsChildItems = mysql_query($query_rsChildItems, $connDellavalle) or die(mysql_error());
$row_rsChildItems = mysql_fetch_assoc($rsChildItems);
$totalRows_rsChildItems = mysql_num_rows($rsChildItems);
?>
<?php if ($totalRows_rsChildItems > 0){ ?>
<ul>
<?php do { ?>
<li<?php if (is_current($row_rsChildItems['category_link'])){ ?> class="selected"<?php } ?>><a href="<?php echo $row_rsChildItems['category_link'] ?>"<?php if ($row_rsChildItems['is_external']){ ?> target="_blank"<?php } ?>><?php echo $row_rsChildItems['category_title'] ?></a></li>
<?php } while ($row_rsChildItems = mysql_fetch_assoc($rsChildItems)); ?>
</ul>
<?php } ?>
<?php } ?>
</li>
<?php } while ($row_rsParentItems = mysql_fetch_assoc($rsParentItems)); ?>
</ul>
