<?php
include('functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="reg.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="store">Store staff</option>
				<option value="user">User</option>
				<option value="unit">Head of unit</option>
				<option value="audit">Audit Staff</option>
				<option value="procurement">Procurement staff</option>
				<option value="account">Account staff</option>
				<option value="company1">Company 1</option>
				<option value="company2">Company 2</option>
				
				<option value="theatre">Store theatre</option>
				<option value="officeequipment">Store Office Equipment</option>
				<option value="scrap">Store Scrap</option>
				<option value="maintenance">Store Maintenance </option>
				<option value="stationary">Store Stationary</option>
				<option value="radiology">Store Radiology</option>
				<option value="laboratory">Store Laboratory</option>
				<option value="hospitalequipment">Store Hospital Equipment</option>
				
			</select>
		</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<label>Registered by:</label>
		<input type="text" name="created_by" value="<?php echo $created_by; ?>" >
	</div>
	<div class="input-group">
		<label>Your secret code:</label>
		<input type="password" name="secret_code" value="<?php echo $secret_code; ?>" >
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<div><a href="register.php?logout='1'"><span class="glyphicon glyphicon-off" style="background-color:rgb(100 78 200);"></span> logout</a>
	</div>
</form>
</body>
</html>