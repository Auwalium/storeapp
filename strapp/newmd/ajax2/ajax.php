<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'emedion', 'Password', 'inventory');

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT name, dept, quantity, rqmd1,adate, sunit, unit FROM requestitem WHERE id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'name' => $data['name'],
				'quantity' => $data['quantity'],
				'dept' => $data['dept'],
				'sunit' => $data['sunit'],
				'unit' => $data['unit'],
				'rqmd1' => $data['rqmd1'],
				'adate' => $data['adate'],
			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT stock.slevel, requestitem.name, 
						requestitem.rdate,requestitem.id, requestitem.dept,requestitem.unit , requestitem.sunit, requestitem.adate,
						requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.rqmd, requestitem.rqs, requestitem.rqa 
						FROM stock inner join requestitem where  stock.name = requestitem.name AND (requestitem.noti = 1 ) LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<td>'.$data["id"].'</td>
							<td id="requestitem_'.$data["id"].'">'.$data["slevel"].'</td>
							<td id="requestitem_'.$data["id"].'">'.$data["name"].'</td>
							<td id="requestitem_'.$data["id"].'">'.$data["quantity"].'</td>
							<td id="requestitem_'.$data["id"].'">'.$data["dept"].'</td>
							<td id="requestitem_'.$data["id"].'">'.$data["unit"].'</td>
							<td id="requestitem_'.$data["id"].'">'.$data["sunit"].'</td>
							<td id="requestitem_'.$data["id"].'">'.$data["rqmd1"].'</td>
							<td id="requestitem_'.$data["id"].'">'.$data["adate"].'</td>
							<td>
								<input type="button" onclick="viewORedit('.$data["id"].', \'edit\')" value="Edit" class="btn btn-primary">
								<input type="button" onclick="viewORedit('.$data["id"].', \'view\')" value="View" class="btn">
								<input type="button" onclick="deleteRow('.$data["id"].')" value="Delete" class="btn btn-danger">
							</td>
						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'deleteRow') {
			$conn->query("DELETE FROM requestitem WHERE id='$rowID'");
			exit('The Row Has Been Deleted!');
		}
		$quantity = $conn->real_escape_string($_POST['quantity']);
		$name = $conn->real_escape_string($_POST['name']);
		$dept = $conn->real_escape_string($_POST['dept']);
		$rqmd1 = $conn->real_escape_string($_POST['rqmd1']);
		$adate = $conn->real_escape_string($_POST['adate']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE requestitem SET name='$name', dept='$dept',adate='$adate', quantity='$quantity',rqmd1='$rqmd1' WHERE id='$rowID'");
			exit('success');
		}

		if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT id FROM requestitem WHERE name = '$name'");
			if ($sql->num_rows > 0)
				exit("requestitem With This Name Already Exists!");
			else {
				$conn->query("INSERT INTO requestitem (name, dept, rqmd1, quantity) 
							VALUES ('$name', '$dept', '$rqmd1', '$quantity')");
				exit('requestitem Has Been Inserted!');
			}
		}
	}
?>