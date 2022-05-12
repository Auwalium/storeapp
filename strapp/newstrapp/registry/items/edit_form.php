<?php
include_once '../dbconfig.php';
session_start();
$dispatchby = $_SESSION["username"];
  	

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * from item WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<?php
include('../functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
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
echo ($currentDate);  
?> 
<style type="text/css">
#dis{
	display:none;
}
</style>
    <div id="dis">
  <?php

session_start();
$dispatchby = $_SESSION["username"];
  
?>  
	</div>	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
       <tr>
            <td>Item Name</td>
            <td><input type='text' name='itemname' class='form-control' value='<?php echo $row['itemname']; ?>' required> </td>
        </tr>
		<tr>
            <td>Description</td>
            <td><input type='text' name='descrip' class='form-control' value='<?php echo $row['descrip']; ?>' required></td>
        </tr>

        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Add
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
