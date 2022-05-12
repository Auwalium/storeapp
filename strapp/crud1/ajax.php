<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'emedion', 'Password', 'inventory');

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT name, dept, unit FROM requestitem WHERE id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'name' => $data['name'],
				'dept' => $data['dept'],
				'unit' => $data['unit'],
			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT id, name FROM requestitem LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<td>'.$data["id"].'</td>
							<td id="country_'.$data["id"].'">'.$data["name"].'</td>
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

		$name = $conn->real_escape_string($_POST['name']);
		$dept = $conn->real_escape_string($_POST['dept']);
		$unit = $conn->real_escape_string($_POST['unit']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE requestitem SET name='$name', dept='$dept', unit='$unit' WHERE id='$rowID'");
			exit('success');
		}

		if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT id FROM requestitem WHERE name = '$name'");
			if ($sql->num_rows > 0)
				exit("Country With This Name Already Exists!");
			else {
				$conn->query("INSERT INTO requestitem (name, dept, unit) 
							VALUES ('$name', '$dept', '$unit')");
				exit('Country Has Been Inserted!');
			}
		}
	}
?>