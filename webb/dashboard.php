<?php require_once 'core/init.php'; 

if(not_logged_in() === TRUE) {
	header('location: login.php');
}

$userdata = getUserDataByUserId($_SESSION['id']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

<ul>
	<li>Hello , <?php echo $userdata['username']; ?></li>
	<li><a href="profile.php">Profile</a></li>
	<li><a href="setting.php">Setting</a></li>
	<li><a href="changepassword.php">Change Password</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>


</body>
</html>