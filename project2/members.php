<?php
//page comment: 
//code comment
session_start();
$username=$_SESSION['username'];

//code comment
if ($username)
{
echo "Welcome $username | <a href='logout.php'>Logout</a>";
}
else
{
echo "You are not logged in";
}
?>