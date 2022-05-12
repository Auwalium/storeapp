<?php

session_start();

 $hname = $_SESSION["username"];





include_once '../dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM audit WHERE id=:id");
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
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['id']; ?>' ></td>
        </tr>
 
        <tr>
            <td>Item Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' ></td>
        </tr>
 
        <tr>
            <td>Location Building</td>
            <td><input type='int' name='lb' class='form-control' value='<?php echo $row['lb']; ?>' ></td>
        </tr>
		 <tr>
            <td>Location Room</td>
            <td><input type='int' name='lr' class='form-control' value='<?php echo $row['lr']; ?>' ></td>
        </tr>
		 <tr>
            <td>Quantity</td>
            <td><input type='text' name='qty' class='form-control' value='<?php echo $row['qty']; ?>' ></td>
        </tr>
 
        <tr>
            <td>Confirmed QTY by Head of Units</td>
            <td><input type='text' name='cqbhu' class='form-control' value='<?php echo $row['cqbhu']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Confirmed by</td>
            <td><input type='date' name='hname' class='form-control'  value=<?php echo "$hname" ?>></td>
        </tr>
		 <tr>
            <td>Confirmed Date</td>
            <td><input type='Date' name='cdate' class='form-control' value='<?php echo $row['cdate']; ?>' ></td>
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
     
