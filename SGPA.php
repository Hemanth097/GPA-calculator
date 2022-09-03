<?php
session_start();
$tp = 0;
$x=true;

$cred = array(
	array(4,4,3,2.5,2,1.5,1,1),
	array(4,4,4,3,1.5,1.5,0),
	array(3,4,4,3,2,1,1.5,1.5,1,0),
	array(3,3,3,4,4,1.5,1.5,1,0),
	array(3,3,3,3,3,3,1.5,1.5,1,0,0),
	array(4,4,4,3,3,1.5,1.5,1,0,0),
	array(3,2,3,3,3,1,2,1,3),
	array(3,3,3,7)
	);


if($_SERVER["REQUEST_METHOD"] == "POST"){
	if (isset($_POST['marks'])) {
		# code...
	}
	$semOpt = $_SESSION["semname"] ;
	$semGP = $_POST['marks'];
	$gpa = semcal($semOpt,$semGP,$cred);
	$x = false;

	

}else if($_SERVER["REQUEST_METHOD"] == "GET"){
	if(isset($_GET['options'])){
		$semOpt	 = $_GET['options'];
		$_SESSION["semname"] = "$semOpt";

	}else{
		header("Location: index.php");
	}
}

function semcal($x,$semGP,$cred){
		$tp = 0;
		$i = 0;
		switch ($x) {
			case 1:
				foreach ($semGP as $value) {
					$tp += $value*$cred[0][$i];
					$i++;
				}

				$tp = $tp/19;
				break;

			case 2:
				foreach ($semGP as $value) {
					$tp += $value*$cred[0][$i];
					$i++;
				}

				$tp = $tp/19;
				break;

			case 3:
				foreach ($semGP as $value) {
					$tp += $value*$cred[0][$i];
					$i++;
				}

				$tp = $tp/19;
				break;
			case 4:
				foreach ($semGP as $value) {
					$tp += $value*$cred[0][$i];
					$i++;
				}

				$tp = $tp/19;
				break;

			case 5:
				foreach ($semGP as $value) {
					$tp += $value*$cred[0][$i];
					$i++;
				}

				$tp = $tp/19;
				break;
			case 6:
				foreach ($semGP as $value) {
					$tp += $value*$cred[0][$i];
					$i++;
				}

				$tp = $tp/19;
				break;

			case 7:
				foreach ($semGP as $value) {
					$tp += $value*$cred[0][$i];
					$i++;
				}

				$tp = $tp/19;
				break;

			case 8:
				foreach ($semGP as $value) {
					$tp += $value*$cred[0][$i];
					$i++;
				}

				$tp = $tp/19;
				break;

	
			
			default:
				
				break;
		}
	
		//echo "$tp";
		return $tp;
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

	<div class="w3-container">
	<?php 

		echo "<h2>Semester $semOpt GPA calculator</h2>" 

	?>
	<div style='text-align: right;'><a href='index.php' >Home</a></div>
	<div class="w3-card-4">
		<?php
    	echo '<div class="w3-container w3-green">';
    		if($x){
    			echo "<p>Enter your grade</p>";
    		}else{
    			echo "<p>Result</p>";
    		}
    	echo "</div>";	
    	?>
    	<form class="w3-container" action="SGPA.php" method="POST">

	<?php
	if ($x) {
			
		
		switch ($semOpt) {
  			case 1:
				echo "<h4><label>Mathematics - I	</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required> ";

				echo "<h4><label>Chemistry</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Basic Electrical Engineering	</label></h4>";	
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Engineering Workshop	</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>English</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Engineering Chemistry Lab	</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>English Language And Communication Skills Lab	</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Basic Electrical Engineering Lab	</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";



    		break;

    		case 2:
    			echo "<h4><label>Mathematics - II</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Applied Physics</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Programming for Problem Solving</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Engineering Graphics</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Applied Physics Lab</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Programming for Problem Solving Lab</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]' required>";

				echo "<h4><label>Environmental Science</label></h4>";
				echo "<input class='w3-input' type='number' name = 'marks[]'  value = '0' required>";

    		break;

    		case 3:



					
    		break;
    		default:
    			header("Location: don't_Tamper_URL.html");
    			break;
    	}

    	echo '<input type="submit" name = "submit" value="Calculate">';
    	echo '</form>';

    }else{
    	echo "<h4><label>your SGPA for Sem $semOpt is</label></h4>";
		echo "<input class='w3-input' type='number' value = $gpa readonly>";
    }
	?>
	
	    
  	</div>
	</div>


</body>
</html>

