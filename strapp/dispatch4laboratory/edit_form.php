

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
	
	$stmt=$db_con->prepare("SELECT * FROM approveditem WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
		$id = $_GET['edit_id'];
		$code = $_POST['id'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$qis = $_POST['qis'];
		$appv = $_POST['appv'];
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
	
	
   <?php session_start();
$rname = $_SESSION["username"];     
 	?>
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php $_GET['edit_id']; ?>' />
        <tr>
            <td>Name</td>
            <td><input type='text' name='name1' class='form-control' value='<?php echo $row['name']; ?>' ></td>
			    <input type='hidden' name='name' class='form-control' value='<?php echo $row['name']; ?>' >
        </tr>
 
        <tr>
            <td>Department</td>
            <td><input type='text' name='dept1' class='form-control' value='<?php echo $row['dept']; ?>' ></td>
				<input type='hidden' name='dept' class='form-control' value='<?php echo $row['dept']; ?>' >
        </tr>
		
		<tr>
            <td>Unit</td>
            <td><input type='text' name='unit1' class='form-control' value='<?php echo $row['unit']; ?>' ></td>
				<input type='hidden' name='unit' class='form-control' value='<?php echo $row['unit']; ?>' >
        </tr>
		<tr>
            <td>Sub Unit</td>
            <td><input type='text' name='sunit1' class='form-control' value='<?php echo $row['sunit']; ?>' ></td>
				<input type='hidden' name='sunit' class='form-control' value='<?php echo $row['sunit']; ?>' >
        </tr>
		
		<tr>
            <td>Approved By</td>
            <td><input type='text' name='appv1' class='form-control' value='<?php echo $row['appv']; ?>' ></td>
				<input type='hidden' name='appv' class='form-control' value='<?php echo $row['appv']; ?>' >
        </tr>
		<tr>
            <td>Dispatched By</td>
            <td><input type='text' name='dby1' class='form-control' value='<?php echo $_SESSION['user']['username']; ?>' ></td>
				<input type='hidden' name='dby' class='form-control' value='<?php echo $_SESSION['user']['username']; ?>' >
        </tr>
		<tr>
            <td>Requested Qty</td>
            <td><input type='text' name='qis1' class='form-control' value='<?php echo $row['qis']; ?>' ></td>
				<input type='hidden' name='qis' class='form-control' value='<?php echo $row['qis']; ?>' >
        </tr>
		<tr>
            <td>Recommended Qty</td>
            <td><input type='text' name='qa1' class='form-control' value='<?php echo $row['qa']; ?>' ></td>
				<input type='hidden' name='qa' class='form-control' value='<?php echo $row['qa']; ?>' >
        </tr>
		<tr>
            <td>Approved Qty by store</td>
            <td><input type='text' name='qabs1' class='form-control' value='<?php echo $row['qabs']; ?>' ></td>
				<input type='hidden' name='qabs' class='form-control' value='<?php echo $row['qabs']; ?>' >
        </tr>
        <tr>
            <td>Remaining QTY</td>
            <td><input type='int' name='total1' class='form-control' value='<?php echo $row['total']; ?>'></td>
				<input type='hidden' name='total' class='form-control' value='<?php echo $row['total']; ?>'>
        </tr>
		
		 <tr>
            <td>Request Date</td>
            <td><input type='text' name='rdate1' class='form-control' value='<?php echo $row['rdate']; ?>' ></td>
				<input type='hidden' name='rdate' class='form-control' value='<?php echo $row['rdate']; ?>' >
        </tr>
		 <tr>
            <td>category</td>
            <td><input type='text' name='category1' class='form-control' value='<?php echo $row['category']; ?>'></td>
				<input type='hidden' name='category' class='form-control' value='<?php echo $row['category']; ?>'>
        </tr>

 
        <tr>
            <td>Dispatch Date</td>
            <td><input type='text' name='ddate1' class='form-control' value='<?php echo ($currentDate); ?>' ></td>
				<input type='hidden' name='ddate' class='form-control' value='<?php echo ($currentDate); ?>' >
        </tr>
		 <tr>
            <td>Recieved by</td>
            <td><input type='text' name='cname' class='form-control' ></td>
				
        </tr>

 
        <tr>
            <td>File Number</td>
            <td><input type='text' name='cfile' class='form-control' ></td>
				
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Dispatch
			</button>
            </td>
        </tr>
 
    </table>
</form>
    
