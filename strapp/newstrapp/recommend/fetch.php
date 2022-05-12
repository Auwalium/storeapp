<?php

session_start();

include 'connection.php';
$user = $_SESSION['username1'];
$query1 ="SELECT * from users where username = '$user' limit 1 ";

		$result =mysqli_query($mysqli, $query1);  
		while($row = mysqli_fetch_assoc($result)) 
{		$role = $row['role'];
		  
		if($row['role'] == 'md' )
	 {
	include('dbconfig.php');

	$query = "SELECT item.generic_name, item.brand_name,item.stock_level, requestitem.name, requestitem.rqa, requestitem.sunit, requestitem.rqmd, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.rqs,requestitem.unit , requestitem.sunit, requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.category ,requestitem.nursing
	FROM item inner join requestitem where  item.brand_name = requestitem.name and requestitem.noti = 1 ";
	 
	  }

	   elseif($row['role'] == 'hn' )
	 {
	include('dbconfig.php');

	  $query = "SELECT  item.generic_name, item.brand_name,item.stock_level, requestitem.name, requestitem.nursing, requestitem.sunit, requestitem.rqmd, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.rqs,requestitem.unit , requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.category,requestitem.nursing 
	FROM item inner join requestitem where  item.brand_name = requestitem.name and requestitem.unit = 'nursing' and requestitem.noti = 1 and item.brand_name = requestitem.name";

	
		
	 }
	  elseif($row['role'] == 'hcs' )
	 {
	include('dbconfig.php');

	  $query = "SELECT  item.generic_name,item.brand_name, item.stock_level, requestitem.name, requestitem.rqmd, requestitem.sunit, requestitem.rqmd, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.rqs,requestitem.unit , requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.category,requestitem.nursing 
	FROM item inner join requestitem where  item.brand_name = requestitem.name and requestitem.dept = 'Clinical' and requestitem.noti = 1 ";
	 
		
	 }
	elseif($row['role'] == 'admin' )

	 {
	include('dbconfig.php');

	  $query = "SELECT  item.generic_name,item.brand_name, item.stock_level, requestitem.name, requestitem.rqa, requestitem.sunit, requestitem.rqmd, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.rqs,requestitem.unit , requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.category,requestitem.nursing 
	FROM item inner join requestitem where  item.brand_name = requestitem.name and requestitem.dept = 'Admin' and requestitem.noti = 1 ";
	 
		
	 }
	 elseif($row['role'] == 'account' )

	 {
	include('dbconfig.php');
	
	 $query = "SELECT  item.generic_name,item.brand_name, item.stock_level, requestitem.name, requestitem.rqs, requestitem.sunit, requestitem.rqmd, requestitem.rdate,requestitem.id, requestitem.dept,requestitem.rqs,requestitem.unit , requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.category,requestitem.nursing 
	FROM item inner join requestitem where  item.brand_name = requestitem.name and requestitem.dept = 'Account' and requestitem.noti = 1 ";
		
	 }

	 else

	 {
	echo "no query";
	 }

}






include('dbconfig.php');

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
		<th>QTY REQUESTED</th>
		<th>REQ DATE</th>
		
		<th>RECOMM QTY BY HONS</th>
		<th>RECOMM QTY BY HOCS </th>
		<th>RECOMM QTY BY ADMIN  </th>
		<th>RECOMM QTY BY ACCOUNT</th>
		<th>ACTION</th>
	
		
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="20%">'.$row["name"].' </td>
			<td style="color: red; width: 20%"><b>'.$row["stock_level"].'</b></td> 
			<td width="20%">'.$row["dept"].'</td>
			<td width="20%">'.$row["unit"].'</td>
			<td width="20%">'.$row["sunit"].'</td>
			<td style="color: blue; width: 20%"><b>'.$row["quantity"].'</td>
			<td width="40%">'.$row["rdate"].'</td>
			<td style="color: brown; width: width= 40%"><b>'.$row["nursing"].'</b></td>
			<td style="color: brown; width: width= 40%"><b>'.$row["rqmd"].'</b></td>
			<td style="color: brown; width: width= 40%"><b>'.$row["rqa"].'</b></td>
			<td style="color: brown; width: width = 40%"><b>'.$row["rqs"].'</b></td>
			<td width="10%"> <button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Recommend</button>
			 
			</td>
			
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