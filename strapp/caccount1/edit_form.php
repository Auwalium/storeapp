<?php
session_start();

$currentTimeinSeconds = time();  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 

include_once '../dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM company WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
//echo ($currentDate);  
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
            <td>ID</td>
            <td><input type='text' name='id'  value='<?php echo $row['id']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Item Name</td>
            <td><input type='text' name='name'  value='<?php echo $row['name']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Item Description</td>
            <td><input type='int' name='descrip'  value='<?php echo $row['descrip']; ?>'></td>
        </tr>
		 <tr>
            <td>LPO Quantity</td>
            <td><input type='int' name='qty'  value='<?php echo $row['qty']; ?>' required></td>
        </tr>
		 <tr>
            <td>Approved Price</td>
            <td><input type='text' name='aqp'  value='<?php echo $row['aqp']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Approved Company</td>
            <td><input type='text' name='acp'  value='<?php echo $row['acp']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Approved Date</td>
            <td><input type='date' name='adate'   value='<?php echo $row['adate']; ?>'></td>
        </tr>
		 <tr>
            <td>Supplied Date</td>
            <td><input type='Date' name='sdate'  value='<?php echo $row['sdate']; ?>' required></td>
        </tr>
		<tr>
            <td>total cost</td>
            <td><input type='text' name='tc'  value='<?php echo $row['tc']; ?>'required ></td>
        </tr>
        <tr>
            <td>ist payment</td>
            <td><input type='text' name='pay1'  value='<?php echo $row['pay1']; ?>' ></td>
        </tr>
		<tr>
            <td>Cheque Number 1</td>
            <td><input type='text' name='cheq1'  value='<?php echo $row['cheq1']; ?>' ></td>
        </tr>
		<tr>
            <td>Cheque Date</td>
            <td><input type='int' name='date1'  value='<?php echo ($currentDate); ?>' ></td>
        </tr>
		<tr>
            <td>Cashier Name</td>
            <td><input type='int' name='cname1'  value='<?php echo $_SESSION['user']['username']; ?>' ></td>
        </tr>
        <tr>
            <td>2nd payment</td>
            <td><input type='text' name='pay2'   value='<?php echo $row['pay2']; ?>'></td>
        </tr>
		<tr>
            <td>Cheque Number 2</td>
            <td><input type='text' name='cheq2'  value='<?php echo $row['cheq2']; ?>' ></td>
        </tr>
		<tr>
            <td>Cheque Date</td>
            <td><input type='date' name='date2'  value='<?php echo ($currentDate); ?>' ></td>
        </tr>
		<tr>
            <td>Cashier Name</td>
            <td><input type='int' name='cname2'  value='<?php echo $_SESSION['user']['username']; ?>' ></td>
        </tr>
		<tr>
            <td>3rd payment</td>
            <td><input type='text' name='pay3' value='<?php echo $row['pay3']; ?>'  ></td>
        </tr>
		<tr>
            <td>Cheque Number 3</td>
            <td><input type='text' name='cheq3'  value='<?php echo $row['cheq3']; ?>' ></td>
        </tr>
		<tr>
            <td>Cheque Date</td>
            <td><input type='date' name='date3'  value='<?php echo ($currentDate); ?>' ></td>
        </tr>
       <tr>
            <td>Cashier Name</td>
            <td><input type='int' name='cname3'  value='<?php echo $_SESSION['user']['username']; ?>' ></td>
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
     