
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


<?php
session_start();
include("../config.php");

  $dispatchby = $_SESSION["username"];
  	?>
<?php
include_once 'dbconfig.php';

session_start();

if($_GET['edit_id'])
{ 

	
	$id = $_GET['edit_id'];	
	//$stmt=$db_con->prepare("SELECT approveditem.name, approveditem.dept,approveditem.adate , approveditem.appv, approveditem.qis, approveditem.total, approveditem.emp_id, stock1.id, stock1.slevel
	//FROM stock1 inner join approveditem  ");
	//$stmt->execute(array(':id'=>$emp_id));	
	//$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt=$db_con->prepare("SELECT * FROM approveditem WHERE emp_id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
		$id = $_GET['edit_id'];
		$code = $_POST['id'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$qis = $_POST['qis'];
		$appv = $_POST['appv'];
		$qa = $_POST['qa'];
		$adate = $_POST['adate'];
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
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php $_GET['edit_id']; ?>' />
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Department</td>
            <td><input type='text' name='dept' class='form-control' value='<?php echo $row['dept']; ?>' required></td>
        </tr>
		 <tr>
            <td>Unit</td>
            <td><input type='text' name='unit' class='form-control' value='<?php echo $row['unit']; ?>' required></td>
        </tr>
		 <tr>
            <td>Sub Unit</td>
            <td><input type='text' name='sunit' class='form-control' value='<?php echo $row['sunit']; ?>' ></td>
        </tr>
		<tr>
            <td>Approved By</td>
            <td><input type='text' name='appv' class='form-control' value='<?php echo $row['appv']; ?>' required></td>
        </tr>
        
		 <tr>
            <td>Requested Qty</td>
            <td><input type='text' name='qis' class='form-control' value='<?php echo $row['qis']; ?>' required></td>
        </tr>
		<tr>
            <td>Approved Qty</td>
            <td><input type='text' name='qa' class='form-control' value='<?php echo $row['qa']; ?>' required></td>
        </tr>
        
		 <tr>
            <td>Request Date</td>
            <td><input type='date' name='adate' class='form-control' value='<?php echo $row['adate']; ?>' required></td>
        </tr>
		 <tr>
            <td>Dispatch by</td>
            <td><input type='text' name='dispatchby' class='form-control' value='<?php echo ($dispatchby); ?>' ></td>
        </tr>
 
        <tr>
            <td>category</td>
            <td><input type='text' name='category' class='form-control'  value='<?php echo $row['category']; ?>'></td>
        </tr>
		
        <tr>
            <td>Approved Date</td>
            <td><input type='date' name='rdate' class='form-control' value='<?php echo ($currentDate); ?>'></td>
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
     
