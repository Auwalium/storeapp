<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id =  $_POST['id'];
	$name =  $_POST['name'];
	$slevel =  $_POST['slevel'];
	$sname =  $_POST['sname'];
	
	
	
		$result = mysqli_query($mysqli, "UPDATE stock1 SET slevel='$slevel',name='$name',sname='$sname' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index7.php");
	
}
?>
<?php
//getting id from url
$id = $_GET['id'];


//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM stock1 ");

while($res = mysqli_fetch_array($result))
{
	$id = $res['id'];
	$name = $res['name'];
	$slevel = $res['slevel'];
	$sname = $res['sname'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>stocl level</td>
				<td><input type="text" name="slevel" value="<?php echo $slevel;?>"></td>
			</tr>
			<tr> 
				<td>supplier name</td>
				<td><input type="text" name="sname" value="<?php echo $sname;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
