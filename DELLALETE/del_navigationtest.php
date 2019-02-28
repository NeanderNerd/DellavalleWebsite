<?php require_once('Connections/connDellavalle.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsSubsNotGoingToBeDoneRight = "SELECT DISTINCT(subcategory) FROM Subcategory WHERE cat_id=1";
$rsSubsNotGoingToBeDoneRight = mysql_query($query_rsSubsNotGoingToBeDoneRight, $connDellavalle) or die(mysql_error());
$row_rsSubsNotGoingToBeDoneRight = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight);
$totalRows_rsSubsNotGoingToBeDoneRight = mysql_num_rows($rsSubsNotGoingToBeDoneRight);

mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsSubsNotGoingToBeDoneRight1 = "SELECT DISTINCT(subcategory) FROM Subcategory WHERE cat_id=2";
$rsSubsNotGoingToBeDoneRight1 = mysql_query($query_rsSubsNotGoingToBeDoneRight1, $connDellavalle) or die(mysql_error());
$row_rsSubsNotGoingToBeDoneRight1 = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight1);
$totalRows_rsSubsNotGoingToBeDoneRight1 = mysql_num_rows($rsSubsNotGoingToBeDoneRight1);

mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsSubsNotGoingToBeDoneRight2 = "SELECT DISTINCT(subcategory) FROM Subcategory WHERE cat_id=3";
$rsSubsNotGoingToBeDoneRight2 = mysql_query($query_rsSubsNotGoingToBeDoneRight2, $connDellavalle) or die(mysql_error());
$row_rsSubsNotGoingToBeDoneRight2 = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight2);
$totalRows_rsSubsNotGoingToBeDoneRight2 = mysql_num_rows($rsSubsNotGoingToBeDoneRight2);

mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsSubsNotGoingToBeDoneRight3 = "SELECT DISTINCT(subcategory) FROM Subcategory WHERE cat_id=5";
$rsSubsNotGoingToBeDoneRight3 = mysql_query($query_rsSubsNotGoingToBeDoneRight3, $connDellavalle) or die(mysql_error());
$row_rsSubsNotGoingToBeDoneRight3 = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight3);
$totalRows_rsSubsNotGoingToBeDoneRight3 = mysql_num_rows($rsSubsNotGoingToBeDoneRight3);

mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsSubsNotGoingToBeDoneRight4 = "SELECT DISTINCT(subcategory) FROM Subcategory WHERE cat_id=10";
$rsSubsNotGoingToBeDoneRight4 = mysql_query($query_rsSubsNotGoingToBeDoneRight4, $connDellavalle) or die(mysql_error());
$row_rsSubsNotGoingToBeDoneRight4 = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight4);
$totalRows_rsSubsNotGoingToBeDoneRight4 = mysql_num_rows($rsSubsNotGoingToBeDoneRight4);
//NeXTenesio Special List Recordset
mysql_select_db($database_connDellavalle, $connDellavalle);

$query_rsCategories = "SELECT DISTINCT(category) FROM Category";
$rsCategories = mysql_query($query_rsCategories, $connDellavalle) or die(mysql_error());
$row_rsCategories = mysql_fetch_assoc($rsCategories);
$totalRows_rsCategories = mysql_num_rows($rsCategories);
//End NeXTenesio Special List Recordset
?>

