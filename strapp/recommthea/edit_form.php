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
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Department</td>
            <td><input type='text' name='dept' class='form-control' value='<?php echo $row['dept']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Quantity</td>
            <td><input type='int' name='quantity' class='form-control' value='<?php echo $row['quantity']; ?>' required></td>
        </tr>
		 <tr>
            <td>Recommended Qty by Head of Theatre</td>
            <td><input type='int' name='rqmd1' class='form-control' value='<?php echo $row['rqmd1']; ?>' required></td>
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
     
