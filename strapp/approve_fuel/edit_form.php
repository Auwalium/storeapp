

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
	
	$stmt=$db_con->prepare("SELECT * FROM requestitem WHERE id=:id");
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
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' ></td>
        </tr>
 
        <tr>
            <td>Department</td>
            <td><input type='text' name='dept' class='form-control' value='<?php echo $row['dept']; ?>' ></td>
        </tr>
		
		<tr>
            <td>Unit</td>
            <td><input type='text' name='unit' class='form-control' value='<?php echo $row['unit']; ?>' ></td>
        </tr>
		<tr>
            <td>Sub Unit</td>
            <td><input type='text' name='sunit' class='form-control' value='<?php echo $row['sunit']; ?>' ></td>
        </tr>
		<tr>
            <td>Category</td>
            <td><input type='text' name='category' class='form-control' value='<?php echo $row['category']; ?>' ></td>
        </tr>
		
				
		<tr>
            <td>Approved By</td>
            <td><input type='text' name='appv' class='form-control' value='<?php echo $_SESSION['user']['username']; ?>' ></td>
        </tr>
		<tr>
            <td>Requested Qty</td>
            <td><input type='text' name='qis' class='form-control' value='<?php echo $row['quantity']; ?>' ></td>
        </tr>
		<tr>
            <td>Recommended Qty</td>
            <td><input type='text' name='qa' class='form-control' value='<?php echo $row['rqa']; ?>' ></td>
        </tr>
		<tr>
            <td>Approved Qty by store</td>
            <td><input type='text' name='qabs' class='form-control' value='<?php echo $row['rqa']; ?>' ></td>
        </tr>
        <tr>
            <td>Comment For MD if any</td>
            <td><input type='text' name='comments' class='form-control' value='<?php echo $row['comments']; ?>'></td>
        </tr>
		<tr>
            <td>Comment by MD</td>
            <td><input type='text' name='commentm' class='form-control' value='<?php echo $row['commentm']; ?>' ></td>
        </tr>
		 <tr>
            <td>Request Date</td>
            <td><input type='text' name='adate' class='form-control' value='<?php echo $row['adate']; ?>' ></td>
        </tr>
		 <tr>
            <td>code</td>
            <td><input type='text' name='code' class='form-control'  ></td>
        </tr>
 
        <tr>
            <td>stock level</td>
            <td><input type='text' name='slevel' class='form-control'  ></td>
        </tr>
 
        <tr>
            <td>Approved Date</td>
            <td><input type='text' name='rdate' class='form-control' value='<?php echo ($currentDate); ?>' ></td>
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
    
