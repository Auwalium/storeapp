<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");



if(isset($_POST['search_submit'])) {
	
	
	
	
	
	
}




if(isset($_POST['Submit'])) {



	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$code = mysqli_real_escape_string($mysqli, $_POST['code']);

	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$appv = mysqli_real_escape_string($mysqli, $_POST['appv']);
	$dept = mysqli_real_escape_string($mysqli, $_POST['dept']);
	$sname = mysqli_real_escape_string($mysqli, $_POST['sname']);
	$qis = mysqli_real_escape_string($mysqli, $_POST['glass_fee']);
	$quann = mysqli_real_escape_string($mysqli, $_POST['glass_fee']);
	

	$adate = mysqli_real_escape_string($mysqli, $_POST['adate']);
  
		$total 			= ( $_POST['total']);

	
	$result = mysqli_query($mysqli, "INSERT INTO dispatch(name,dept,appv,adate,qis) 
		VALUES('$name','$dept','$appv','$adate','$qis')");
		
		//display success message
		echo "<font color='green'>Record registration is successfull.";
		
		$update="update stock set slevel='".$total."' where id='".$id."'";
     mysqli_query($mysqli, $update) or die(mysqli_error());
    echo '<p style="color:#FF0000;">"Record Updated Successfully.</a>"';
		//echo "<br/><a href='http://localhost/simpletemplate/index.html'>Home</a>";
	
	$result = mysqli_query($mysqli, "DELETE FROM approveditem WHERE code = $code");
	if  (mysqli_query($mysqli, "DELETE FROM requestitem WHERE code = $code") === TRUE) 
 
	{
    echo "Record deleted successfully";
	} else {
    echo "Error deleting record: " . $conn->error;
	}

$conn->close();

	
	
	
	
	}
	
	//<script>
	//function subtractQuantity(){
	//var quantity, cslevel,  total;
	//quantity	= parseInt(document.getElementById('quantity').value);
	//cslevel	= parseInt(document.getElementById('cslevel').value);
	
	//total 	= (quantity - cslevel );
	//document.getElementById('total').value = total;
	
	//return;
	//}
	//</script>
	
	//
	//$result2 = mysqli_query($mysqli, "UPDATE stock SET slevel =  '$total' WHERE  name = $name";
?>


</body>
</html>
