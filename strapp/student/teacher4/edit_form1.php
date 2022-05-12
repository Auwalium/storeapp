

 <?php 
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
//prints the current date 
//echo ($currentDate);  
?> 

<?php
include_once '../dbconfig.php';
session_start();
$rname = $_SESSION["username"];
if($_GET['del_id'])
{
	$id = $_GET['del_id'];	
	//$stmt=$db_con->prepare("SELECT approveditem.name, approveditem.dept,approveditem.adate , approveditem.appv, approveditem.qis, approveditem.total, approveditem.emp_id, stock1.id, stock1.slevel
	//FROM stock1 inner join approveditem  ");
	//$stmt->execute(array(':id'=>$emp_id));	
	//$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt=$db_con->prepare("SELECT * FROM PARK WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
		$id = $_GET['del_id'];
		$platenumber = $_POST['platenumber'];
		$amount = $_POST['amount'];
		$date2 = $_POST['date2'];
		$name1 = $_POST['name1'];
		$appv = $_POST['appv'];
		$adate = $_POST['adate'];
		$slevel = $_POST['slevel'];
		
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style> 
    <div id="dis">
    
	</div>
	
	
   <?php session_start();
$rname = $_SESSION["username"];     
 	?>
	
 
 
 <center><form method="post" action="view.php" enctype='multipart/form-data'>
        
		<input type='text'  name='platenumber'value='<?php echo $row['platenumber']; ?>'>
        <input type='submit' value='CLICK TO VIEW PICTURE' name='but_upload'>
        
    </form></center>

 
    </table>
</form>
    
	 <?php
   $con = mysqli_connect("localhost","root","","mpape");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
    if(isset($_POST['but_upload'])){
		$platenumber = $_POST['platenumber'];
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
			Echo 'Done, Go Back or Update Another Customer';
			
//print_r ($query);
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name);

        }
    
    }
    ?>
	

<body>
    
<?php
 if(isset($_POST['but_upload'])){
		$platenumber = $row['platenumber'];
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
$sql = "select name from images where platenumber='$platenumber'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "http://localhost/park/registry/upload/upload/".$image;
 }
?>
<img src='<?php echo $image_src;  ?>' >

