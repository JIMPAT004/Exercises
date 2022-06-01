<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post" action="a1p3.php">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	function checkChar($str){

		$array = str_split($str);
		sort($array);
		$flag = "false";
		$b = "";
		
		
		foreach($array as $a) {
			if($a == $b) {
				$flag = "true";
			}
			$b = $a;
		}
		
		if($flag == "false"){
			echo "<strong>String does not have reapiting letter.</strong>";
		}else{
			echo "<strong>String have repeating letter.</strong>";
		}
	}
	
	if (!empty($_POST['firstname'])) {
		$name = $_POST["firstname"];
		checkChar($name);
	} 

	
	
}

?>

</body>
</html>