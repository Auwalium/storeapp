<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=inventory", "emedion", "Password@1");
$query = "SELECT stock.code, stock.slevel, requestitem.name, requestitem.rqa, requestitem.sunit, requestitem.rqmd, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.rqs,requestitem.unit , requestitem.sunit, requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.category 
	FROM stock inner join requestitem where  stock.name = requestitem.name and requestitem.noti = 1 and stock.category != 'cittu' ORDER BY id DESC ";
$statement = $connect->prepare($query);
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>NAME</th>
		<th>S/L</th>
		<th>UNIT</th>
		<th>SUB UNIT</th>
		<th>QTY</th>
		<th>REQ DATE</th>
		
		<th>QTY HOCS</th>
		<th>QTY ADMIN</th>
		<th>QTY ACCNT</th>
		<th>QTY MD</th>
		<th>ACTION</th>
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
			<td width="20%">'.$row["unit"].'</td>
			<td width="20%">'.$row["sunit"].'</td>
			<td width="20%">'.$row["quantity"].'</td>
			<td width="40%">'.$row["rdate"].'</td>
			<td style="color: brown; width: width= 40%"><b>'.$row["rqs"].'</b></td>
			<td style="color: brown; width: width= 40%"><b>'.$row["rqa"].'</b></td>
			<td style="color: brown; width: width = 40%"><b>'.$row["rqmd"].'</b></td>
			<td style="color: blue; width: 20%"><b>'.$row["rqmd1"].'</b></td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">MD Recomm</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>
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