<table width="188" height="100%" border="0" cellpadding="0" cellspacing="0" class="nav_table">
  <tr>
    <td valign="top"><table width="200" height="100%" border="0" cellpadding="0" cellspacing="0">
			<?php do { ?>
				<tr>
					<td width="5" height="25">&nbsp;</td>
					<td width="15" height="25"><?php if ($row_rsCategories['category'] == "$post_cat_position"){echo"<img src=\"../images/li_arrow.gif\">";} ?></td>
				    <td width="296"><a href="<?php echo $row_rsCategories['beta/category']; ?>.php" class="h8"><?php echo ucwords($row_rsCategories['category']); ?></a></td>
				</tr>
				<?php if ($row_rsCategories['category'] == "about us"){ ?>
				<?php do { ?>
				<tr class="aboutub">
					<td height="25">&nbsp;</td>
					<td height="25" colspan="2">&nbsp;<img src="images/spacer.gif" width="20" height="1"><?php if ($row_rsSubsNotGoingToBeDoneRight['subcategory'] == "$post_subcat"){echo"<img src=\"../images/li_sub_arrow.gif\">";} ?><a href="<?php echo $row_rsSubsNotGoingToBeDoneRight['beta/subcategory']; ?>.php" class="h8"><?php echo ucwords($row_rsSubsNotGoingToBeDoneRight['subcategory']); ?></a>&nbsp;&nbsp;</td>
				</tr><?php } while ($row_rsSubsNotGoingToBeDoneRight = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight)); ?>
				<?php } ?>
				<?php if ($row_rsCategories['category'] == "services"){ ?>
				<?php do { ?>
				<tr class="servicesub">
					<td height="25">&nbsp;</td>
					<td height="25" colspan="2">&nbsp;&nbsp;&nbsp;<img src="images/spacer.gif" width="20" height="1"><a href="<?php echo $row_rsSubsNotGoingToBeDoneRight2['beta/subcategory']; ?>.php" class="h8"><?php echo ucwords($row_rsSubsNotGoingToBeDoneRight2['subcategory']); ?></a></td>
				</tr><?php } while ($row_rsSubsNotGoingToBeDoneRight2 = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight2)); ?>
				<?php } ?>
								<?php if ($row_rsCategories['category'] == "what we do"){ ?>
				<?php do { ?>
				<tr class="whatub">
					<td height="25">&nbsp;</td>
					<td height="25" colspan="2">&nbsp;&nbsp;&nbsp;<img src="images/spacer.gif" width="20" height="1"><a href="<?php echo $row_rsSubsNotGoingToBeDoneRight1['beta/subcategory']; ?>.php" class="h8"><?php echo ucwords($row_rsSubsNotGoingToBeDoneRight1['subcategory']); ?></a></td>
				</tr><?php } while ($row_rsSubsNotGoingToBeDoneRight1 = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight1)); ?>
				<?php } ?>

				<?php if ($row_rsCategories['category'] == "forms"){ ?>
				<?php do { ?>
				<tr class="formsub">
					<td height="25">&nbsp;</td>
					<td height="25" colspan="2">&nbsp;&nbsp;&nbsp;<img src="images/spacer.gif" width="20" height="1"><a href="<?php echo $row_rsSubsNotGoingToBeDoneRight4['beta/subcategory']; ?>.php" class="h8"><?php echo ucwords($row_rsSubsNotGoingToBeDoneRight4['subcategory']); ?></a></td>
				</tr><?php } while ($row_rsSubsNotGoingToBeDoneRight4 = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight4)); ?>
				<?php } ?>
				<?php if ($row_rsCategories['category'] == "sampling guide"){ ?>
				<?php do { ?>
				<tr class="samplingub">
					<td height="25">&nbsp;</td>
					<td height="25" colspan="2">&nbsp;&nbsp;&nbsp;<img src="images/spacer.gif" width="20" height="1"><a href="<?php echo $row_rsSubsNotGoingToBeDoneRight3['beta/subcategory']; ?>.php" class="h8"><?php echo ucwords($row_rsSubsNotGoingToBeDoneRight3['subcategory']); ?></a></td>
				</tr><?php } while ($row_rsSubsNotGoingToBeDoneRight3 = mysql_fetch_assoc($rsSubsNotGoingToBeDoneRight3)); ?>
				<?php } ?>

				<?php } while ($row_rsCategories = mysql_fetch_assoc($rsCategories)); ?>
      <tr>
        <td height="10" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><table width="188" height="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><img src="images/spacer.gif" width="1" height="100%"></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($rsSubsNotGoingToBeDoneRight);
mysql_free_result($rsSubsNotGoingToBeDoneRight1);
mysql_free_result($rsSubsNotGoingToBeDoneRight2);
mysql_free_result($rsSubsNotGoingToBeDoneRight3);
mysql_free_result($rsSubsNotGoingToBeDoneRight4);

mysql_free_result($rsCategories);
?>

