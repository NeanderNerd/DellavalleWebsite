<?php require_once('Connections/connDellavalle.php'); ?>
<?php
mysql_select_db($database_connDellavalle, $connDellavalle);
$query_rsEmployment = "SELECT position_title, position_description FROM tbl_employment WHERE position_available = 1";
$rsEmployment = mysql_query($query_rsEmployment, $connDellavalle) or die(mysql_error());
$row_rsEmployment = mysql_fetch_assoc($rsEmployment);
$totalRows_rsEmployment = mysql_num_rows($rsEmployment);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<![if !IE]>
<style type="text/css">
div#banner, div#contact, div#navBox, div#mainContent {background-image: url(images/transparent-background.png);}
</style>
<![endif]>
<style type="text/css">
body {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; background-image: url('http://www.dellavallelab.com/images/grass_bg2.gif'); background-repeat: repeat-x; background-color: #634E35;}

div#banner, div#contact, div#navBox, div#mainContent {border: 2px solid #000; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='../images/transparent-background.png', sizingMethod='scale'); }

/* Row Wrappers */
div#pageWrapper {width: 795px; margin: 10px auto;}
div#header {overflow: auto}
div#banner {height: 190px; width: 530px; float: left; position: relative;}
div#contact {height: 174px; margin-left: 550px; padding: 8px;}

/* Banner Replacement */
h1 a { background-image: url('http://www.dellavallelab.com/images/logo.gif'); background-repeat: no-repeat; width: 485px; height: 0px; display: block; overflow: hidden; padding-top: 180px; margin-top: 0px; position: absolute; top: 0; left: 0; }
h3 { background-image: url('http://dellavalle.cybercarrot.com/images/h3.gif'); background-repeat: no-repeat; width: 90px; height: 0px; display: block; overflow: hidden; padding-top: 10px; margin: 0px;}
h4 { background-image: url('http://dellavalle.cybercarrot.com/images/h4.gif'); background-repeat: no-repeat; width: 78px; height: 0px; display: block; overflow: hidden; padding-top: 15px; margin: 0px; }
h1#employment { background-image: url('http://www.dellavallelab.com/images/h5_employment3.jpg'); background-repeat: no-repeat; background-position: center; height: 0px; overflow: hidden; padding-top: 160px; margin:0; }


/* Container Divs */
div#body {overflow: auto; margin-top: 16px; width: 100%;}
div#navBox {height: 380px; width: 230px; float: left;}
div#branding {clear: both;float: left; width: 230px; background-image: url('http://www.dellavallelab.com/images/watermark.gif'); margin-top: 16px; background-repeat: no-repeat;}
div#mainContent {margin-left: 250px; min-height: 450px; padding: 10px 15px;}
* html div#mainContent {display:inline-block; margin-left: 247px;}


/* Menu */
ul#sideMenu, ul#sideMenu ul {list-style-type: none;}
ul#sideMenu {padding: 8px 0 8px 12px; margin: 0;}
ul#sideMenu li {padding: 5px 0 5px 10px; margin: 0 0 0 0px;}
ul#sideMenu li.selected { background-image: url('http://dellavalle.cybercarrot.com/images/li_arrow.gif'); background-repeat: no-repeat; background-position: 0 7px }
ul#sideMenu ul {padding: 5px 0 0 8px; margin: 0;}
ul#sideMenu li.selected li {list-style-image: none;}
ul#sideMenu ul li.selected { background-image: url('http://dellavalle.cybercarrot.com/images/li_sub_arrow.gif'); background-repeat:no-repeat; background-position: 0 7px }
ul#sideMenu li a {text-decoration: none; color: #000}

/* Styling */
#mainContent p {line-height: 18px;}
#contact a {text-decoration: none; font-style: italic; color: #000;}
#mainContent h6 {  margin-bottom: 0px; margin-top:5px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; color: #396; } 
#branding p {font-size: 9px; margin-top: 180px;}



</style>
</head>
<body>
<div id="pageWrapper">
  <div id="header">
    <div id="banner">
      <h1><a href="http://www.dellavallelab.com">Dellavalle Labs</a></h1>
    </div>
    <div id="contact">
      <h3>We can help.</h3>
      <h4>Ask us how</h4>
      <p>800 228-9896<br />
        559 233-6129<br />
        <a href="http://www.dellavallelab.com/contactus.html">Email
        Us</a></p>
      <p>1910 W. McKinley Avenue<br />
        Suite #110<br />
        Fresno, CA 93728</p>
      <p>Hours: Mon - Fri 7am - 5pm</p>
    </div>
  </div>
  <div id="body">
    <div id="navBox">
      <ul id="sideMenu">
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/index.html">Home</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/aboutus.html">About Us</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/whatwedo.html">What We Do</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/services.html">Services</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/analyticalcatalog.html">Analytical Catalog</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/samplingguide.html">Sampling Guide</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/accreditation.html">Accreditation</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/map.html">Map</a></li>
        <li class="selected"><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/employment.html">Employment</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/contactus.html">Contact Us</a></li>
        <li><a href="file:///C|/Documents and Settings/Philip Lee/Desktop/dellavalle css/forms.html">Forms</a></li>
      </ul>
    </div>
    <div id="branding">
      <p>© 2000-2007, Dellavalle Laboratory, Inc.</p>
    </div>
    <div id="mainContent">
      <h1 id="employment">Employment</h1>
      <p>Join our team and begin a fulfilling and rewarding career with a leading
        agricultural laboratory and consulting firm.</p>
      <p>As an equal opportunity employer we provide for holidays, vacation,
        sick, health insurance and other benefits. Currently, we are looking
        for people to fill this position:</p>
<?php if ($totalRows_rsEmployment == 0) { // Show if recordset empty ?>
<h6>No jobs available.</h6>
<?php } // Show if recordset empty ?>
<?php if ($totalRows_rsEmployment > 0) { // Show if recordset not empty ?>
<?php do { ?>
<h6><?php echo $row_rsEmployment['position_title']; ?></h6>
<p><?php echo nl2br($row_rsEmployment['position_description']); ?></p>
<?php } while ($row_rsEmployment = mysql_fetch_assoc($rsEmployment)); ?>
<?php } // Show if recordset not empty ?>
      <p> Submit your resume to the attention of Peggy Miller at:</p>
      <p>Dellavalle Laboratory, Inc.<br />
        1910 W. McKinley Avenue, Suite #110<br />
        Fresno, California 93728</p>
    </div>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($rsEmployment);
?>
