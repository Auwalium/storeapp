<?php

include("config.php");

$query="select * from approveditem";
$result2= mysqli_query($mysqli,$query);




$sql1="select sum(cprice) as total_cost from stock ";
$sql="select AVG(cprice) as total_cost from stock ";



$result= mysqli_query($mysqli,$sql);
$result1= mysqli_query($mysqli,$sql1);




while($row = mysqli_fetch_array($result)){

echo "The total cost of Procured items =" .$row['total_cost'];

}
while($row = mysqli_fetch_array($result1)){
	echo "<br>The total Avg of Procured items =" .$row['total_cost'];
}



while($row = mysqli_fetch_array($result2)){
	
	$code=$row['code'];
		$name=$row['name'];
	

echo "$name";
 
mysqli_close($mysqli);



 ?>	
