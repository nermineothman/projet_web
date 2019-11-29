<?php 

require_once 'core/init.php';

if(logged_in() === TRUE) {
	header('location: dashboard.php');
}

// form submiited
if($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "") {
		echo " * Username Field is Required <br />";
	}

	if($password == "") {
		echo " * Password Field is Required <br />";
	}

	if($username && $password) {

		if(userExists($username) == TRUE) {
			
			$login = login($username, $password);
			if($username == "admin") {
	
				header('location: dashbordA.php');
				exit();
					
			} 
			
			else if($login) {
				$userdata = userdata($username);

				$_SESSION['id'] = $userdata['id'];

				header('location: index2.php');
				exit();
					
			} else {
				echo "Incorrect username/password combination";
			}
		} else{
			echo "username does not exists";
		}
	}

} // /if


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" autocomplete="off" placeholder="Username" />
	</div>
	<br />

	<div>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" autocomplete="off" placeholder="Password" />
	</div>
	<br />

	<div>
		<button type="submit">Login</button>
		<button type="reset">Cancel</button>
	</div>
	
</form>

Not Registered ? Click <a href="register.php">Register</a> 

</body>
</html>