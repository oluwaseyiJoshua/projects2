<?php
// call the login() function if register_btn is clicked
if (isset($_POST['login'])) {
	login();
}

// LOGIN USER
function login(){
	global $dbname, $email, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($dbname, $query);

		if (mysqli_num_rows($results) == 3) { // user found
			// check if user is admin or user
	
		
		else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
?>