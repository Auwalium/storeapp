<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM raised WHERE id=:id");
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
            <td>Description</td>
            <td><input type='text' name='descrip' class='form-control' value='<?php echo $row['descrip']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Quantity</td>
            <td><input type='int' name='qty' class='form-control' value='<?php echo $row['qty']; ?>' required></td>
        </tr>
		 <tr>
            <td>Company 2 Quatation </td>
            <td><input type='text' name='cp2' class='form-control' value='<?php echo $row['cp2']; ?>' required></td>
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
     
