
<?php
session_start();
$dispatchby = $_SESSION["username"];
  	?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="CSS/iteminfo.css">
<link  href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<style>
.tdclass{
width:40%;
}
</style>
</head>
<body>
<div class="Container">
  <div class="header"><img src="Photo/care_logo_mysql.gif" alt="logo " width="49" height="49" hspace="50" vspace="30">
  </div>
 <div class="InHeader">
   <p>Welcome to Central Store, Federal Medical Center Keffi</p>
 </div>
<div class="leftmenu">
 <ul>
    <li><a href="store.php">Home</a></li>
	<li><a href="logout.php">Log Out</a></li>
	
  </ul>
</div>

<div class="main">
  <h1 style="text-decoration:underline"><center>
  Add New Goods to Store.
  </center></h1>
  <?php
session_start();
$dispatchby = $_SESSION["username"];
  	?>
  <form action="iteminfo.php" method="post" name="form1">
		<table width="100%" align = "center" border="0">
			<tr> 
				<td class="tdclass">LPO No</td>
				<td><input type="text" name="code"></td>
			</tr>
			
			<tr> 
				<td>Item Model</td>
				<td><input type="text" name="model"></td>
			</tr>
			<tr> 
				<td>Supplier Name</td>
				<td><input type="text" name="sname"></td>
			</tr>
			<tr> 
				<td>Date of supply</td>
				<td><input type="date" name="dsup"></td>
			</tr>
			<tr> 
				<td>Item name</td>
				<td><input type="text" name="name">
				
				</td>
			</tr>
			
			<tr> 
				<td class="tdclass">Recieved By</td>
				<td><input type="int" name="rname"   value=<?php echo "$dispatchby" ?>  ></td>
			</tr>
			
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			
			
			
			
			<tr> 
				<td>Item category</td>
				<td>
				  <select name="category">
                  
				
				                <option value = "Hospital Equipment">Hospital Equipment</option>
				                <option value = "Office Equipment">Office Equipment</option>
								<option value = "Office Stationary">Office Stationary</option>
								<option value = "Maintenace Items">Maintenace Items</option>
								<option value = "Scrap">Scrap</option>




				</select>
				
				</td>
				
			<tr> 
				<td>Unit Price</td>
				<td><input type="int" name="sprice"></td>
			</tr>
			
			<tr> 
				<td>Quantity</td>
				<td><input type="int" name="slevel"></td>
			</tr>
			
			<tr> 
				<td>Manufacture Date</td>
				<td><input type="date" name="mdate"></td>
			</tr>
			 
			<tr> 
				<td>Expiry date</td>
				<td><input type="date" name="edate"></td>
			</tr>
			<tr> 
				
				<td><input type="submit" name="Submit" value="Add"></td>
				
			</tr>

			<a href="search3.html"  style="color:crimson; font-weight:normal;  text-decoration:none;">Check Item You Have Added</a><br>
<?php
session_start();
$dispatchby = $_SESSION["username"];
$itemname = $_SESSION["name"];

  ?>

<?php
session_start();
//including the database connection file
include("config.php");

if(isset($_POST['Submit'])) {	
	 $dispatchby = $_SESSION["username"];
	
	$code = mysqli_real_escape_string($mysqli, $_POST['code']);
	$sname = mysqli_real_escape_string($mysqli, $_POST['sname']);
	$model = mysqli_real_escape_string($mysqli, $_POST['model']);
    $dsup = mysqli_real_escape_string($mysqli, $_POST['dsup']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$rname = mysqli_real_escape_string($mysqli, $_POST['rname']);
	$category = mysqli_real_escape_string($mysqli, $_POST['category']);
	
	$sprice = mysqli_real_escape_string($mysqli, $_POST['sprice']);
	$slevel = mysqli_real_escape_string($mysqli, $_POST['slevel']);
	$mdate = mysqli_real_escape_string($mysqli, $_POST['mdate']);
	$edate = mysqli_real_escape_string($mysqli, $_POST['edate']);
	$cprice = ($slevel * $sprice);
	
		
	// checking empty fields
	if(empty($code) || empty($name) || empty($category)|| empty($rname)|| empty($sprice)|| empty($slevel)|| empty($mdate)|| empty($edate)) {
				
		if(empty($code)) {
			echo "<font color='red'>Code field is empty.</font><br/>";
		}
		
		if(empty($name)) {
			echo "<font color='red'>name field is empty.</font><br/>";
		}
		
		if(empty($category)) {
			echo "<font color='red'>category field is empty.</font><br/>";
		}
		
		if(empty($sprice)) {
			echo "<font color='red'>Selling Price field is empty.</font><br/>";
		}
		
		if(empty($rname)) {
			echo "<font color='red'>Recied by field is empty.</font><br/>";
		}
		if(empty($slevel)) {
			echo "<font color='red'>stock level field is empty.</font><br/>";
		}
		if(empty($mdate)) {
			echo "<font color='red'>manufacture date field is empty.</font><br/>";
		}
		if(empty($edate)) {
			echo "<font color='red'>expiry date field is empty.</font><br/>";
		}
	
		
		//link to the previous page
	echo "<br/><a href='#'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		
		$result = mysqli_query($mysqli, "INSERT INTO stock(code,sname,model,dsup,name,rname,category,cprice,sprice,slevel,mdate,edate) 
		VALUES('$code','$sname','$model','$dsup','$name','$rname','$category','$cprice','$sprice','$slevel','$mdate','$edate')");
		
		//display success message
		echo "<font color='green'>  '$itemname'   successfully ";
		
		
		$result = mysqli_query($mysqli, "INSERT INTO stock1(code,sname,model,dsup,name,rname,category,cprice,sprice,slevel,mdate,edate) 
		VALUES('$code','$sname','$model','$dsup','$name','$rname','$category','$cprice','$sprice','$slevel','$mdate','$edate')");
		
		//display success message
		echo "<font color='green'> Recorded.";
		//echo "<br/><a href='store.php'>Home</a>";
		
		$result = mysqli_query($mysqli, "DELETE FROM applyitem WHERE name = '.$name.'");
		if  (mysqli_query($mysqli, "DELETE FROM applyitem WHERE name = '.$name.'") === TRUE) 
		{
    echo "<br>insert ";
} else {
    echo "<br>Error deleting record: " . $conn->error;
}
		$result = mysqli_query($mysqli, "DELETE FROM stock1 WHERE slevel = ''");
	if  (mysqli_query($mysqli, "DELETE FROM stock1 WHERE slevel = ''") === TRUE) 	
		{
    echo "<br> another ";
} else {
    echo "<br>Error deleting record: " . $conn->error;
}
		$result = mysqli_query($mysqli, "DELETE FROM stock WHERE slevel = ''");
		
 if  (mysqli_query($mysqli, "DELETE FROM stock WHERE slevel = ''") === TRUE) 
 
 {
    echo "<br> record";
} else {
    echo "<br>Error deleting record: " . $conn->error;
	echo "<br/><font color='green'><a href='store.php'>Home</a>";
}

$conn->close();
			
		
		
	}
}
?>

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
