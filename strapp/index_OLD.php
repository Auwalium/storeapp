<?php
include('functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link  href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<style>
* {
  box-sizing: border-box;
}

.container{
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}

.header, .footer,.hmenu {
  background-color: #6cc;
  color: white;
  padding: 15px;

}

.column {
  float: left;
  padding: 10px;
 
  
  
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
  
}

.menu {
  max-width: 30%;
  overflow-x: auto;
  

 
  
}

.content {
  width: 70%;
  height: 500px;
  overflow: hidden;
  

}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 8px;
  background-color: rgb(100 78 200);
  color: #ffffff;
  border-radius:20px; 
}

.menu li:hover {
  background-color: #0099cc;
}
.log{
  float: left;
  padding: 10px;
  padding-bottom: 10px;
  
}

a:link{
	color:white;
	text-decoration:none;
}
a:visited{
	color:white
	
}
a:hover{
	color:#9F3;
	text-decoration:blink;
	
}
a:active{
	color:#FFF;
	text-decoration:underline;
	background-color:


</style>
</head>
<body>
<div class="container">
            <div class="header">
              <img src="photo/fmc.gif" class="log"> <h4 class="logo">OHH, IF YOU ARE HERE, JUST TYPE /logout.php in addition to what is in your browser address and get out of this place eg strapp_test/logout.php</h4>
            </div>



            <div class="clearfix">
              <div class="column menu">
                <ul>
                  
                  <li><a href="login2.php"><span class="glyphicon glyphicon-log-in">Administration</span></a></li>
                  <li><a href="login3.php"><span class="glyphicon glyphicon-ok">Store</span></a></li>
                  <li><a href="login1.php"><span class="glyphicon glyphicon-user"></span>Applicant</a></li>
                  <li><a href="./login6/login5.php"><span class="glyphicon glyphicon-shopping-cart">Procurement</span></a></li>
                  <li><a href="./login7/login7.php"><span class="glyphicon glyphicon-globe">Company</span></a></li>
                  <li><a href="./login8/login8.php"><span class="glyphicon glyphicon-pencil">Audit</span></a></li>
                  <li><a href="./login9/login9.php"><span class="glyphicon glyphicon-stats">Account</span></a></li>
                  <li><a href="./login12/login12.php"><span class="glyphicon glyphicon-cog">CITTU</span></a></li>
                  <li><a href="./login10/login10.php"><span class="glyphicon glyphicon-cog">Head of Units</span></a></li>
				  
				 <li><a href="./login11/login11.php"><span class="glyphicon glyphicon-cog">Canteen</span></a></li>

                </ul>
              </div>
                

                <div class="column content">
                 <div class="column content" style="background-color: white; height: 10%; width:100%;">
                     <ul>
                         <!--<li></li>-->
                        
                     </ul>
                    
                </div>

                    <img class="mySlides" src="Photo/Air Condition.jpg" style="width:100%" height="80%">
                    <img class="mySlides" src="Photo/Funiture.jpg" style="width:100%" height="80%">
                    <img class="mySlides" src="Photo/table f.jpg" style="width:100%" height="80%">
                    <img class="mySlides" src="Photo/table2.jpg" style="width:100%" height="80%">
                    <img class="mySlides" src="Photo/table3.jpg" style="width:100%" height="80%">
                    <img class="mySlides" src="Photo/printer.jpg" style="width:100%" height="80%">
                    <img class="mySlides" src="Photo/Stepler.jpg" style="width:100%" height="80%">
                    <img class="mySlides" src="Photo/drawer.jpg" style="width:100%" height="80%">
                    <img class="mySlides" src="Photo/chair.jpg" style="width:100%" height="80%">

                     <button class="Store display-left" onclick="plusDivs(-1)">&#10094;</button>
                     <button class="Store display-right" onclick="plusDivs(1)">&#10095;</button>
              </div>
            </div>

            <div class="footer">
                <center><h4>copyright &copy Fmckeffi 2019</h4></center>
            </div>
</div>
<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); 
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>
