
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
	$stmt=$db_con->prepare("SELECT * from scrap WHERE id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
 <?php    



?>
	 <tr>
            <td>Department</td>
            <td><input type='text' name='dept'  value='<?php echo $row['dept']; ?>' </td>
        </tr>
	 <tr>
            <td>Unit</td>
            <td><input type='text' name='unit'  value='<?php echo $row['unit']; ?>' </td>
        </tr>
	 <tr>
          <tr>
            <td>Sub Unit</td>
            <td><input type='text' name='sunit'  value='<?php echo $row['sunit']; ?>' </td>
        </tr>
	 <tr>
		 <td>Item Name</td>
            <td><input type='hidden' name='name'  value='<?php echo $row['name']; ?>' required><?php echo $row['name']; ?></td>
        </tr>
		<tr>
            <td>Current Quantity</td>
            <td><input type='hidden' name='qty' value='<?php echo $row['qty']; ?>' required><?php echo $row['qty']; ?></td> ></td>
        </tr>
				
		<tr>
            <td>Declared Quantity</td>
            <td><input type='hidden' name='qty1'  value='<?php echo $row['qty1']; ?>' required><?php echo $row['qty1']; ?></td> ></td>
        </tr>		
		<tr> 
				<td>Model</td>
				<td><input type="hidden" name="model" value='<?php echo $row['model']; ?>' required><?php echo $row['model']; ?></td> ></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Serial Number</td>
				<td><input type="hidden" name="snum" value='<?php echo $row['snum']; ?>' required><?php echo $row['snum']; ?></td> ></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			<tr> 
				<td>Declared Scrap by</td>
				<td><input type='text'  name='sname' value='<?php echo $row['rname']; ?>'> </td>
				
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
		
		<tr>
            <td>Date</td>
            <td><input type='hidden'  name='rdate' value = '<?php echo "$currentDate"; ?>'><?php echo "$currentDate"; ?></td>
        </tr>
       
	   <tr>
            <td>Store Officer Name</td>
            <input type="hidden" name="sname" value='<?php echo $_SESSION['user']['username']; ?>' >
				<td><input type="text" name="sname1" value='<?php echo $_SESSION['user']['username']; ?>' ></td>
        </tr>
	   
		<<tr>
            <td>Date</td>
            <td><input type='text'  name='sdate' value = '<?php echo "$currentDate"; ?>'> </td>
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
     
