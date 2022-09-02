<?php
session_start();
$tp = 0;

$cred1 = array(4,4,3,2,2.5,1.5,1,1);

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$semOpt = $_SESSION["semname"] ;
	$semGP = $_POST['marks'];
	semcal($semOpt,$semGP,$cred1);

	

}else if($_SERVER["REQUEST_METHOD"] == "GET"){
	if(isset($_GET['options'])){
		$semOpt	 = $_GET['options'];
		$_SESSION["semname"] = "$semOpt";

	}else{
		header("Location: index.php");
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>SGPA calculator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		input[type=submit]{
			background-color: #04AA6D;
			border: none;
			color: white;
			padding: 16px 32px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>
<body>

	<div class="w3-container">
	<?php 

		echo "<h2>Semester $semOpt GPA calculator</h2>" 

	?>
	<div class="w3-card-4">
    	<div class="w3-container w3-green">
    		<p>Enter your grade</p>
    	</div>
    	<form class="w3-container" action="SGPA.php" method="POST">

	<?php

		switch ($semOpt) {
  			case 1:
				echo "<h4><label>Mathematics - I	</label></h4>";
				echo "<input class='w3-input' type='number' name = marks[]>";

				echo "<h4><label>Chemistry</label></h4>";
				echo "<input class='w3-input' type='number' name = marks[]>";

				echo "<h4><label>Basic Electrical Engineering	</label></h4>";	
				echo "<input class='w3-input' type='number' name = marks[]>";

				echo "<h4><label>English</label></h4>";
				echo "<input class='w3-input' type='number' name = marks[]>";

				echo "<h4><label>Engineering Workshop	</label></h4>";
				echo "<input class='w3-input' type='number' name = marks[]>";

				echo "<h4><label>Engineering Chemistry Lab	</label></h4>";
				echo "<input class='w3-input' type='number' name = marks[]>";

				echo "<h4><label>English Language And Communication Skills Lab	</label></h4>";
				echo "<input class='w3-input' type='number' name = marks[]>";

				echo "<h4><label>Basic Electrical Engineering Lab	</label></h4>";
				echo "<input class='w3-input' type='number' name = marks[]>";



    		break;

    		case 2:
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    			echo "<h4><label></label></h4>";
    		break;
    		default:

    			break;
    	}
	?>
	<input type="submit" name = "submit" value="Calculate">
	    </form>
  	</div>
	</div>

<?php 

	function semcal($x,$semGP,$cred1){
		$tp = 0;
		$i = 0;
		switch ($x) {
			case 1:
				foreach ($semGP as $value) {
					$tp += $value*$cred1[$i];
					$i++;
				}

				$tp = $tp/19;
				break;
			
			default:
				
				break;
		}
	
		echo "$tp";
	}


	
?>

</body>
</html>

