<?php
include_once '../dbconfig.php';
session_start();
$dispatchby = $_SESSION["username"];
  	

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * from stock WHERE id=:id");
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
            <td>Item Code</td>
            <td><input type='hidden' name='code' class='form-control' value='<?php echo $row['id']; ?>' required> <?php echo $row['id']; ?></td>
        </tr>
	   <tr>
            <td>Item Name</td>
            <td><input type='hidden' name='name' class='form-control' value='<?php echo $row['name']; ?>' required> <?php echo $row['name']; ?></td>
        </tr>
		
		<tr>
            <td>Updated by</td>
            <td><input type='text' name='uby1' class='form-control' value='<?php echo $_SESSION['user']['username']; ?>' required></td>
        
           
            <td><input type='hidden' name='uby' class='form-control' value='<?php echo $_SESSION['user']['username']; ?>' required></td>
        </tr>
		
       <tr>
            <td>Category</td>
            <td><input type="hidden" name="category" value='<?php echo $row['category']; ?>'><?php  echo $row['category']; ?></td>
        </tr>
		<tr>
            <td>stock level</td>
            <td><?php echo $row['slevel']; ?></td>
        </tr>
		<input type='hidden' name='slevel1' value='<?php echo $row['slevel']; ?>'  />
		
		<tr>
            <td>updated quantity</td>
            <td><input type='text' name='uqty' class='form-control'></td>
        </tr>
		
		<tr>
            <td>updated date</td>
            <td><input type="hidden" name="edate" value="<?php echo $currentDate; ?>"><?php echo $currentDate; ?></td>
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
     
