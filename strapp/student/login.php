<?php 
include('functions.php') 

?>
<!DOCTYPE html>
<html>
<head>
	<title>school manager</title>
	<link rel="stylesheet" type="text/css" href="regc.css">
	<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.min.css">
	<script type="text/javascript" src="boot/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F8F8FF; padding-top: 50px;">
		<div class="container" style="margin-right: auto; margin-left: auto;">
			<div class="wrapper " style="width: 40%; margin: auto;">
				<!--<div class="header">
					<h2>Fmc keffi store</h2>
					<a href="cug.php" target = 'new window' style="color:white;"> Click here to view FMC phone Directory</a>
				</div>-->
				<form method="post" action="login.php">
					<div class="row">

					<!--<div class="col-md-1 padder" style="text-align: right; background-color: green; color: white;"><i class="glyphicon glyphicon-phone-alt" ></i></div>-->
					<div class="col-md-12" style="text-align: right; background-color: green; color: white;"><center><h3><i class="glyphicon glyphicon-phone-alt" >&nbsp</i>SCHOOL PLUS<sup>+</sup> SOLUTION</h2></div>
						    </h3></center></div>
					
					<div class="col-md-12 fmch"><img src="care_logo_mysql.gif " align="left"  style="padding: 20px;"><h2 >SCHOOL MANAGER</h2></div>
						
						<div class="col-md-12 "><center class="error"><?php echo display_error(); ?></center></div>
							

							<div class="input-group padder ">

								<label class="lableft">Username:</label>
								<span class="input-group-addon"><i class="glyphicon glyphicon-user">  </i></span>
									<input type="text" name="username" id="usname" >
							</div>
							<div class="input-group  padder">
								<!--<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<label>Password</label>
								<input type="password" name="password">-->
								<label class="lableft">Password:</label>
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock">  </i></span>
									<input type="password" name="password" >
							</div>
							<div class="col-md-4">
								<button type="submit" class="btn btn-primary" name="login_btn" ><h5>Login</h5></button>
							</div>
							<div class="col-md-4">
								<button type="submit" class="btn btn-warning" name="ResetP" ><h5>Reset Password</h5></button>
							</div>
							<div class="col-md-4">
								
								 <a href="../index.php?logout='1'" class="btn btn-primary" name="ResetP" ><h5>Back to Website</h5></a>
							</div>
					
					</div>
		
				</form>
			</div>
		</div>		
</body>
</html>