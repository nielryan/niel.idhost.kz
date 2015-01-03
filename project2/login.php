<?php
//page comment: 
//code comment
session_start();

$username =$_POST['myusername'];
$password =$_POST['mypassword'];

//code comment
include("connect.php");


if ($username&& $password)
{
// info is provided
$password = md5($password);
$queryget = mysql_query("SELECT * FROM niel_users WHERE username='$username' AND password='$password'");


$numrows = mysql_num_rows($queryget);

//code comment
if ($numrows != 0)
{
$_SESSION['username']=$username;

include("members.php");
}
else
{
echo "Username and/or password were incorrect";
}

}
//code comment
else 
{
echo "Incorrect details";
}
//code comment
include("index.php");

?>