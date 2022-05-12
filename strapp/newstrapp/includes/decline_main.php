<div class='table-responsive' style='background-color:black;padding:1%; width:96%;' > 
     
     <table class='table' id= doc_table > 
   <thead>
   
   <th>STAFF ID </th> 
   <th>DOCUMENT ID </th> 
   <th>LETTER </th> 
   <th>DECLINATION STATEMENT</th>
  <th> </th>
     </thead>
       
    <?php
        
        include("../includes/dbconnect.php");
  

       $sid = $_GET['sid']; 
       $did = $_GET['did'];
       
       
   $sql = "SELECT * from document1 where did=$did AND staff_id=$sid AND status='pending' AND department_unit=11";
   
   
   $result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    	
    	 
    	$w_add 		= $row['writers_add'];	
    	$r_add 		= $row['recipient_add'];	
    	$salute 	= $row['salutation'];	
    	$title 		= $row['title'];	
    	$body1 		= $row['body'];	
    	$body		= strip_tags($body1);
    	$comp 		= $row['complimentary_close'];	
    	$doc_date 	= $row['document_date'];	
    	$department 	= $row['department_unit'];	
    	$status 	= $row['status'];	
    	
    	
   echo"<tbody> 
   <tr> 
   <td style='font-weight:bold;'>FMC/KEF/PER/$sid </td>
   <td style='font-weight:bold;'>$sid/$did</td>
   
<td style='background-color:whitesmoke;'>"."<textarea cols='20' rows='4' readonly style='float:right;font-size:9;'>".$w_add."</textarea>"."<br/>"."<textarea cols='20' rows='5' readonly style='font-size:9;float:left;'>".$r_add."</textarea>"."<br/>"."<input type='text' name='salute' value='$salute' style='width:100%;' readonly>"."<br/>"."<input type='text' readonly style='text-align:center;font-weight:bold; width:100%;' name='title' value='$title'>"."<br/>"."<textarea cols='45' rows='10' readonly>".$body."</textarea>"."<br/>"."<input type='text' name='comp' value='$comp' style='width:100%;' readonly><br/>"."<span style='color:crimson;font-weight:normal; font-size:12px;'>Date Written:$doc_date</span>"." </td>";
   
  
   }
   
   ?>
   
   
   <td style='background-color:black;'>
   
   
   <?php
  
  if(isset($_POST['submit_decline'])) {
  
  $sid	= $_POST['sid'];
  $did  = $_POST['did'];
  $dec_note = $_POST['decline_note'];
  $dec_by = $_SESSION['username'];
  $sql=" INSERT INTO declination_notes (staff_id, did, declination_statement, declined_by) VALUES ( '$sid', '$did', '$dec_note', '$dec_by')";
  
  if(mysqli_query($con, $sql)){
  
  
  echo"<p style='background-color:green;color:lavender; padding:2px;'>Letter Successfully Declined by "." "."HOU-". $dec_by."</p>";
  
  }
 $sql1="UPDATE document1 set department_unit='-1' where staff_id='$sid' AND did='$did'";
   
   if(mysqli_query($con, $sql1)){
   
   echo" ";
  
  
  }
   }
  mysqli_close($con); 
   
   
   
   
   ?>
   
    <form method='post' action=''>
   
    <textarea cols='30' rows='18' name='decline_note'> Write Your Reasons for Declining this Letter</textarea>
    <br/> <br/>
    
    <input type='hidden' name='sid' value="<?php echo $sid; ?>">
    <input type='hidden' name='did' value="<?php echo $did; ?>">
    <input type='submit' class="btn-sm btn-danger" name='submit_decline' value='Send Declination Note' >
    </form>
    </td>
   <td>     
     <?php  echo"<a class='btn-sm btn-primary'href='dashboard.php'> Go Back</a>"?>
     </td> 
    </tbody>
    </table>    
      
 </div>
