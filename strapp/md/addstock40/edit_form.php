
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
	$stmt=$db_con->prepare("SELECT * from applyitem WHERE id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' >
 <?php    

$rname = $_SESSION["username"];

?>
	
	 <tr>
		 <td>Item Name</td>
            <td><input type='hidden' name='name'  value='<?php echo $row['name']; ?>' required><?php echo $row['name']; ?></td>
        </tr>
		
				
		<tr>
            <td>Quantity</td>
            <td><input type='text' name='qty'  ></td>
        </tr>		
		
			<tr> 
				<td>by</td>
				<input type="hidden" name="rby" value='<?php echo $_SESSION['user']['username']; ?>' >
				<td><input type="text" name="rname1" value='<?php echo $_SESSION['user']['username']; ?>' ></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			
			
		 <tr>
            <td>Dated</td>
             <td><input type='date'  name='rdate' value = '<?php echo ($currentDate);  ?>'></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-pencil"></span> Submit
			</button>
            </td>
        </tr>
			

 
    </table>
</form>
     
