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
  margin-left: auto;
  margin-right: auto;
  

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
}
.operation{
    width:50%;
    display: block;
    padding: 10px;
    background-color: whitesmoke;
}
button.btno{
    width: 45%;
    background-color: whitesmoke;
    color: black;
    align: center;
    font-size: 1em;
    text-align: left;
    border-radius: 0px 20px;
    padding: 8px;
    margin: 8px;
}
</style>

</head>
<body>

<div class="container">
            <div class="header">
              <img src="photo/fmc.gif" class="log"> <h4 class="logo">FEDERAL MEDICAL CENTER KEFFI CENTRAL STORE</h4>
            </div>
<div class="well" style="display: table;">
    <h4>Welcome </h4>
      <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: green; font-size: 16px;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="procurement.php?logout='1'" style="color: red; font-size: 16px;">logout</a>
          </small>

        <?php endif ?>
    
  </div>  


            <div class="clearfix">
              <div class="column menu">
                <ul>
                  
                
                  <li><a href="./login6/login5.php"><span class="glyphicon glyphicon-shopping-cart">Procurement</span></a></li>
                 
                  <li><a href="procurement.php?logout='1'"><span class="glyphicon glyphicon-off" style="background-color:rgb(100 78 200);"></span> logout</a></li>

                </ul>
              </div>
                

                <div class="column content" style="overflow-y: auto; overflow-x: auto;">
                 <div class="column content" style="background-color: white; height: 10%; width:100%;">
                     <ul>
                         <!--<li></li>-->
                        
                     </ul>
                    
                </div>
                    <h1><center>You can carry out the following Operation.<br><br></center></h1>
                    <!--<div class="operation">-->
                    

                    
  
    
                            <button class="btno" onClick="window.location.href='procurementlpo.php'"> RAISE LPO</button>
                            <button class="btno" onClick="window.location.href='./procurement/quotation'" > QUOTATIONS</button>  

                            <button class="btno" onClick="window.location.href='./approved1'">Approved LPO</button>
                            <button class="btno" onClick="window.location.href='./addstock10'">REPORTS</button> 
                    <!--</div>-->
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


