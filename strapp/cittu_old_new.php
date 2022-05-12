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
	<title>Reggister</title>
	<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.min.css">
	<script type="text/javascript" src="boot/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="regc.css">
</head>
<body>
<div class="container">
	<div style="width: 80%; background-color: inherit; margin-left: auto; margin-right: auto;">
	<form method="post" action="cittu.php">
		
		<div class="row padder">
			<div class="col-md-2"><img src="photo/care_logo_mysql.gif " align="right" style="padding-top: 10px;"></div>
			<div class="col-md-10 fmckh" ><h1>FEDERAL MEDICAL CENTER KEFFI</h1></div>
			<div class="col-md-12"><center><h1 class="rgh">Register</h1></center><h1></div>
			<!--addtion-->
			<div class="col-md-12"><center class="error"><?php echo display_error(); ?></center></div>
			<div class="col-md-2"><label class="lableft">Full Name</label></div>
			<div class="col-md-4">
				<div class="input-group" >
					<span class="input-group-addon"><i class="glyphicon glyphicon-user" style="background-color: white;color: black;"></i></span>
					<input type="text" name="fname" value="<?php echo $fname; ?>">
			</div>
			</div>
			<div class="col-md-6">
					<div class="row ">
						<div class="col-md-2 "><label class="lableft">Dept.</label></div>
						<div class="col-md-4">
							
							<input type="text" name="dept" value="<?php echo $dept; ?>">
						</div>
						<div class="col-md-2 padder"><label class="lableft">Unit</label></div>
						<div class="col-md-4">
							<input type="text" name="unit" value="<?php echo $unit; ?>">
						</div>
					</div>
			</div>	
			
			
			<!--End-->
			<div class="col-md-2 padder padder"><label class="lableft">Username</label></div>
			<div class="col-md-4 padder padder"><input type="text" name="username" value="<?php echo $username; ?>"></div>
			<div class="col-md-2 padder"><label class="lableft">Phone</label></div>
			<div class="col-md-4 padder input-group">
				<span class="input-group-addon"><i class="glyphicon 	glyphicon glyphicon-phone-alt" style="background-color: white;color: black;"></i></span>
					<input type="text" minlength="11" maxlength="11" name="phone" value="<?php echo $phone; ?>" >

			</div>
			<div class="col-md-2 padder"><label class="lableft">User type</label></div>
			<div class="col-md-4 padder">
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
			<div class="col-md-2 padder "><label class="lableft">Password</label></div>
			<div class="col-md-4 padder input-group">
				<span class="input-group-addon"><i class="glyphicon 	glyphicon glyphicon-lock" style="background-color: white;color: black;"></i></span>
				<input type="password" name="password_1">
			</div>
			<div class="col-md-2 padder"><label class="lableft">Confirm password</label></div>
			<div class="col-md-4 padder ">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon 	glyphicon glyphicon-lock" style="background-color: white;color: black;"></i></span>
				<input type="password" name="password_2">
				</div>
			</div>
			<div class="col-md-2 padder"><label class="lableft">Registered by</label></div>
			<div class="col-md-4 padder">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-pencil" ></i> </span>
				<input type="text" name="created_by" value="<?php echo $created_by; ?>" >
				</div>
			</div>
			<div class="col-md-2 padder"><label class="lableft">Your secret code:</label></div>
			<div class="col-md-4 padder"><input type="password" name="secret_code" value="<?php echo $secret_code; ?>" ></div>
			<div class="col-md-2 padder"><button type="submit" class="btn" name="register_btn" style="background-color: green; color: white;">Register</button>
			</div>
			<div class="col-md-2 col-md-offset-2" ><a href="register.php?logout='1'" style=" font-size: 25px;   width: 20%; text-align: right;"><span class="glyphicon glyphicon-off padder" ></span > logout</a>
			</div>

			

		</div>	
	</form>
</div>
</div>
</body>
</html>