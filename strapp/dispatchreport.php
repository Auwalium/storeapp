





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
  height:100px;
  width:15%;
  text-align: left;
  font-family: Verdana, Geneva, sans-serif;
  color: #900;

}
.son{
	text-align: left;
	color: #900;
	font-size: 22px;
}
.InHeader{
	width:45%;
	height:100px;
	float:left;
	position:absolute;
	left: 600px;
	top: 17px;
	font-family: Tahoma, Geneva, sans-serif;
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
  font-size:16px;
  font-style:normal;
  line-height: 2;
  outline: none;
  text-decoration: none;
  color:#333;
  text-transform:capitalize;
  margin:0px;
}
.Right{
	height:400px;
	width:14%;
	float:right;
	background-color:#CC6;
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
p{
	text-decoration-color:#F33;
	justify-content:left;
	margin-bottom:auto;
	padding-top: 36px;
	padding-bottom: 0px;
	color: #600;
	font-size: 20px;
	font-style: oblique;
	font-weight: bold;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
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
.mySlides
	{
		display:none;
	}
.btn{
	background-color:inherit;
	padding:15px 30px;
	font-size:18px;
	width:100%;
	display:block;
	border-radius:40%;
	transition-duration:0.4s;	
	}
.AddItem{
	background-color:#0C3;
	
	}
.Modify{
	background-color:#FF9;
	}
.Remove{
	background-color:#F33;
	}
.GenR{
	background-color:#9FF;
	}

</style>
</head>
<body>
<div class="Container">
  <div class="header"><img src="Photo/care_logo_mysql.gif" alt="logo " width="49" height="49" hspace="50" vspace="30">
  </div>
 <div class="InHeader">
   <h3 class = "son">Welcome to Central Store, Federal Medical Center Keffi</h3>
 </div>

<div class="leftmenu">
  <ul>
    <li><a href="AdminPage.php">Home</a></li>
	<li><a href="login.php">Log Out</a></li>
	<li><a href="reset-password.php">Reset Password</a></li>
  </ul>
</div>


<div class="main">
  
  <h1 style="text-decoration:underline"><center>
 DISPATCH REPORT
  </center></h1>
  
  


<h3> Search items Distributed  Between a Specific Period</h3>
<hr/>

<form class="search" action="" method="post">

<table class="px_sum">
<tr><td><input type="text" name="search" placeholder="yyyy/mm/dd"></td>
<td><input type="text" name="search1" placeholder="yyyy/mm/dd"></td>
<td><input type="submit" name="submit" value="Query Distributed items "></td>
</tr>
</table>
</form>


<table class="px_sum">

<tr><td>
<?php
//if(isset($_POST["search"])){
// $search_value =  $_POST["search"];
// $search_value1 = $_POST["search1"];
	
	
	
//$databaseHost = 'localhost';
//$databaseName = 'inventory';
//$databaseUsername = 'root';
//$databasePassword = '';

//$mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName); 


	 //$query="select * from dispatch where  CAST(bill_date AS ddate)>='$search_value' AND CAST(bill_date AS ddate)<='$search_value1'";                    
     //$result=mysqli_query($mysqli,$query);}

 		
 //  $query="select * from dispatch where  CAST(bill_date AS ddate)>='$search_value' AND CAST(bill_date AS ddate)<='$search_value1'";                    
//  $result=mysqli_query($mysqli,$query);}


		
			//while($row=mysqli_fetch_array($result)){
     //$id=$row['id'];
	//$code=$row['code'];
    //$name=$row['name'];
	//$snum=$row['snum'];
    //$dept=$row['dept'];
   // $sname=$row['sname'];
    //$qunn=$row['qunn'];
	//$ddate=$row['ddate'];
	

		
		//echo $id;
		//echo $code;
		//echo $snum;
		//echo $dept;
		//echo $sname;
		//echo $qunn;
		//echo $ddate;
            
		//		mysqli_close($mysqli);
	//}
        
	
        
?>
</td></tr>
</table>

<h3> Search specific items by thier name</h3>
<hr/>

  
  	<form class="form-inline my-2 my-lg-0" method="post" action= "dispatchreportprocess.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter good name" aria-label="Search" name="name">
      <input type="submit" id="inputbtn" name="search_submit" value="Search">
    </form>
  
  
  
</div>

 
</div>
<div class="Right">NEED MORE LIGHT?
<div class="RightMenu">
  <ul>
    <li><a href="#">FAQ</a></li>
	<li><a href="#">Call Us</a></li>
	<li><a href="ask.php">Ask</a><a href="#"></a></li>
    <li><a href="#">Mail Us</a></li>
    
  </ul>
</div>
</div>
<div class="Footer">
  
</div>
</div>
  
</div>

	
</body>
</html>
