<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connDellavalle = "bkfdsql01.arrival.net";
$database_connDellavalle = "dellavallelab_com";
$username_connDellavalle = "dellaval";
$password_connDellavalle = "backman";
$connDellavalle = mysql_pconnect($hostname_connDellavalle, $username_connDellavalle, $password_connDellavalle) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
