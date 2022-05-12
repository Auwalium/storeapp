<?php
session_start();
$user = $_SESSION['username1'];
$role = $_SESSION['role'];
include('dbconfig.php');
if(($role) == ('stationary') )
 {

$query = "SELECT * from approveditem where noti = 1 and category = 'Office Stationary' ";
  }

 elseif(($role) == ('officeequipment') )
	 {
$query = "SELECT * from approveditem where noti = 1 and category = 'office equipment' ";
	 }

	 elseif(($role) == ('maintenance') )
	 {
$query = "SELECT * from approveditem where noti = 1 and category = 'Maintenance Items' ";
	 }

	 elseif(($role) == ('hospitalequipment') )
	 {
$query = "SELECT * from approveditem where noti = 1 and category = 'Hospital Equipment' ";
	 }
else
   {
	echo "no query";
	 }

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>NAME</th>
		<th>DEPT</th>
		<th>UNIT</th>
		<th>SUB UNIT</th>
		<th>QTY</th>
		<th>Request By</th>
		<th>REQ DATE</th>
		<th>STOCK LEVEL</th>
		<th>Approved QTY BY STORE</th>
		<th>SUB STORE</th>
		<th>ACTION</th>
	
		
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="20%">'.$row["name"].'</td>
			
			<td width="20%">'.$row["dept"].'</td>
			<td width="20%">'.$row["unit"].'</td>
			<td width="20%">'.$row["sunit"].'</td>
			<td width="20%">'.$row["quantity"].'</td>
			<td width="20%">'.$row["rname"].'</td>
			<td width="40%">'.$row["rdate"].'</td>
			<td style="color: red; width: 20%"><b>'.$row["qis"].'</b></td> 
			<td style="color: brown; width: width= 40%"><b>'.$row["qa"].'</b></td>
				<td width="40%">'.$row["category"].'</td>
			<td width="10%">

				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Dispatch</button>
			
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">No Available Request Now</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>