
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
  height:100px;
  width:400px;
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
  <div class="header"><img src="Photo/care_logo_mysql.gif" alt="logo " width="49" height="49" hspace="50" vspace="30">   </div>
<div class="leftmenu">
 <ul>
    <li><a href="store.php">Back</a></li>
	<li><a href="logout.php">Log Out</a></li>
	<li><a href="search6.html">Click Here to Dispatch</a></li>

  </ul>
</div>

<div class="main"><center>
  <table width="546" border="15" bordercolor="#6CC" align="center" cellpadding="10" cellspacing="20" >
   
  </table></center>
  
  	<form class="form-inline my-2 my-lg-0" method="post" action= "search5.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter dept name" aria-label="Search" name="dept">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
    </form>
  
  
  




<?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $dept = $_POST['dept'];
  $dispatchby = $_SESSION["username"];
  	

  
  
 $query="select * from approveditem where dept='$dept';  ";

	  $result=mysqli_query($mysqli,$query);
	 
	echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:green;text-align:center;padding-top:50px;">
  <div class="container1" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Approve Item by dept/unit to be Dispatched</h3><br>
  <table class="table table-hover">
  <thead>
    <tr>
      
      <th>Item Name</th>
	  
	  <th>Dept </th>
      <th>Approved br</th>
     
    </tr>
  </thead></center>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    
    $name=$row['name'];
	
	 
    $dept=$row['dept'];
    $appv=$row['appv'];
    
	
	
	
	
	
    echo '<tr>
      
      <td>'.$name.'</td>
	  <td>'.$dept.'</td>
	  <td>'.$appv.'</td>
      <td><form class="form-inline my-2 my-lg-0" method="post" action= "search7.html"><input type="submit"  name="dispatch" value="Dispatch"></td>
    </tr><br>';
	

  }
  
  echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
   
</html>';

 
	 
 }


?>
  
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


