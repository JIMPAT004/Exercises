<?php

$name = array("billgates", "ballmer", "prinz", "nadella");

if ( empty($_POST['username'])){
	echo "Username Should not be empty";
}elseif (empty($_POST['password'])){
	echo "Password Should not be empty";
}
else{
	
	$userName = $_POST['username'];

	if (in_array($userName, $name))
	  {
	  echo "Error : User already exist!";
	  }
	else
	  {
		  array_push($name,$userName);
		  
		  foreach($name as $nameArray){
			echo "<p>$nameArray</p>";

		  }
	  }
	  
	
}
?>