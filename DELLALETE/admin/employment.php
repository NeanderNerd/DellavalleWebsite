<?php require_once('../Connections/connDellavalle.php'); ?>
<?php
mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsEmployment = "SELECT position_title, position_description FROM tbl_employment WHERE position_available = 1";
$rsEmployment = mysql_query($query_rsEmployment, $connDellavalle) or die(mysql_error());
$row_rsEmployment = mysql_fetch_assoc($rsEmployment);
$totalRows_rsEmployment = mysql_num_rows($rsEmployment);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php if ($totalRows_rsEmployment > 0) { // Show if recordset not empty ?>
<?php do { ?>
<h6><?php echo $row_rsEmployment['position_title']; ?></h6>
<p><?php echo $row_rsEmployment['position_description']; ?></p>
<?php } while ($row_rsEmployment = mysql_fetch_assoc($rsEmployment)); ?>
<?php } // Show if recordset not empty ?>
<?php if ($totalRows_rsEmployment == 0) { // Show if recordset empty ?>
<p>No jobs available.</p>
<?php } // Show if recordset empty ?>
</body>
</html>
<?php
mysql_free_result($rsEmployment);
?>

