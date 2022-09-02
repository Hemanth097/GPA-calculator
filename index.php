<?php
$x = 0;
if($_SERVER["REQUEST_METHOD"] == "GET"){
	if(isset($_GET['options'])){
		if ($_GET['options'] == "SGPA"){
		$x = 1;
		
	}
		if ($_GET['options'] == "CGPA"){
		$x = 2;
		
	}
	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>precentage calculator</title>
	<style type="text/css">
		
	a:link, a:visited {
		background-color: #f44336;
		color: white;
		padding: 14px 25px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		margin: 2px;
	}

	a:hover, a:active {
  		background-color: red;
		}
		

	</style>
</head>
<body>
	<a href="index.php">Home</a>
<center>
	
	<?php
	if($x == 0){
		echo "<h1>SGPA (or) CGPA</h1>";
		echo '<a href="index.php?options=SGPA">SGPA</a>'; 
		echo '<a href="index.php?options=CGPA">CGPA</a>'; 
	}else if($x == 1){
		echo "<h1>which semister SGPA</h1>";
		echo '<a href="SGPA.php?options=1">1-1</a>';
		echo '<a href="SGPA.php?options=2">1-2</a>';
		echo '<a href="SGPA.php?options=3">2-1</a>';
		echo '<a href="SGPA.php?options=4">2-2</a>';
		echo '<a href="SGPA.php?options=5">3-1</a>';
		echo '<a href="SGPA.php?options=6">3-2</a>';
		echo '<a href="SGPA.php?options=7">4-1</a>';
		echo '<a href="SGPA.php?options=8">4-2</a>';
	
	}else if($x == 2){
		echo "<h1>until which sem CGPA</h1>";
		echo '<a href="CGPA.php?options=1-1">1-1</a>';
		echo '<a href="CGPA.php?options=1-2">1-2</a>';
		echo '<a href="CGPA.php?options=2-1">2-1</a>';
		echo '<a href="CGPA.php?options=2-2">2-2</a>';
		echo '<a href="CGPA.php?options=3-1">3-1</a>';
		echo '<a href="CGPA.php?options=3-2">3-2</a>';
		echo '<a href="CGPA.php?options=4-1">4-1</a>';
		echo '<a href="CGPA.php?options=4-2">4-2</a>';
	
	}
		
	?>	
	

</center>
	
</body>
</html>