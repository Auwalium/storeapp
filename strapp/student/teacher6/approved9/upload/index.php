<!doctype html>
<html>
<head>
    <?php
   $con = mysqli_connect("localhost","root","","mpape");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
    if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
           // $query = "insert into images(name,image) values('".$name."','".$image."')";
           $query = "update park set name ='$name',image = '$image' where platenumber = '$platenumber' ";
            mysqli_query($con,$query) or die(mysqli_error($con));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name);

        }
    
    }
    ?>
<body>
    <form method="post" action="index.php" enctype='multipart/form-data'>
        <input type='file' name='file' />Plate Number
		<input type='text'  name='platenumber'>
        <input type='submit' value='Save name' name='but_upload'>
        
    </form>
<?php

$sql = "select name , image from images where id=40";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "http://localhost/park/registry/upload/upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' >

</body>
</html>
