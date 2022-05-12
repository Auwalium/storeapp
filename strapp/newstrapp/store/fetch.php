

 <?php 
 session_start();
/*include 'dbconnect.php';

$user = $_SESSION['username1'];

$query2 ="SELECT * from users where username = '$user' ";

    $result =mysqli_query($mysqli, $query2);  
    while($row = mysqli_fetch_assoc($result)) 
{ 
    if($row['role'] == 'store users' )
   {
  include('dbconfig.php');
  $query = "SELECT * FROM item inner join category on category.id = item.item_category ";
  
    }
  else
   {
    include('dbconfig.php');
  $query = "SELECT * FROM item ";
  
   }

}*/
 

$user = $_SESSION['username1'];
$role = $_SESSION['role'];
include('dbconfig.php');
if(($role) == ('stationary') )
 {
$query = "SELECT * FROM item where  item.item_category = 'Office Stationary' ";

  }

 elseif(($role) == ('officeequipment') )
	 {
$query = "SELECT * FROM item where  item.item_category = 'office equipment' ";

	 }

	 elseif(($role) == ('maintenance') )
	 {
$query = "SELECT * FROM item where  item.item_category = 'Maintenance Items' ";

	 }

	 elseif(($role) == ('hospitalequipment') )
	 {
$query = "SELECT * FROM item where  item.item_category = 'Hospital Equipment' ";

	 }
else
   {
	echo "no query";
	 }
 
//include('dbconfig.php');
//$query = "SELECT * FROM item where  item.item_category = 'Hospital Equipment' ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>Generic Name</th>
		<th>Brand Name</th>
		<th>Stock Level</th>
		<th>Category</th>
		<th>Date Created</th>
		<th>Created By</th>
		
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
			<td width="40%">'.$row["stock_level"].'</td>
			<td width="40%">'.$row["item_category"].'</td>
			<td width="40%">'.$row["date_created"].'</td>
			<td width="40%">'.$row["created_by"].'</td>

			
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