
<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=inventory", "root", "");

$query = "
INSERT INTO voucher 
(amount, folio, remarks, way_bill, item_description, unit, unit_price,qty_received,vnumber) 
VALUES (:amount, :folio,:remarks,:way_bill,:item_description,:unit,:unit_price ,:qty_received,:vnumber)
";

for($count = 0; $count<count($_POST['hidden_amount']); $count++)
{
 $data = array(
  ':amount' => $_POST['hidden_amount'][$count],
  ':folio' => $_POST['hidden_folio'][$count],
  ':remarks' => $_POST['hidden_remarks'][$count],
  ':way_bill' => $_POST['hidden_way_bill'][$count],
  ':item_description' => $_POST['hidden_item_description'][$count],
  ':unit' => $_POST['hidden_unit'][$count],
  ':unit_price' => $_POST['hidden_unit_price'][$count],
   ':qty_received' => $_POST['hidden_qty_received'][$count],
   ':vnumber' => $_POST['hidden_vnumber'][$count]
 );
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

?>
