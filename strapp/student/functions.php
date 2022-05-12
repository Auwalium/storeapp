<?php 
session_start();

// connect to database
include('../connect.php');
// variable declaration
$fname    =  "";
$dept      =  "";
$username = "";
$phone    = "";
$errors   = array();
$secret_code = "";


// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $fname,$dept, $unit, $username, $phone;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
    $fname    =  e($_POST['fname']);
    $dept      =  e($_POST['dept']);
    $unit    =  e($_POST['unit']);
	$username    =  e($_POST['username']);
	$phone       =  e($_POST['phone']);
	$user_type   =  e($_POST['user_type']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$created_by  =  e($_POST['created_by']);
	$secret_code  =  e($_POST['secret_code']);

	// form validation: ensure that the form is correctly filled
	if (empty($fname)) { 
		array_push($errors, "Full name  is required"); 
	}
	if (empty($dept)) { 
		array_push($errors, "Department is required"); 
	}
	if (empty($unit)) { 
		array_push($errors, "Unit is required"); 
	}
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($phone)) { 
		array_push($errors, "phone is required"); 
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
			$query = "INSERT INTO users (fname, dept, unit, username, phone, user_type, password,created_by,secret_code) 
					  VALUES('$fname','$dept', '$unit', '$username', '$phone', '$user_type', '$password','$created_by','$secret_code')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: login.php');
		}else{
			$query = "INSERT INTO users (fname,dept, unit, username, phone, user_type, password,created_by,secret_code) 
					  VALUES('$fname','$dept', '$unit', '$username', '$phone', 'user', '$password','$created_by','$secret_code')";
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
		//Added to show user detail
          $sql = "SELECT usrername, phone FROM users WHERE username = '" . $_SESSION['username'] . "'";
          $result = mysqli_query($db, $sql);
          $row = mysqli_fetch_array($result);
          //echo "Hello, " . $row['name'] . " (" . $row['phone'] . ").";
 //end 

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'md') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: md/index.php');		  
			
			}elseif ($logged_in_user['user_type'] == 'cashier') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:cashier/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'student') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:index.php ');
				
			}elseif ($logged_in_user['user_type'] == 'ss1a') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:ss1a/index.php ');	
			
			}elseif ($logged_in_user['user_type'] == 'ss1b') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:ss1b/index.php ');	
				
			}elseif ($logged_in_user['user_type'] == 'ss2a') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:ss2a/index.php ');	
			}elseif ($logged_in_user['user_type'] == 'ss2b') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:ss2b/index.php ');	
			}elseif ($logged_in_user['user_type'] == 'ss3a') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:ss3a/index.php ');	
			}elseif ($logged_in_user['user_type'] == 'ss3b') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:ss3b/index.php ');	
			}elseif ($logged_in_user['user_type'] == 'js3a') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:js3a/index.php ');	
			}elseif ($logged_in_user['user_type'] == 'js3b') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:js3b/index.php ');
				
				
			}elseif ($logged_in_user['user_type'] == 'js2a') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:js2a/index.php ');	
				
			}elseif ($logged_in_user['user_type'] == 'js2b') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:js2b/index.php ');	
				
			}elseif ($logged_in_user['user_type'] == 'js1a') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:js1a/index.php ');	
				
				
			}elseif ($logged_in_user['user_type'] == 'js1b') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:js1b/index.php ');	
				
			}elseif ($logged_in_user['user_type'] == 'storeman') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:store/index.php ');	
			}elseif ($logged_in_user['user_type'] == 'teacher') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:teachers/index.php ');		
				
			}elseif ($logged_in_user['user_type'] == 'librarian') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:librarian/index.php ');	
			
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