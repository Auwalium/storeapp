<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");

if(isset($_POST['Submit'])) {	
	$code = mysqli_real_escape_string($mysqli, $_POST['code']);
	$sname = mysqli_real_escape_string($mysqli, $_POST['sname']);
    $dsup = mysqli_real_escape_string($mysqli, $_POST['dsup']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$category = mysqli_real_escape_string($mysqli, $_POST['category']);
	$cprice = mysqli_real_escape_string($mysqli, $_POST['cprice']);
	$sprice = mysqli_real_escape_string($mysqli, $_POST['sprice']);
	$slevel = mysqli_real_escape_string($mysqli, $_POST['slevel']);
	$mdate = mysqli_real_escape_string($mysqli, $_POST['mdate']);
	$edate = mysqli_real_escape_string($mysqli, $_POST['edate']);
	
		
	// checking empty fields
	if(empty($code) || empty($name) || empty($category)|| empty($cprice)|| empty($sprice)|| empty($slevel)|| empty($mdate)|| empty($edate)) {
				
		if(empty($code)) {
			echo "<font color='red'>Code field is empty.</font><br/>";
		}
		
		if(empty($name)) {
			echo "<font color='red'>name field is empty.</font><br/>";
		}
		
		if(empty($category)) {
			echo "<font color='red'>category field is empty.</font><br/>";
		}
		if(empty($cprice)) {
			echo "<font color='red'> Cost Price field is empty.</font><br/>";
		}
		if(empty($sprice)) {
			echo "<font color='red'>Selling Price field is empty.</font><br/>";
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
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		
		$result = mysqli_query($mysqli, "INSERT INTO stock(code,sname,dsup,name,category,cprice,sprice,slevel,mdate,edate) 
		VALUES('$code','$sname','$dsup','$name','$category','$cprice','$sprice','$slevel','$mdate','$edate')");
		
		//display success message
		echo "<font color='green'>Record registration in stock, successfull.";
		//echo "<br/><a href='http://localhost/simpletemplate/index.html'>Home</a>";
		
		$result = mysqli_query($mysqli, "INSERT INTO stock1(code,sname,dsup,name,category,cprice,sprice,slevel,mdate,edate) 
		VALUES('$code','$sname','$dsup','$name','$category','$cprice','$sprice','$slevel','$mdate','$edate')");
		
		//display success message
		echo "<font color='green'>Record registration in stock1, successfull.";
		//echo "<br/><a href='http://localhost/simpletemplate/index.html'>Home</a>";
	}
}
?>
</body>
</html>
