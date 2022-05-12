<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>fmc keffi store</title>
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
					<div class="col-md-12" style="text-align: right; background-color: green; color: white;">
					<center><h3><i class="glyphicon glyphicon-phone-alt" >&nbsp</i>FMC DIRECTORY</h3><br>
					<a href="cug.php" target = 'new window' style="color:white;"> Click here to view FMC phone Directory</a><br>
                    <a href="Drugpolicyfmc.pdf" target = 'new window' style="color:white;"> Click here to view FMC DRUGS POLICY</a><br>
                    <a href="FMCSOP.pdf" target = 'new window' style="color:white;"> Click here to view FMC SOP</a><br></div>
					<div class="col-md-12 fmch"><img src="care_logo_mysql.gif " align="left"  style="padding: 20px;"><h2 >FMC KEFFI STORE</h2></div>
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
							<div class="col-md-6">
								<button type="submit" class="btn btn-primary" name="login_btn" >Login</button>
							</div>
							<div class="col-md-6">
								<button type="submit" class="btn btn-warning" name="ResetP" >Reset Password</button>
							</div>
					
					</div>
		
				</form>
			</div>
		</div>		
</body>
</html>