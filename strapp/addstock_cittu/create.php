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
		
		$sprice = $_POST['sprice'];
		$slevel = $_POST['slevel'];
		$mdate = $_POST['mdate'];
		$edate = $_POST['edate'];
		$udate = $_POST['udate'];
		$cprice = ($slevel * $sprice);
		try{
			
			$stmt = $db_con->prepare("INSERT INTO stock(descrip, sname,model,dsup,name,rname,category,sprice,slevel,mdate,edate,cprice,noti) 
			
			VALUES(:edescrip, :esname, :emodel, :edsup, :ename, :ername, :ecategory, :esprice, :eslevel, :emdate, :eedate, :ecprice, 1)");
			
			$stmt->bindParam(":edescrip", $descrip);
			$stmt->bindParam(":esname", $sname);
			$stmt->bindParam(":emodel", $model);
			$stmt->bindParam(":edsup", $dsup);
			$stmt->bindParam(":ename", $name);
			$stmt->bindParam(":ername", $rname);
			$stmt->bindParam(":ecategory", $category);
			
			$stmt->bindParam(":esprice", $sprice);
			$stmt->bindParam(":eslevel", $slevel);
			$stmt->bindParam(":emdate", $mdate);
			$stmt->bindParam(":eedate", $edate);
			$stmt->bindParam(":ecprice", $cprice);
			
			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	
		
		$stmt = $db_con->prepare("INSERT INTO stock1(sname,model,dsup,name,rname,category,sprice,slevel,mdate,edate,cprice, noti) 
			
			VALUES(:esname, :emodel, :edsup, :ename, :ername, :ecategory, :esprice, :eslevel, :emdate, :eedate, :ecprice, 1)");
			
			$stmt->bindParam(":esname", $sname);
			$stmt->bindParam(":emodel", $model);
			$stmt->bindParam(":edsup", $dsup);
			$stmt->bindParam(":ename", $name);
			$stmt->bindParam(":ername", $rname);
			$stmt->bindParam(":ecategory", $category);
			
			$stmt->bindParam(":esprice", $sprice);
			$stmt->bindParam(":eslevel", $slevel);
			$stmt->bindParam(":emdate", $mdate);
			$stmt->bindParam(":eedate", $edate);
			$stmt->bindParam(":ecprice", $cprice);
			
			if($stmt->execute())
			{
				echo "Added";
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