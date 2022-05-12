<?php
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
//echo ($currentDate);  

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
            <td>Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['id']; ?>' required></td>
        </tr>
 
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
            <td>Approved Price</td>
            <td><input type='text' name='aqp' class='form-control' value = '<?php echo $row ['aqp']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Approved Company</td>
            <td><input type='text' name='acp' class='form-control' value = '<?php echo $row ['acp']; ?>'required></td>
        </tr>
		 <tr>
            <td>Category</td>
            <td><input type='text' name='category' class='form-control' value = '<?php echo $row ['category']; ?>'required></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type='text' name='adate' value =<?php echo ($currentDate) ?>></td>
			
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
     
