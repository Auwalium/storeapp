<?php
include_once '../dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM requestitem WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
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
            <td><input type='int' name='citt' class='form-control' value='<?php echo $row['citt']; ?>'></td>
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
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-ok"></span> Recommend
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
