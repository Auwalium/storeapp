 <div style='background-color:lavender;color:green;'>
   <?php
   session_start();
   include("../includes/dbconnect.php");
  
   if(isset($_POST['submit_minute'])){
   
   $minute = $_POST['minute'];
   $sid = $_POST['sid']; 
   $did = $_POST['did'];
   $minuter = "HOU"." ".$_SESSION['username'];
		
   $sql="INSERT INTO  minute(fid, did, location_id, minuted_by, minute)
   		VALUES('$sid','$did','10','$minuter','$minute')";
   		
   if(mysqli_query($con, $sql)){
   
   echo"Minute Save Successfully";
   
   location('url:staff_folder.php');
   
   }else{
   echo"Error Saving Minute";
   
   }
   
   
   
   
   
   }
   
   
   ?>
   </div>
   
