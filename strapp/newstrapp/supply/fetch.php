<?php

session_start();
$user = $_SESSION['username1'];
$role = $_SESSION['role'];
include('dbconfig.php');
if(($role) == ('stationary') )
 {
$query = "select item.generic_name, item.brand_name, item.item_category, supply.lpo,supply.id,supply.supply_price,supply.model_no,supply.quantity_supply, supply.manufacture_date,supply.expire_date,supply.created_by,supply.date_created, supplier.name

 from supplier join supply on supplier.id = supply.supply_id join item on supply.item_id = item.id where  item.item_category = 'Office Stationary'";

  }

 elseif(($role) == ('officeequipment') )
	 {
$query = "select item.generic_name, item.brand_name, item.item_category, supply.lpo,supply.id,supply.supply_price,supply.model_no,supply.quantity_supply, supply.manufacture_date,supply.expire_date,supply.created_by,supply.date_created, supplier.name

 from supplier join supply on supplier.id = supply.supply_id join item on supply.item_id = item.id where  item.item_category = 'office equipment'";

	 }

	 elseif(($role) == ('maintenance') )
	 {
$query = "select item.generic_name, item.brand_name, item.item_category, supply.lpo,supply.id,supply.supply_price,supply.model_no,supply.quantity_supply, supply.manufacture_date,supply.expire_date,supply.created_by,supply.date_created, supplier.name

 from supplier join supply on supplier.id = supply.supply_id join item on supply.item_id = item.id where  item.item_category = 'Maintenance Items'";
	 }

	 elseif(($role) == ('hospitalequipment') )
	 {
$query = "select item.generic_name, item.brand_name, item.item_category, supply.lpo,supply.id,supply.supply_price,supply.model_no,supply.quantity_supply, supply.manufacture_date,supply.expire_date,supply.created_by,supply.date_created, supplier.name

 from supplier join supply on supplier.id = supply.supply_id join item on supply.item_id = item.id where  item.item_category = 'Hospital Equipment'";


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
		<th>Item Name</th>
		<th>Brand Name</th>
		<th>LPO </th>
		<th>supply Name</th>
		<th>Supply Price </th>
		
		<th>Quantity Supply</th>
		<th>Manufacture Date </th>

		<th>Expire Date </th>
		<th>Created By</th>
		
		<th>Sub Store </th>
		
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="40%">'.$row["generic_name"].'</td>
			<td width="40%">'.$row["brand_name"].'</td>
			<td width="40%">'.$row["lpo"].'</td>
			<td width="40%">'.$row["name"].'</td>
			<td width="40%">'.$row["supply_price"].'</td>

			
			<td width="40%">'.$row["quantity_supply"].'</td>
			<td width="40%">'.$row["manufacture_date"].'</td>

			<td width="40%">'.$row["expire_date"].'</td>
			<td width="40%">'.$row["created_by"].'</td>
			
			<td width="40%">'.$row["item_category"].'</td>
			
			
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