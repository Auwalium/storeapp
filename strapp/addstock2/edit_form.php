<?php
include_once '../dbconfig.php';
session_start();
$aname = $_SESSION["username"];

$currentTimeinSeconds = time();  
$currentDate = date('Y-m-d', $currentTimeinSeconds);   	

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * from dispatch1 WHERE id=:id");
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
       <tr>
            <td>Item Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' required></td>
        </tr>
		<tr>
            <td>Serial Number</td>
            <td><input type='text' name='snum' class='form-control' value='<?php echo $row['snum']; ?>' required></td>
        </tr>
		<tr>
            <td>Model</td>
            <td><input type='text' name='model' class='form-control' value='<?php echo $row['model']; ?>' required></td>
        </tr>
		<tr>
            <td>Location Building</td>
            <td><input type='text' name='lb' class='form-control'   required></td>
        </tr>
        <tr>
            <td>Location Room</td>
            <td><input type='text' name='lr' class='form-control'  required></td>
        </tr>
		<tr>
            <td>Quantity</td>
            <td><input type='text' name='cqbhu' class='form-control' value='<?php echo $row['qis']; ?>'></td>
        </tr>
		<tr>
            <td>Confirm Quantity</td>
            <td><input type='text' name='qty' class='form-control' ></td>
        </tr>
		<tr>
            <td>date</td>
            <td><input type='hidden'  name='cdate' value = '<?php echo "$currentDate"; ?>'><?php echo "$currentDate"; ?></td>
        </tr>
       <tr>
            <td>Confirmed by</td>
            <td><input type='text' name='hname' class='form-control'value='<?php echo $_SESSION['user']['username']; ?>'></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save 
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
