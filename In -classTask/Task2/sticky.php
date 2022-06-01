<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (empty($_POST['firstname']) || empty($_POST['lastname'])) {
		echo 'Blank entry not allowed';
	} else {
		echo 'Thank you for the submission';
	}
}
?>

<html>
<head>
	<title>Sticky form</title>
</head>
<body>

<form method="POST" action="sticky.php">

	First Name: <input type="text" name="firstname" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>">

	Last Name: <input type="text" name="lastname" value="">
	
	<input type="submit" name="submit">
</form>

</body>
</html>




