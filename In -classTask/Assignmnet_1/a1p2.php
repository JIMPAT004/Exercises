<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post" action="a1p2.php">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label>
	<input type="radio" name="newsletter" value="Y" <?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == "Y") echo 'checked="checked"';?>> Yes 
	<input type="radio" name="newsletter" value="N" <?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == "N") echo 'checked="checked"';?>> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (empty($_POST['firstname'])) {
		echo 'First name must not be empty!';
	} elseif(empty($_POST['lastname'])){
		echo 'Last name must not empty!';
	} elseif(empty($_POST['age'])){
		echo 'Age must not empty!';
	} elseif(empty($_POST['newsletter'])){
		echo 'Subscribe selection must not empty!';
	} elseif(!is_numeric($_POST['age'])){
		echo "Please Enter numerical value for age!";
	} 
	else{
		echo "<p>Hello ".$_POST['firstname']." ".$_POST['lastname']; 		
		echo "<p>You are ".$_POST['age']." years old.</p>";
		if ($_POST['newsletter'] === "Y"){
			echo "<p>You are Subscribe to Newsletter.</p>";
		} elseif ($_POST['newsletter'] === "N"){
			echo "<p>You are  not Subscribe to Newsletter.</p>";
		}
	}
}
?>

</body>
</html>