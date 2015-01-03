<?php
//page comment: 
session_start();

//Check for login
include("connect.php");
include("members.php");

?>



<!DOCTYPE html>
<!-- code comment -->

<head>
	<title>HTML5 Bar Graph Example</title>
	
<!-- code comment -->
</head>

<h1>Total Sales</h1>
<!-- code comment -->
<body>
	<div id="graphDiv1"></div>
	<br />
	<div id="graphDiv2"></div>
	<!--[if IE]><script src="excanvas.js"></script><![endif]-->
	
	
	<script src="barGraph.js"></script>
	<script>(function () {
	/*this is the javascript function that will great a bar graph of the results*/
	
		function createCanvas(divName) {
			
			var div = document.getElementById(divName);
			var canvas = document.createElement('canvas');
			div.appendChild(canvas);
			if (typeof G_vmlCanvasManager != 'undefined') {
				canvas = G_vmlCanvasManager.initElement(canvas);
			}	
			var ctx = canvas.getContext("2d");
			return ctx;
		}
		/*code comment*/
		var ctx = createCanvas("graphDiv1");
		/*these are the variables that can be changed for the graph*/
		var graph = new BarGraph(ctx);
		graph.maxValue = 30;
		graph.width = 950;
		graph.margin = 2;
		//graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27"];
		graph.xAxisLabelArr = [
		/*code comment*/
		<?php
//code comment
$queryallorders = mysql_query("SELECT product, COUNT(product)AS num FROM niel_checkout GROUP BY product");
  
 echo"\"";
while($data = mysql_fetch_array($queryallorders))

  {
  echo $data['product'];
  echo "\",\"";

  }
  echo"\"";
  //code comment
?>
/*code comment*/
		];
		setInterval(function () {
			graph.update([
			<?php
//This is the PHP that will run a mysql query to count the total number of products that have been either sold or put in the basket and then display them in the graph. 
$queryallorders = mysql_query("SELECT product, COUNT(product)AS num FROM niel_checkout GROUP BY product");
  
while($data = mysql_fetch_array($queryallorders))

  {

  echo $data['num'];
  echo ",";
  }
  echo" ";

?>
			]);
		}, 1000);
		

	}());</script>
	<!-- code comment -->
</body>
</html>


