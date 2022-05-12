<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=inventory", "emedion", "Password");
$query = "SELECT stock.code, stock.slevel, requestitem.name, requestitem.rqhn,requestitem.unit, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.unit , requestitem.sunit, requestitem.quantity, requestitem.rqmd,requestitem.commentm,requestitem.comments, requestitem.category 
	FROM stock inner join requestitem where  stock.name = requestitem.name and requestitem.unit = 'nursing' and requestitem.noti != 3 ORDER BY id DESC ";
$statement = $connect->prepare($query);
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
		<th>SUB_UNIT</th>
		<th>QTY</th>
		<th>REQ DATE</th>
		
		<th>RECOMM QTY BY HEAD OF NURSING</th>
		
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
			<td style="color: red; width: 20%"><b>'.$row["slevel"].'</b></td> 
			<td width="20%">'.$row["dept"].'</td>
			<td width="20%">'.$row["unit"].'</td>
			<td width="20%">'.$row["sunit"].'</td>
			<td width="20%">'.$row["quantity"].'</td>
			<td width="40%">'.$row["rdate"].'</td>
			<td style="color: brown; width: 40%"><b>'.$row["rqhn"].'</b></td>
			
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Head of Nursing Recommendation</button>
			</td>
			
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