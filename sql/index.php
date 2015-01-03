<!doctype html>
<!-- Why is this important? (line above)-->
<!-- Why is this important? (line below)-->
<html>
<!-- What does this do?-->
<head>
<!-- What does this do?-->
<title>Kokshetau Hospital Bookings Homepage</title>
<!-- What does this do?-->
<meta charset="UTF-8" />
<!-- What does this do?-->

<style type="text/css">
/* the h1 is used to define the properties of the header (h1) including color,size and font type*/

h1
{font-size:50px;color:fuchsia;font-family: cursive;}
/* What does this do?*/

body 
{background-color:green;} 
/* What does this do?*/

footer
{width: 100%;bottom:0;position: absolute;left: 0;background-color:aqua;}
/* What does this do?*/ 
</style> 
<!-- What does this do?-->
</head><!-- What does this do?-->
<body>
<!-- What does <p> do?-->
<h1>This is the website of the hospital.</h1><p>
<!-- What does this do?-->


Here are 2 solutions for displaying Doctors in the hospital:<p>
<!-- How do each of these solutions work? Which algorithm is the most efficient? Why? -->
1. The hospital has the following Doctors:.....<p><p>

<!-- What does this do?-->
<script>
//What does this do?
var i;
var mydrs = new Array();
mydrs[0] = "Dr Galiya";
mydrs[1] = "Dr Serik";
mydrs[2] = "Dr Ryan";
for(i=0;i<mydrs.length;i++)
{document.write(mydrs[i] + "<br>");}
//what does this do?
</script>
<p>

2. The hospital has the following Doctors:.....<p/><p/>

<ul>
<li>Dr Galiya</li>
<li>Dr Serik</li>
<li>Dr Ryan</li>
</ul>

<p/><p/><p/><br><br>
This is a list of customers that will be using the website.<p>


<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


 


// I am going to create a table .....
// Create connection
$con=mysqli_connect("10.8.204.167","u1106593_Niel","niel","db1106593_Niel");
// Check connection

echo "Check if MYSQL is working:";
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL:<br><br>" . mysqli_connect_error();
  }
  else
  {
	  echo"MySQLis working.<br><br>";
  }

//What does the commented out code do?
//$sql="DROP TABLE teachers";
//mysqli_query($con,$sql);
  
  // Create table.... change the name of Persons to your own name
$sql="CREATE TABLE teachers(FirstName CHAR(30),LastName CHAR(30),Age INT,Department CHAR(50))";


// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully.";
  }
else
  {
  echo "Error creating table:" . mysqli_error($con);
  }

// This .......
mysqli_query($con,"INSERT INTO teachers (FirstName, LastName, Age,Department)
VALUES ('Galiya', 'Begezhaeva',29,'Computer Science')");
mysqli_query($con,"INSERT INTO teachers (FirstName, LastName, Age,Department) 
VALUES ('Niel', 'Ryan',27,'Computer Science')");
mysqli_query($con,"INSERT INTO teachers (FirstName, LastName, Age,Department) 
VALUES ('Patricia', 'Culliane',33,'English')");

echo "<br><br>This is a list of people: (Name, Age, Department)<br>";
// This.....
$result = mysqli_query($con,"SELECT DISTINCT * FROM teachers");
while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName']. " " . $row['Age']. " ".$row['Department'];
  echo "<br>";
  }



// What is happening in this code?  
  echo "<br><br>The average age of the teachers is: <br>";
$result4 = mysqli_query($con,'SELECT AVG(Age) AS average_age_teachers FROM teachers'); 
$row = mysqli_fetch_assoc($result4); 
$average = $row['average_age_teachers'];
//why does this have 'float' here? what does it do??
echo ceil($average)."<br>";






// What is happening in this code? 
echo "<br><br>This is the actual list of everyone:<br>";
// This.....
// This is different to the first the query because....
$result2 = mysqli_query($con,"SELECT * FROM teachers");
while($row = mysqli_fetch_array($result2))
  {
  echo $row['FirstName'] . " " . $row['LastName']. " " . $row['Age'];
  echo "<br>";
  }
  
  
// What is happening in this code? 
  echo "<br><br>The total age of everyone is: <br>";
$result3 = mysqli_query($con,'SELECT SUM(Age) AS value_sum FROM teachers'); 
$row = mysqli_fetch_assoc($result3); 
$sum = $row['value_sum'];
echo $sum."<br>";

  
  
//This is here to...
mysqli_close($con);

?>

</body>
<!-- What does this do?-->
<!-- What does this do?-->
</html>