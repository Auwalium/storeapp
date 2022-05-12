
<?php
include_once '../dbconfig.php';

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
            <td>code</td>
            <td><input type='text' name='code' class='form-control'  required></td>
        </tr>
 
        <tr>
            <td>stock level</td>
            <td><input type='text' name='slevel' class='form-control'  required></td>
        </tr>
		<tr> 
				<td>Category</td>
				<td>
				  <select name="category">
                  
				
				                <option value = "Hospital Equipment">Hospital Equipment</option>
				                <option value = "Office Equipment">Office Equipment</option>
								<option value = "Office Stationary">Office Stationary</option>
								<option value = "Maintenace Items">Maintenace Items</option>
								<option value = "Scrap">Scrap</option>
								<option value = "Radiology Goods">Radiology Goods</option>
								<option value = "Dental Goods">Dental Goods</option>
								<option value = "Theater Goods">Theater Goods</option>
								<option value = "Laboratory Goods">Laboratory Goods</option>
								
				</select>
				
				</td>
				</tr> 
        <tr>
            <td>Approved Date</td>
            <td><input type='date' name='rdate' class='form-control'  required></td>
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
     
