<?php
	$firstName = $_GET['firstName'];
	$lastName = $_GET['lastName'];
	$age = $_GET['age'];
	$email = $_GET['email'];
	echo "<h2>Tasso Mevissen MG1c</h2> ";
	echo "<h3>Response Form_2</h3><h4> ";
	echo "You submitted the following information<br><ul>";
	echo "<li>Name: <strong> $firstName</strong></li>";
	echo "<li>Last: <strong> $lastName</strong></li>";
	echo "<li>Age: <strong> $age</strong></li>";
	echo "<li>Email: <strong> $email</strong></li>";
	echo "</li></ul></h4>";
?>
