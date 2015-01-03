<?php 
//page comment: 
// code comment
session_start();

//Check for login
include("members.php");
include("connect.php");

?>

<html>



<head>
<!-- code comment-->







</head>

<body>




<?php 
//code comment
echo "<br><br>";

echo "<h1>Bulk Order List </h1><br><br>";
echo "Below is a list of all of the orders that have been made or that are in a basket.";
//MYSQL connection

//Table of products query
$result = mysql_query("SELECT * FROM niel_checkout");

//code comment
echo "<table border='1'>
<tr>
<th>Username</th>
<th>Product</th>
<th>Status</th>
<th>Order Reference</th>
</tr>";


while($data = mysql_fetch_array($result))
{
// we are running a while loop to print all the rows in a table




echo'<tr>'; 

// printing table row


echo '<td>'.$data['username'].'</td><td>'.$data['product'].'</td><td>'.$data['status'].'</td><td>'.$data['reference'].'</td>';





// we are looping all data to be printed till last row in the table
echo'</tr>'; // closing table row

}

echo '</table>';  //closing table tag


?>





<br><br>


</body>


</html>



















