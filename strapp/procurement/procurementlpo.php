

<?php 
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
//echo ($currentDate);  
?> 

<?php
session_start();
?> 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing:border-box;
}
.Container{
  background-color:#6CC;
  width:1000px;
  height:auto;
  margin-left:auto;
  margin-right:auto;
  
}
.header{
  background-color:#6CC;
  height:50px;
  width:200px;
  text-align: left;
  font-family: Verdana, Geneva, sans-serif;
  color: #900;
  

}

.leftmenu {
  background-color:#6CC;
  padding:10px;
  float:left;
  height:550px;
  width:23%; /* The width is 20%, by default */
}

.main {
  background-color:#f1f1f1;
  padding:20px;
  height:550px;
  float:left;
  width:57%; /* The width is 80%, by default */
}

.leftmenu ul{
  list-style:none;
  padding:10 0 0 0;
  font-family:"Times New Roman", Times, serif;
  font-size:12px;
  font-style:normal;
  line-height: 5;
  text-align:left;
  outline: none;
  text-decoration: none;
  color:#333;
  text-transform:capitalize;
  margin:0px;
}
.Right{
	height:400px;
	width:15%;
	float:right;
	background-color:#333;
	position: static;
	visibility: visible;
}
#Applyonline{
	width:18%;
	height:100px;
	background-color:#FFF;
	position:fixed;
	float:left;
	bottom:65px;
	left:28%;
	clear:none;
}
#Applicant{
	width:18%;
	height:100px;
	background-color:#960;
	position:fixed;
	float:left;
	left:48.5%;
	bottom:65px;
	clear:none;
}
#AdminLogin{
	width:18%;
	height:100px;
	background-color:#960;
	position:fixed;
	float:left;
	left:69%;
	bottom:65px;
	clear:none;
}
.botton{
	width:60%;
	height:100px;
	display:flex;
	position:absolute;
	background-color:#CCC;
	
}
	
.Footer{
  background-color:#6CC;
  height:50px;
  clear: left;
}
h6{
	padding:10px;
	justify-content: center;
	text-decoration-color: #eddd;
	color: #333;
	margin: auto;
	width: auto;
	position: relative;
	visibility: visible;
	z-index: auto;
	height: auto;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
	clip: rect(auto,auto,auto,auto);
}

/* Use a media query to add a break point at 800px: */
@media screen and (max-width:1000px) {
  .Container, .leftmenu, .main, .Right, .Header, .Footer {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
#fmcl {
	background-color: #0CC;
	float: none;
	height: 49px;
	width: 49px;
	padding-top: 20px;
	padding-right: 10px;
	padding-bottom: 20px;
	padding-left: 10px;
	top: auto;
	bottom: auto;
	clip: rect(auto,auto,auto,auto);
}
	a{
		text-decoration:none;
		color:#666;
		
		
}
a:link{
	color:#333;
	text-decoration:none;
}
a:visited{
	color:#600;
	background-color:#F00;
}
a:hover{
	color:#9F3;
	text-decoration:blink;
	background-color:#FFF
}
a:active{
	color:#FFF;
	text-decoration:underline;
	background-color:
}
.Container .main center table {
	color: #FFF;
}
.Container .main center table {
	color: #C03;
}
</style>
</head>
<body>
<div class="Container">
  <div class="header"><img src="../Photo/care_logo_mysql.gif" alt="logo " width="49" height="49" hspace="50" vspace="30">   </div>
<div class="leftmenu">
  <ul>
    <li><a href="index.php">Back</a></li>
	<li><a href="../index.php?logout='1'">Log Out</a></li>

  </ul>
</div>

<div class="main">
  
  <h3 style="text-decoration:underline"><center>
  Raised LPO.
  </center></h3>
   <?php
session_start();
$rby = $_SESSION["username"];

  ?>
  
  <?php

//including the database connection file
include("../config.php");


if(isset($_POST['Submit'])) {
	
	$rby 			= $_SESSION["username"];
	$name           = mysqli_real_escape_string($mysqli, $_POST['name']);
	$qty      = mysqli_real_escape_string($mysqli, $_POST['qty']);
	$descrip          = mysqli_real_escape_string($mysqli, $_POST['descrip']);
	
	$rdate          = mysqli_real_escape_string($mysqli, $_POST['rdate']);
	$category          = mysqli_real_escape_string($mysqli, $_POST['category']);
	
	$result = mysqli_query($mysqli, "INSERT INTO raised(name, qty,descrip,rby,rdate, category,noti) 
		VALUES('$name','$qty','$descrip','$rby','$rdate','$category','1')");
		
		
		//display success message
		echo '<h3 style="text-decoration:underline" text-decoration-color = green ><center>LPO is successfully Raised</center></h3>';
}	
?>
  <form action="procurementlpo.php" method="post" name="form1">
		<table width="40%" align = "center"  border="10">
	
			<tr> 
				<td>Item Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Description</td>
				<td><input type="text" name="descrip"></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity</td>
				<td><input type="int" name="qty"></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			
			<tr> 
			<tr> 
				<td>Category</td>
				<td>
				  <select name="category">
                  
				
				                <option value = "Radiology">Radiology Revolving Fund</option>
				                <option value = "Dental">Dental Revolving Fund</option>
								<option value = "Laboratory">Laboratory Revolving Fund</option>
								<option value = "Pharmacy">Pharmacy Revolving Fund</option>
								<option value = "Theatre">Theatre Revolving Fund</option>		
								
				</select>
				
				</td>
			<tr> 
				<td>Raised by</td>
				<td><input type="text" name="rby" value='<?php echo $_SESSION['user']['username']; ?>' ></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			
			<tr> 
				<td> Date Requested</td>
				<td><input type="date" name="rdate" value=<?php echo ($currentDate) ?> ></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			
				
				<td><input type="submit" name="Submit" value="Add"></td>
				
			</tr>
 
 
  </table>
	</form> 
   
</div>
<div class="Footer">
  <h6 align="center">All Right reserved &copy Federal Medical Center, Keffi
  	<br> 
   	2018
    </h6>
  </div>
</div>
</body>
</html>

<html>
<head>
	<title>Add Data</title>
</head>

<body>


