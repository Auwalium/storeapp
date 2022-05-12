
<center><h2>

<a href="../index.php?logout='1'" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</tr></center></h2>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">   </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
         
   
	   <?php
include_once '../dbconfig.php';

//if($_GET['id'])
{
	//echo $row['id']; 
	//$id = 10;	
	if(isset($_POST['btn-update']))
	{
	$id = $_POST['id'];
	
	$stmt=$db_con->prepare("SELECT * FROM requestitem WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	}
}

?>
<?php 
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
 
?> 


	
    
    <div id="dis">
    
	</div>
        
<div>
	 <form method='post'  action='update.php'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>'></td>
        </tr>
 
        <tr>
            <td>Department</td>
            <td><input type='text' name='dept' class='form-control' value='<?php echo $row['dept']; ?>' ></td>
        </tr>
 
        <tr>
            <td>Quantity</td>
            <td><?php echo $row['quantity']; ?></td>
        </tr>
		 <tr>
            <td>Recommended Qty by Head of Clinical</td>
            <td><input type='text' name='rqs' class='form-control' value='<?php echo $row['rqs']; ?>'></td>
        </tr>
		<tr>
            <td>Recommended Qty by CITTU</td>
            <td><input type='int' name='citt' class='form-control' value='<?php echo $row['hm']; ?>'></td>
        </tr>
 
        <tr>
            <td>Recommended Qty by Head of admin</td>
            <td><input type='text' name='rqa' class='form-control' value='<?php echo $row['rqa']; ?>' ></td>
        </tr>
 
        <tr>
            <td>Recommended Qty by Head of Account</td>
            <td><input type='int' name='rqmd' class='form-control' value='<?php echo $row['rqmd']; ?>'></td>
        </tr>
		 <tr>
            <td>Approved Qty</td>
            <td><input type='int' name='rqmd1' class='form-control' value='<?php echo $row['rqmd1']; ?>' ></td>
        </tr>
 
        <tr>
            <td>Approval Date</td>
            <td><input type='hidden' name='adate' class='form-control' value='<?php echo $currentDate; ?>' ><?php echo $currentDate; ?></td>
        </tr>
		<tr>
            <td>Comment By HOS</td>
            <td><?php echo $row['comments']; ?></td>
        </tr>
        <tr>
            <td>Reply Comment By MD</td>
            <td><input type='textbox' name='commentm' class='form-control' value='<?php echo $row['commentm']; ?>' ></td>
        </tr>
        <tr>
          
        </tr>
		<button type="submit" class="btn btn-secondary" name="btn-update" class="btn btn-default">Submit</button>
       <div class="modal-footer">
       
    </table>
</form>

	</div>	
		
		

      </div>
      <div class="modal-footer d-flex justify-content-center">
        
      </div>
    </div>
  </div>
</div>


	
	   
	   
      </div>

        
      </div>
    </div>
  </div>
</div>
</html>

		
		
