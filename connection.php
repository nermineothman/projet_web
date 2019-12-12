<?php
  $con = mysqli_connect('localhost', 'root', '','login_registration');

if($con) {
	//echo "connection successfull";
} else {
	echo mysqli_connect($con);	
}
?>