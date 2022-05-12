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
			
			$stmt = $db_con->prepare("INSERT INTO stock( sname,model,dsup,name,rname,category,sprice,slevel,mdate,edate,cprice,noti) 
			
			VALUES( $name, $model, $dsup, $name, $rname, $category, $sprice, $slevel, $mdate, $edate, $cprice, 1)");
			

			
			
			if($stmt->execute())
			{
				echo "Successfully";
			}
			else{
				echo "Query Problem";
				}	
		
		$stmt = $db_con->prepare("INSERT INTO stock1(sname,model,dsup,name,rname,category,sprice,slevel,mdate,edate,cprice, noti) 
			
			VALUES($name, $model, $dsup, $name, $rname, $category, $sprice, $slevel, $mdate, $edate, $cprice, 1)");
			
			
			
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