<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'emedion', 'Password', 'inventory');

// variable declaration
$username = "";
$email    = "";
$errors   = array();
$secret_code = ""; 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$user_type   =  e($_POST['user_type']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$created_by  =  e($_POST['created_by']);
	$secret_code  =  e($_POST['secret_code']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
	if (empty($created_by)) { 
		array_push($errors, "Enter your name"); 
	}
	
	if ($secret_code != CITTU0001 ) {
		array_push($errors, "Invalid secret code");
	}
	if (empty($secret_code)) { 
		array_push($errors, "Enter your secret code here"); 
	}
	

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password,created_by,secret_code) 
					  VALUES('$username', '$email', '$user_type', '$password','$created_by','$secret_code')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: login.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password,created_by,secret_code) 
					  VALUES('$username', '$email', 'user', '$password','$created_by','$secret_code')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: login.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
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

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'md/ce') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: md/index.php');		  
			}elseif ($logged_in_user['user_type'] == 'store') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: store.php');
			}elseif ($logged_in_user['user_type'] == 'H_admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/index.php');
			}
			elseif ($logged_in_user['user_type'] == 'H_clinical') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: clinical/index.php');
			}elseif ($logged_in_user['user_type'] == 'user') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: addstock4/index.php');
			}elseif ($logged_in_user['user_type'] == 'H_account') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: headaccount/index.php');
			}elseif ($logged_in_user['user_type'] == 'audit') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: audit.php');
			}elseif ($logged_in_user['user_type'] == 'procurement') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: procurement.php');
			}elseif ($logged_in_user['user_type'] == 'cittu') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: cittu.php');
			}elseif ($logged_in_user['user_type'] == 'company1') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: procurement/company1/index.php');
			}elseif ($logged_in_user['user_type'] == 'company2') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: procurement/company2/index.php');
			}elseif ($logged_in_user['user_type'] == 'account') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: account.php');
			}elseif ($logged_in_user['user_type'] == 'unit') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: hunits.php');
				
			}elseif ($logged_in_user['user_type'] == 'headofstore') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:approved4/index.php ');
				
			}elseif ($logged_in_user['user_type'] == 'headofnursing') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:nursing/index.php ');	
				
			}elseif ($logged_in_user['user_type'] == 'headofunits') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:hunits.php ');	
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: login.php');
			}

		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}


function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}	
