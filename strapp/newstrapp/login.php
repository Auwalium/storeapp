<?php 
session_start();
//include('dbconnect.php');    

include_once("connection.php"); 
if(isset($_POST['submit'])) {	
	$username =$_POST['username'];
	$_SESSION['username1'] =$_POST['username'];
	$password = md5($_POST['password']);

$sql = "SELECT * from users where username ='$username' and password = '$password' limit 1";
//print_r($sql);
$result = mysqli_query($mysqli,$sql);

$row = mysqli_fetch_assoc($result);
$_SESSION['role']= $row['role'];
$_SESSION['sunit']= $row['sunit'];
$_SESSION['unit']= $row['unit'];
$_SESSION['dept']= $row['dept'];
$_SESSION['fname']= $row['fname'];
if(mysqli_num_rows($result) != 1){    
  
echo "<script>alert(' Wrong Username or Password Access Denied !!! Try Again');
						window.location='index.php';
						</script>";          
						
	}
	else
	{
						
	 if($row['usergroup'] == 'admin' )
	 {
	  ($_SESSION['username']= 'Admin');
		  header('location:admin/dashboard.php');
	}
	elseif($row['usergroup'] == 'store' )
	 {
	  $_SESSION['username']= 'store';
	  header('location:dispatch');
	}
	
	elseif($row['usergroup'] == 'heads' )
	 {
	  $_SESSION['username']= 'head';
	 
	  header('location:recommend');
	}
	elseif($row['usergroup'] == 'md' )
	 {
	  $_SESSION['username']= 'md';
	 
	  header('location:mdrecommend');
	}

	
	elseif($row['usergroup'] == 'user' )
	 {
	  $_SESSION['username']= 'user';
	  header('location:requestlab');
	  
	}
	elseif($row['usergroup'] == 'procurement' )
	 {
	  $_SESSION['username']= 'procurement';
	  header('location:registry/dashboard.php');
	}
	elseif($row['usergroup'] == 'store_head' )
	 {
	  $_SESSION['username']= 'store_head';
	  header('location:approved');
	}
	else
	{
echo "You do not belong to any group";
	}
 }

}
function isLoggedIn()
{
	if (isset($_SESSION['username2'])) {
		return true;
	}else{
		return false;
	}
}
?>