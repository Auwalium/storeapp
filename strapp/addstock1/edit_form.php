<?php
include_once '../dbconfig.php';
session_start();




// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
//echo ($currentDate);  

  	

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * from audit WHERE id=:id");
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
            <td>Item Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' required></td>
        </tr>
		<tr>
            <td>Location Building</td>
            <td><input type='text' name='lb' class='form-control'  value='<?php echo $row['lb']; ?>' required></td>
        </tr>
        <tr>
            <td>Location Room</td>
            <td><input type='text' name='lr' class='form-control' value='<?php echo $row['lr']; ?>' required></td>
        </tr>
		<tr>
            <td>Quantity</td>
            <td><input type='text' name='cqbhu' class='form-control' value='<?php echo $row['cqbhu']; ?>' required></td>
        </tr>
		<tr>
            <td>Confirmed Quantity by Audit</td>
            <td><input type='text' name='qty' class='form-control'  required></td>
        </tr>
		
		<tr>
            <td>Confirmed date</td>
            <td><input type='text' name='date' class='form-control' value='<?php echo "$currentDate"; ?>'></td>
        </tr>
       <tr>
            <td>Confirmed by</td>
            <td><input type='text' name='aname' class='form-control' value='<?php echo $_SESSION['user']['username']; ?>'></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save 
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
