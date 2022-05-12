<?php
include_once '../dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM company WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

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
            <td>ID</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['id']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Item Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Item Description</td>
            <td><input type='int' name='descrip' class='form-control' value='<?php echo $row['descrip']; ?>' required></td>
        </tr>
		 <tr>
            <td>LPO Quantity</td>
            <td><input type='int' name='qty' class='form-control' value='<?php echo $row['qty']; ?>' required></td>
        </tr>
		 <tr>
            <td>Approved Price</td>
            <td><input type='text' name='aqp' class='form-control' value='<?php echo $row['aqp']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Approved Company</td>
            <td><input type='text' name='acp' class='form-control' value='<?php echo $row['acp']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Approved Date</td>
            <td><input type='date' name='adate' class='form-control'  value='<?php echo $row['adate']; ?>'></td>
        </tr>
		 <tr>
            <td>Supplied Date</td>
            <td><input type='Date' name='sdate' class='form-control' value='<?php echo $row['sdate']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Audit Confirmed Qty</td>
            <td><input type='text' name='acq' class='form-control' value='<?php echo $row['acq']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Confirmed By</td>
            <td><input type='text' name='aname' class='form-control'  value='<?php echo ('$aname'); ?>'></td>
        </tr>
		
        
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
