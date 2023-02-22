<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	// prevent injections

	// connect to database

	$db = mysqli_connect("localhost", "root", "", "website");

	// query the database for user


	$result = mysqli_query($db, "select * from users where username='$username' and password='$password'");
	
	if(mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		if ($row['username'] == $username && $row['password'] == $password) {
			echo "Login success! Welcome ".$row['username']; 
		} else {
			echo "Failed to login";
		}
	} else {
		echo "Username or password not found";
	}
?>
