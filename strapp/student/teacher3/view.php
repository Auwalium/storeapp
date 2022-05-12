

<?php

 session_start();
$platenumber = ($_GET[platenumber]);
?>
<!doctype html>
<html>
<head>
      <form method="post" action="view.php" enctype='multipart/form-data'>
      
       
    </form>

<?php

 session_start();
$platenumber = ($_GET[platenumber]);
	
 $con = mysqli_connect("localhost","root","","mpape");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if(isset($_POST['but_upload'])){
		$platenumber = $_Get['platenumber'];
		echo "$platenumber";
		$platenumber = $_POST['platenumber'];
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
$sql = "select name from park where platenumber='$platenumber'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
//print_r ($sql);
echo $platenumber;
$image = $row['name'];
 $image_src = "http://localhost/park/registry/upload/upload/".$image;

 }
?>


<a href='index.php' style="color: green; font-size: 40px";> BACK</a><br>




<body>

</body>
</html>




<?php
	
$con = mysqli_connect("localhost","root","","mpape");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 

 if(isset($_POST['but_upload'])){
        $id = $_Get['id'];}
  
$sql = "select name from park where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "http://localhost/park/registry/upload/upload/".$image;
  }
?>
<img src='<?php echo $image_src;  ?>' >