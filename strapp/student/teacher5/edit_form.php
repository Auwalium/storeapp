

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
	//$stmt=$db_con->prepare("SELECT approveditem.name, approveditem.dept,approveditem.adate , approveditem.appv, approveditem.qis, approveditem.total, approveditem.emp_id, stock1.id, stock1.slevel
	//FROM stock1 inner join approveditem  ");
	//$stmt->execute(array(':id'=>$emp_id));	
	//$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt=$db_con->prepare("SELECT * FROM biodata WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
		$id = $_GET['edit_id'];
		$fname = $_POST['fname'];
		$surname = $_POST['surname'];
		$mname = $_POST['mname'];
		$gname = $_POST['gname'];
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$slevel = $_POST['slevel'];
		
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
 		
        

		<label for="platenum">First Name:</label><input type="text" class="form-control" name="fname"  value='<?php echo $row['fname']; ?>'"> 
	    <label for="platenum">Address:</label><input type="text" class="form-control" name="address" value='<?php echo $row['address']; ?>'">
		        
		<label for="platenum">Age:</label><input type="text" class="form-control" name="age"  value='<?php echo $row['age']; ?>'"> 
	    <label for="platenum">Guirdian Name:</label><input type="text" class="form-control" name="gname" value='<?php echo $row['gname']; ?>'"> 
		<label for="platenum">ID:</label><input type="text" class="form-control" name="id" value='<?php echo $row['id']; ?>' "> 
		<label for="platenum">Session:</label><input type="text" class="form-control" name="year"  "> 
	    <label for="platenum">Term:</label><input type="text" class="form-control" name="term" ">
		        
		<label for="platenum">Class:</label><input type="text" class="form-control" name="sclass"  "> 
		<label for="platenum">Fee:</label><input type="text" class="form-control" name="total"  "> 
	
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Book
			</button>
            </td>
        </tr>
 
 
 
 
 
    </table>
</form>
    
