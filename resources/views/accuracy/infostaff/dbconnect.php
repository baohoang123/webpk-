<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$database="webpk"; 
$conn = mysql_pconnect($host,$username,$password); 
mysql_query("set names 'utf8'"); 
//mysql_select_db($database);  
if (!$conn) {
    echo "not Connected successfully";
}else{
    echo "Connected successfully";
}

?>