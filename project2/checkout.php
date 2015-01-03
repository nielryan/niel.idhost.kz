<?php
//page comment: 
//code comment
session_start();

include("connect.php");
include("members.php");

//code comment
$username=$_SESSION['username'];

//code comment
$query = "UPDATE niel_checkout SET status = 'checkedout' where username = '$username'";


$res = mysql_query($query);

//code comment
if ($res)
  echo "<p>Record Updated<p>";
else
  echo "Problem updating record. MySQL Error: " . mysql_error();


//code comment
echo "<br><br>You have purchased all of the items. ";


echo "An email has been sent confirming your order. ";

//code comment
$querygetemail = mysql_query("SELECT email FROM niel_users WHERE username='$username'");

$data = mysql_fetch_array($querygetemail);

$value = array_shift( $data );

//code comment
mail ("$value", "Order Confirmation", "Your order has been made. An email has been sent to: $value", "From: email@email.com"



);


//code comment
echo"<br><br>";

echo "<a href='products3.php'>Carry on shopping</a>";

?>