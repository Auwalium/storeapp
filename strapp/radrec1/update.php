<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$dept = $_POST['dept'];
		$quantity = $_POST['quantity'];
		$citt = $_POST['citt'];
		$rqa = $_POST['rqa'];
		$rqmd1 = $_POST['rqmd1'];
		$aq = $_POST['aq'];
		$adate = $_POST['adate'];
		
		$stmt = $db_con->prepare("UPDATE requestitem SET  rqmd1=:rs WHERE id=:id");
		
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":rs", $rqmd1);
		
		
		
		
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