<?php

session_start();




include('dbconfig.php');
	  $query = "SELECT item.generic_name, item.stock_level, requestitem.name,requestitem.rname, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.unit , requestitem.sunit, requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.category,requestitem.approved_qty 
	FROM item inner join requestitem where  item.generic_name = requestitem.name AND (requestitem.noti = 3 ) ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>NAME</th>
		<th>STOCK LEVEL</th>
		<th>DEPT</th>
		<th>UNIT</th>
		<th>SUB UNIT</th>
		<th>QTY</th>
		<th>Request By</th>
		<th>REQ DATE</th>
		<th>Approved QTY BY STORE</th>
		
		<th>RECOMM QTY BY MD</th>
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
			<td style="color: red; width: 20%"><b>'.$row["stock_level"].'</b></td> 
			<td width="20%">'.$row["dept"].'</td>
			<td width="20%">'.$row["unit"].'</td>
			<td width="20%">'.$row["sunit"].'</td>
			<td width="20%">'.$row["quantity"].'</td>
			<td width="20%">'.$row["rname"].'</td>
			<td width="40%">'.$row["rdate"].'</td>
			<td style="color: brown; width: width= 40%"><b>'.$row["approved_qty"].'</b></td>
			
			<td style="color: blue; width: 20%"><b>'.$row["rqmd1"].'</b></td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Recommend</button>
			
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>