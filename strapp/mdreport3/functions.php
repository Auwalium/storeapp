<?php 
session_start();

// connect to database

include('connect.php'); 
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
				header('location: mdreport/addstock4/index.php');		  
			}elseif ($logged_in_user['user_type'] == 'student') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: student/index.php');
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
					
				
			}elseif ($logged_in_user['user_type'] == 'theatre') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_theatre/index.php ');	
				
				}elseif ($logged_in_user['user_type'] == 'unused') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_unused/index.php ');	
				
			}elseif ($logged_in_user['user_type'] == 'officeequipment') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_officeequipment/index.php ');	
			}elseif ($logged_in_user['user_type'] == 'hospitalequipment') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_hospitalequipment/index.php ');		
			}elseif ($logged_in_user['user_type'] == 'scrap') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_scrap/index.php ');		
			}elseif ($logged_in_user['user_type'] == 'maintenance') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_maintenance/index.php ');		
			}elseif ($logged_in_user['user_type'] == 'stationary') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_stationary/index.php ');		
			}elseif ($logged_in_user['user_type'] == 'radiology') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_radiology/index.php ');		
				
			}elseif ($logged_in_user['user_type'] == 'laboratory') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:addstock_laboratory/index.php ');

			}elseif ($logged_in_user['user_type'] == 'hcittu') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: recommcittu/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'scittu') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: addstock_cittu/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'theatrerf') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: addstock_theatre/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'laboratoryrf') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: addstock_lab/index.php');
			
			}elseif ($logged_in_user['user_type'] == 'dentalrf') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: addstock_dental/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'pharmacyrf') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: addstock_pharmacy/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'hpharmcy') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: recommpharm/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'hdental') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: recommden/index.php');
			}elseif ($logged_in_user['user_type'] == 'hradiology') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: recommrad/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'hlaboratory') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: recommlab/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'htheatre') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: recommthea/index.php');
				
			}elseif ($logged_in_user['user_type'] == 'hmaintenance') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: hm/index.php');
			
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