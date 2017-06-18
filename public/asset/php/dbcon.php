<?php    // ket noi voi csdl
$host="localhost"; 
$username="root"; 
$password=""; 
$database="2cwebvn_demo"; 
mysql_pconnect($host,$username,$password); 
mysql_query("set names 'utf8'"); 
mysql_select_db($database);     
?>