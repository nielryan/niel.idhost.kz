<?php 
//page comment: 
//code comment: 
session_start();

//Check for login

include("connect.php");
include("members.php");
?>

<html>



<head>
<!-- load the jquery file to run AJAX -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>

/*This is a jquery function that uses AJAX to asynchronsly load a product recommendation for the customer*/
$(document).ready(function(){
  $("button").click(function(){
  
  
   <?php 
   // Product Recommendation. the product recommendation is found by querying the users first shopping habit. If they have purchased a chocolate bar then a clothing item is recommended. Otherwise the delicious sweets special will be suggested. 
   $queryuserorders = mysql_query("SELECT product FROM niel_checkout WHERE username='$username' & status='checkedout'");
  
  $row = mysql_fetch_row($queryuserorders);

if($row[0]="Chocolate bar")
{
echo" $(\"#div1\").load(\"offer1.txt\",function(responseTxt,statusTxt,xhr)";
}

else{echo" $(\"#div1\").load(\"offer2.txt\",function(responseTxt,statusTxt,xhr)";}

   ?>
    
    {
      if(statusTxt=="success")
       alert("Display My Special!");
      if(statusTxt=="error")
       alert("Error: "+xhr.status+": "+xhr.statusText);
        
    }
    
    );
  });
});
</script>




<script>
function myFunction()
{
alert("Your item has been added to your basket."); // this is the message in ""
}
</script>

</head>

<body>




<?php 

echo "<br><br>";

echo "<h1>For Sale</h1><br><br>";

//MYSQL connection


//Table of products query
$result = mysql_query("SELECT * FROM niel_products");


echo "<table border='1'>
<tr>
<th>Product</th>
<th>Description</th>
<th>Category</th>
<th>Price</th>
<th>Image</th>
<th>Buy</th>
</tr>";


while($data = mysql_fetch_array($result))
{
// we are running a while loop to print all the rows in a table




echo'<tr>'; 

// printing table row


echo '<td>'.$data['ProductName'].'</td><td>'.$data['ProductDescription'].'</td><td>'.$data['ProductCategory'].'</td><td>'.$data['ProductPrice'].'</td><td>';



echo'<img src="';
echo $data['ProductImage'];
echo '" width="130px" height="130px">';

$currentID = $data['ProductName'];

//code comment

echo '<form action=\'basket.php\' method=\'POST\'>';
echo "<input type=hidden name='ID2' value='$currentID'>";
echo '</td><td><input type=\'submit\' name=\'';
echo 'button';
echo '\'value=\'Add\'></td>';

echo '</form>'; 


// we are looping all data to be printed till last row in the table
echo'</tr>'; // closing table row

}

echo '</table>';  //closing table tag




//code comment

$button = $_POST['button2'];
if ($button)
{

echo '<script>myFunction()</script>';



}




?>


<!-- The AJAX (Asynchronous JavaScript and XML) call that is executed using JQuery in the script at the top of the page is placed into the page using id=div1. The Javavascript to make the insertion is run when the button below is pressed. -->
<br><br>
<div id="div1"><h2>Find out my special recommendation. Click below to see your recommendation here:</h2></div>
<button id="recommendationbutton">Recommended For Me</button>

<br><br>


</body>


</html>



















