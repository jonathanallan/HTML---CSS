<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connuser = "localhost";
$database_connuser = "jcooling";
$username_connuser = "jcooling";
$password_connuser = "coolij1";
$connuser = mysql_pconnect($hostname_connuser, $username_connuser, $password_connuser) or trigger_error(mysql_error(),E_USER_ERROR); 
?>