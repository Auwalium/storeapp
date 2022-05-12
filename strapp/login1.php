<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>fmc keffi store</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
	
</head>
<body>
		
				<div class="header">
					<h2>Fmc keffi store</h2>
					<a href="cug.php" target = 'new window' style="color:white;"> Click here to view FMC phone Directory</a>
				</div>
				<form method="post" action="login.php">

					<?php echo display_error(); ?>

					<div class="input-group">
						<label>Username</label>
						<input type="text" name="username" id="usname" >
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password">
					</div>
					<div class="input-group">
						<button type="submit" class="btn" name="login_btn">Login</button>
					</div>
					
					
		
				</form>
				
</body>
</html>