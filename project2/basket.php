<?php
//page comment
//code comment
session_start();
include("members.php");
include("connect.php");



echo "<br><br>";

//code comment
$username=$_SESSION['username'];

$addbasket=$_POST['ID2'];

$status = "Basket";

//code comment


$checkout = mysql_query("INSERT INTO niel_checkout VALUES('$username',  '$addbasket','$status','')");


echo "$username, $addbasket";


//code comment

echo ": has been added to your basket";

echo "<br><br>";

echo "In your basket:<br>";

//code comment


$result = mysql_query("SELECT * FROM niel_checkout where status = 'basket'");

//code comment
while($data = mysql_fetch_array($result))

  {
  echo $data['product'];
  echo ", ";
  }

echo "<a href='checkout.php'>Checkout</a>";



?>