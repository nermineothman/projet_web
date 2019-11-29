<?php 

require_once 'core/init.php';

if(logged_in() === TRUE) {
	header('location: dashboard.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Procedural PHP </title>
</head>
<body>

<a href="login.php">Login</a> or <a href="register.php">Register</a>

</body>
</html>