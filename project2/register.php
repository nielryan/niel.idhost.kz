<!DOCTYPE html>
<!-- Page comment: -->
<html>

<head>
</head>

<body>
<?php
//Code Comment: 
error_reporting(0); 
//Code Comment; 
$button = $_POST['button'];
if ($button)
{
//Code Comment: 
$username=$_POST['username'];
$password=$_POST['password'];
$retypepassword=$_POST['retypepassword'];
$email=$_POST['email'];

//Code Comment: 
if ($username && $password && $retypepassword && $email)
{
if ($password==$retypepassword)
{
//Code Comment: 
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
echo "Not a valid email";
die();
}
else
include ("connect.php");
$query=mysql_query ("SELECT * FROM niel_users WHERE username='$username'");
$numrows=mysql_num_rows($query);
//Code Comment: 
if ($numrows==0)
{
$password = md5($password);
//Code Comment: 
$register = mysql_query("INSERT INTO niel_users VALUES('', '$username', '$password', '$email','')");
//Code Comment: 
echo "You have been registered";
}
else
echo "That user name is taken";
}
else
echo "Passwords did not match";
}
else
echo "You did not fill out every field";
}

?>

<!--code comment -->
<form action='register.php' method='POST'>
<table width='500'>
<tr>
<td align='right'>Username: </td>
<td align='left'><input type='text' name='username'></td>
</tr>
<tr>
<td align='right'>Password: </td>
<td align='left'><input type='password' name='password'></td>
</tr>
<tr>
<td align='right'>Retype password: </td>
<td align='left'><input type='password' name='retypepassword'></td>
</tr>
<tr>
<td align='right'>Email: </td>
<td align='left'><input type='email' placeholder="me@example.com" name='email'></td>
</tr>
<tr>
<td align='right'> </td>
<td align='left'><input type='submit' name='button' value='Register'></td>
</tr>
</table>
</form>


</body>



</html>