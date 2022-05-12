<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$quantity = $_POST['quantity'];
		$rqs = $_POST['rqs'];
		$rqa = $_POST['rqa'];
		$rqmd = $_POST['rqmd'];
		$aq = $_POST['aq'];
		$adate = $_POST['adate'];
		$rqhn = $_POST['rqhn'];
		
		$stmt = $db_con->prepare("UPDATE requestitem SET  rqhn =:eb WHERE id=:id");
		
		$stmt->bindParam(":id", $id);
		
		$stmt->bindParam(":eb", $rqhn);
		
		
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		//redirecting to the display page (index.php in our case)
		header("Location:index.php");
	}

?>

<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$emp_name = $_POST['emp_name'];
		$emp_dept = $_POST['emp_dept'];
		$emp_salary = $_POST['emp_salary'];
		
		$stmt = $db_con->prepare("UPDATE tbl_employees SET emp_name=:en, emp_dept=:ed, emp_salary=:es WHERE emp_id=:id");
		$stmt->bindParam(":en", $emp_name);
		$stmt->bindParam(":ed", $emp_dept);
		$stmt->bindParam(":es", $emp_salary);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
				//redirecting to the display page (index.php in our case)
		header("Location:index.php");
	}

?>