<!DOCTYPE html>
<html>
<head>
	<title>ask us</title>
	<link rel="stylesheet" type="text/css" href="CSS/ask.css">
	<style>
		body{
			background-color: #6CC;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="menu"><?php include'menu.php';?></div>
		<div class="ask">
			<h1>Ask Your Question Here.</h1>
			<form method="get" name="ask">
			<label>Your Name:</label>
			<input type="text" name="Yname" class="ask">
			<label>Eamil:</label>
			<input type="Eamil" name="Yemail" class="ask">
			<label>Question:</label>
			<textarea cols="20" rows="10" name="Question"></textarea>
			<br>
			<input type="submit" value="send" name="send">
			</form>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="footer"></div>		
	</div>
</body>
</html>