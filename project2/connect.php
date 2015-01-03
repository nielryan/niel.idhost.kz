<?php
//Page Comment: 

//Code Comment: 
ini_set('display_errors','On');
//ini_set('error_reporting',E_ALL);

//Code Comment: 
$connect=mysql_connect("10.8.204.167","u1106593_Niel","niel")or die("Unable to connect to MySQL"). mysqli_connect_errno();

//Code Comment: 
echo "Connection: ";

//Code Comment: 
mysql_set_charset('UTF8',$connect);

//Code Comment: 
mysql_select_db("db1106593_Niel");
?>