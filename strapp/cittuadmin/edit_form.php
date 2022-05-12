

 <?php 
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
//prints the current date 
//echo ($currentDate);  
?> 

<?php
include_once '../dbconfig.php';
session_start();
$rname = $_SESSION["username"];
if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	
	$stmt=$db_con->prepare("SELECT * FROM users WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
		$id = $_GET['edit_id'];
		$code = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style> 
    <div id="dis">
    
	</div>
	
	
   <?php session_start();
$rname = $_SESSION["username"];     
 	?>
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php $_GET['edit_id']; ?>' />
        <tr>
            <td>Name</td>
            <td><input type='text' name='username' class='form-control' value='<?php echo $row['username']; ?>' ></td>
        </tr>
 
        <tr>
            <td>Old password</td>
            <td><input type='text' name='password1' class='form-control' value='<?php echo $row['password']; ?>' ></td>
        </tr>
		
		<tr>
            <td>New Password</td>
            <td><input type='text' name='password' class='form-control'' ></td>
        </tr>
		
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Appove
			</button>
            </td>
        </tr>
 
    </table>
</form>
    
