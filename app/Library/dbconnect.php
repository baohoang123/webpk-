<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$database="webpk"; 
mysql_pconnect($host,$username,$password); 
mysql_query("set names 'utf8'"); 
mysql_select_db($database);  

?>