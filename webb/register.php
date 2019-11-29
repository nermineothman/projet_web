<?php 

require_once 'core/init.php';

if(logged_in() === TRUE) {
	header('location: dashboard.php');
}

// form is submitted
if($_POST) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if($fname == "") {
		echo " * First Name is Required <br />";
	}

	if($lname == "") {
		echo " * Last Name is Required <br />";
	}

	if($username == "") {
		echo " * Username is Required <br />";
	}

	if($password == "") {
		echo " * Password is Required <br />";
	}

	if($cpassword == "") {
		echo " * Conform Password is Required <br />";
	}

	if($fname && $lname && $username && $password && $cpassword) {

		if($password == $cpassword) {
			if(userExists($username) === TRUE) {
				echo $_POST['username'] . " already exists !!";
			} else {
				if(registerUser() === TRUE) {
					echo "Successfully Registered <a href='login.php'>Login</a>";
				} else {
					echo "Error";
				}
			}
		} else {
			echo " * Password does not match with Conform Password <br />";
		}
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<div>
		<label for="fname">First Name: </label>
		<input type="text" name="fname" placeholder="First Name" autocomplete="off" value="<?php if($_POST) {
			echo $_POST['fname'];
			} ?>" />
	</div>
	<br />

	<div>
		<label for="lname">Last Name: </label>
		<input type="text" name="lname" placeholder="Last Name" autocomplete="off" value="<?php if($_POST) {
			echo $_POST['lname'];
			} ?>" />
	</div>
	<br />

	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" placeholder="Username" autocomplete="off" value="<?php if($_POST) {
			echo $_POST['username'];
			} ?>" />
	</div>
	<br />

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" placeholder="Password" autocomplete="off" />
	</div>
	<br />

	<div>
		<label for="cpassword">Conform Password: </label>
		<input type="password" name="cpassword" placeholder="Conform Password" autocomplete="off" />
	</div>
	<br />
	<div>
		<button type="submit">Create</button>
		<button type="reset">Cancel</button>
	</div>

</form>

Already Registered ? Click <a href="login.php">login</a> 

</body>
</html>