<!DOCTYPE html>
<!-- Page comment: -->
<html>
<head>
</head>
<!-- code comment-->
<body>
<h1>Product Entry</h1>
<?php
error_reporting(0); 
$button = $_POST['button'];
if ($button)
{
//get data
$ProductName=$_POST['ProductName'];
$ProductDescription=$_POST['ProductDescription'];
$ProductCategory=$_POST['ProductCategory'];
$ProductRating=$_POST['ProductRating'];
$ProductPrice=$_POST['ProductPrice'];
$ProductImage=$_POST['ProductImage'];
$ProductRef=$_POST['ProductRef'];
//code comment
include ("connect.php");

//code comment
$query=mysql_query ("SELECT * FROM niel_products WHERE ProductName='$ProductName'");
$numrows=mysql_num_rows($query);


if ($numrows==0)
{

//code comment
$register = mysql_query("INSERT INTO niel_products VALUES('$ProductName', '$ProductDescription', '$ProductCategory','$ProductRating','$ProductPrice','$ProductImage','$ProductRef')");
//code comment
echo "The product has been added.";
}
else
echo "Error.";
}
else
{

//code comment
echo
"
<form action='products.php' method='POST'>
<table width='500'>
<tr>
<td align='right'>Product: </td>
<td align='left'><input type='text' name='ProductName'></td>
</tr>
<tr>
<td align='right'>Description: </td>
<td align='left'><input type='department' name='ProductDescription'></td>
</tr>
<tr>
<td align='right'>Category: </td>
<td align='left'><input type='text' name='ProductCategory'></td>
</tr>
<tr>
<td align='right'>Rating: </td>
<td align='left'><input type='text' name='ProductRating'></td>
</tr>
<tr>
<td align='right'>Price: </td>
<td align='left'><input type='text' name='ProductPrice'></td>
</tr>
<tr>
<td align='right'>Image URL: </td>
<td align='left'><input type='text' name='ProductImage'></td>
</tr>




<tr>
<td align='right'> </td>
<td align='left'><input type='submit' name='button' value='Add Product'></td>
</tr>
</table>
</form>
";

}
?>
<!-- code comment-->
</body>
</html>