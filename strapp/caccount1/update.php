<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$descrip = $_POST['descrip'];
		$qty = $_POST['qty'];
		$aqp = $_POST['aqp'];
		$acp = $_POST['acp'];
		$adate = $_POST['adate'];
		$sdate = $_POST['sdate'];
		$acq = $_POST['acq'];
		$aname = $_POST['aname'];
		$ucd = $_POST['ucd'];
		$uname = $_POST['uname'];
		
		$tc = $_POST['tc'];
		$pay1 = $_POST['pay1'];
		$cheq1 = $_POST['cheq1'];
		$date1 = $_POST['date1'];
		
		$pay2 = $_POST['pay2'];
		$cheq2 = $_POST['cheq2'];
		$date2 = $_POST['date2'];
		
		$pay3 = $_POST['pay3'];
		$cheq3 = $_POST['cheq3'];
		$date3 = $_POST['date3'];
		
		$cname1 = $_POST['cname1'];
		$cname2 = $_POST['cname2'];
		$cname3 = $_POST['cname3'];
		
		$remain = ($tc -$pay1 -$pay2 -$pay3);
		
		
		$stmt = $db_con->prepare("UPDATE company SET pay1=:en, cheq1=:ec, date1=:yd, pay2=:ed, cheq2=:cc, date2=:dd,  pay3=:et, cheq3=:ff, date3=:yy, remain=:rt, cname1 =:mm, cname2 =:oo, cname3 =:pp WHERE id=:id");
		$stmt->bindParam(":en", $pay1);
		$stmt->bindParam(":ec", $cheq1);
		$stmt->bindParam(":yd", $date1);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":ed", $pay2);
		$stmt->bindParam(":cc", $cheq2);
		$stmt->bindParam(":dd", $date2);
		$stmt->bindParam(":et", $pay3);
		$stmt->bindParam(":ff", $cheq3);
		$stmt->bindParam(":yy", $date3);
		$stmt->bindParam(":rt", $remain);
		$stmt->bindParam(":mm", $cname1);
		$stmt->bindParam(":oo", $cname2);
		$stmt->bindParam(":pp", $cname3);
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		
		
		$stmt = $db_con->prepare("UPDATE company1 SET pay1=:en, cheq1=:ec, date1=:yd, pay2=:ed, cheq2=:cc, date2=:dd,  pay3=:et, cheq3=:ff, date3=:yy, remain=:rt, cname1 =:mm, cname2 =:oo, cname3 =:pp WHERE id=:id");
		$stmt->bindParam(":en", $pay1);
		$stmt->bindParam(":ec", $cheq1);
		$stmt->bindParam(":yd", $date1);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":ed", $pay2);
		$stmt->bindParam(":cc", $cheq2);
		$stmt->bindParam(":dd", $date2);
		$stmt->bindParam(":et", $pay3);
		$stmt->bindParam(":ff", $cheq3);
		$stmt->bindParam(":yy", $date3);
		$stmt->bindParam(":rt", $remain);
		$stmt->bindParam(":mm", $cname1);
		$stmt->bindParam(":oo", $cname2);
		$stmt->bindParam(":pp", $cname3);
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
