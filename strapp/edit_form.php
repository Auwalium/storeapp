


<?php
session_start();

include_once 'dbconfig.php';

if($_GET['code'])
{
	$code = $_GET['code'];	
	 $dispatchby = $_SESSION["username"];
	$stmt=$db_con->prepare("SELECT * FROM approveditem WHERE code=:$code");
	$stmt->execute(array(':code'=>$code));	
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
 		<input type='hidden' name='id' value='<?php echo $row['code']; ?>' />
        
 <tr> 
				<td>Item Code</td>
				<td><input type="int" name="code" value=<?php echo "$code" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Item id</td>
				<td><input type="int" name="id" value=<?php echo "$id" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			 
			<tr> 
				<td>Item name</td>
				<td><input type="text" name="name" value=<?php echo "$name" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr> <tr> </tr>  
			
			<tr> 
				<td>Dept or Unit</td>
				<td><input type="text" name="dept"></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Dispatch By</td>
				<td><input type="int" name="appv"   value=<?php echo "$dispatchby" ?>  ></td>
			</tr>
			
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity in Store</td>
				<td><input type="text" id="consult_fee"   name="consult_fee"   value=<?php echo "$slevel" ?>></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Quantity needed</td>
				<td><input type="text" id="glass_fee"     name="glass_fee"     placeholder="Enter Quantity Needed"></td>

			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr>
			<tr> 
				<td>Date</td>
				<td><input type="date" name="adate"></td>
			</tr>
			
				
				<script>
function sumBill(){
var consult, glasses,  total;
	consult	= parseInt(document.getElementById('consult_fee').value);
	glasses	= parseInt(document.getElementById('glass_fee').value);
	
	total 	= (consult - glasses );
	document.getElementById('total').value = total;
	
	return;
}
</script>

			
				
			<td><input type="submit" name="sum_bill" value="Subtract Stock" onclick="sumBill(); return false;"></td>
			<td><input type="text" id="total"         name="total" required /></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr>
			<td></td>
            <td><input type="submit" name="Submit" value="Submit"></td>
			</tr>

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
     
