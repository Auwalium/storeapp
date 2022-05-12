

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
	
	$stmt=$db_con->prepare("SELECT * FROM fee WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	
		$id = $_GET['edit_id'];
		
		$id=$row['id'];
		$reg=$row['reg'];
		$amount1=$row['amount1'];
		$amount2=$row['amount2'];
		$amount3=$row['amount3'];
        $total=$row['total'];
		$balance=$row['balance'];
		$term=$row['term'];
		$sclass=$row['sclass'];
		
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
 		
        

		<label for="platenum">REG NO:</label><input type="text" class="form-control" name="reg"  value='<?php echo $row['reg']; ?>'"> 
	    <label for="platenum">FIRST PAYMENT:</label><input type="text" class="form-control" name="amount1" value='<?php echo $row['amount1']; ?>'">        
		<label for="platenum">DATE PAID:</label><input type="DATE" class="form-control" name="date1" value='<?php echo $row['date1']; ?>'">        
	    <label for="platenum">RECEIPT NO:</label><input type="int" class="form-control" name="receipt1" value='<?php echo $row['receipt1']; ?>'">        

		<label for="platenum">SECOND PAYMENT:</label><input type="text" class="form-control" name="amount2"  value='<?php echo $row['amount2']; ?>'"> 
	    <label for="platenum">DATE PAID:</label><input type="DATE" class="form-control" name="date2" value='<?php echo $row['date2']; ?>'">        
	    <label for="platenum">RECEIPT NO:</label><input type="int" class="form-control" name="receipt2" value='<?php echo $row['receipt2']; ?>'">        

		<label for="platenum">THIRD PAYMENT:</label><input type="text" class="form-control" name="amount3" value='<?php echo $row['amount3']; ?>'"> 
		<label for="platenum">DATE PAID:</label><input type="DATE" class="form-control" name="date3" value='<?php echo $row['date3']; ?>'">        
	    <label for="platenum">RECEIPT NO:</label><input type="int" class="form-control" name="receipt3" value='<?php echo $row['receipt3']; ?>'">        

		<label for="platenum">TOTAL:</label><input type="text" class="form-control" name="total" value='<?php echo $row['total']; ?>' "> 
		<label for="platenum">BALANCE:</label><input type="text" class="form-control" name="balance" value='<?php echo $row['balance']; ?>' "> 
	    <label for="platenum">Term:</label><input type="text" class="form-control" name="term" value='<?php echo $row['term']; ?>'">
		        
		<label for="platenum">CLASS:</label><input type="text" class="form-control" name="sclass" value='<?php echo $row['sclass']; ?>' "> 
	
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Book
			</button>
            </td>
        </tr>
 
 
 
 
 
    </table>
</form>
    
