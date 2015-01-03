<?php
//page comment: 
//code comment
session_start();
$username=$_SESSION['username'];
//code comment
session_destroy();
echo "You have been logged out";
?>