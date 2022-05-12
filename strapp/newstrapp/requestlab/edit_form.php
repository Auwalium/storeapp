
<?php
include_once 'dbconfig.php';

session_start();
$rname = $_SESSION['username1']; 

$unit =$_SESSION['unit'];
$sunit =$_SESSION['sunit'];
$dept = $_SESSION['dept'];


$currentTimeinSeconds = time();  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 

if($_GET['edit_id'])
{	
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * from item WHERE id=:id");
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
		<input type='hidden' name='category' value='<?php echo $row['item_category']; ?>' />
 <?php    



?>
	 <tr>
            <td>Item Name</td>
            <td><input type='hidden' name='name' class='form-control' value='<?php echo $row['brand_name']; ?>' required><?php echo $row['generic_name']."".$row['brand_name'] ?></td>
        </tr>
		<tr>
            <td>quantity</td>
            <td><input type='text' name='quantity' class='form-control' placeholder="Enter Quantity" required ></td>
        </tr>
	
    
				
				
		
			
				
				<input type="hidden" name="category" value='<?php echo $row['item_category']; ?>'required>
				<input type="hidden" name="sunit" value='<?php echo $sunit; ?>'>
				<input type="hidden" name="unit" value='<?php echo $unit; ?>'required>
				<input type="hidden" name="dept" value='<?php echo $dept; ?>'required>
			    <input type="hidden" name="rname" value='<?php echo $rname; ?>' required>	        
               <input type='hidden'  name='rdate' value = '<?php echo "$currentDate"; ?>'required>
        
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-pencil"></span> <center>Apply</center>
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
