<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{	
		$descrip = $_POST['descrip'];
		$sname = $_POST['sname'];
		$model = $_POST['model'];
		$dsup = $_POST['dsup'];
		$name = $_POST['name'];
		$rname = $_POST['rname'];
		$category = $_POST['category'];
		$cprice = $_POST['cprice'];
		$sprice = $_POST['sprice'];
		$slevel = $_POST['slevel'];
		$mdate = $_POST['mdate'];
		$edate = $_POST['edate'];
		$udate = $_POST['udate'];
		$cost = ($slevel * $sprice);
		try{
			
			$stmt = $db_con->prepare("INSERT INTO stock(descrip, sname,model,dsup,name,rname,category,sprice,cprice,slevel,oslevel,mdate,edate,cost,noti) 
			
			VALUES(:edescrip, :esname, :emodel, :edsup, :ename, :ername, :ecategory, :esprice , :ecprice, :eslevel,:eoslevel, :emdate, :eedate, :ecost, 1)");
			//print_r($stmt);
			$stmt->bindParam(":edescrip", $descrip);
			$stmt->bindParam(":esname", $sname);
			$stmt->bindParam(":emodel", $model);
			$stmt->bindParam(":edsup", $dsup);
			$stmt->bindParam(":ename", $name);
			$stmt->bindParam(":ername", $rname);
			$stmt->bindParam(":ecategory", $category);
			$stmt->bindParam(":ecprice", $cprice);
			$stmt->bindParam(":esprice", $sprice);
			$stmt->bindParam(":eslevel", $slevel);
			$stmt->bindParam(":eoslevel", $slevel);
			$stmt->bindParam(":emdate", $mdate);
			$stmt->bindParam(":eedate", $edate);
			$stmt->bindParam(":ecost", $cost);
			
			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	
		
		
		}
		
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>