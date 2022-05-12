<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("sql213.byethost7.com", "b7_26627836", "1066emedear", "b7_26627836_nsuk");
 $output = '';
 
 if($_POST["action"] == "country")
 {
  $query = "SELECT id FROM item WHERE generic_name = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
 
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["id"].'">'.$row["id"].'</option>';
  }
 }
 echo $output;
}
?>
<?php

//insert.php

$connect = new PDO("mysql:host=sql213.byethost7.com;dbname=b7_26627836_nsuk", "b7_26627836", "1066emedear");

$query = "
INSERT INTO tbl_sample 
(first_name, last_name,country,state,city) 
VALUES (:first_name, :last_name, :country, :state, :city)
";

for($count = 0; $count<count($_POST['hidden_first_name']); $count++)
{
 $data = array(
  ':first_name' => $_POST['hidden_first_name'][$count],
  ':last_name' => $_POST['hidden_last_name'][$count],
  ':country' => $_POST['hidden_country'][$count],
  ':state' => $_POST['hidden_state'][$count],
  ':city' => $_POST['hidden_city'][$count]
 );
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

?>
