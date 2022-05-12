 <?php
 
  include('../includes/dbconnect.php');

$LastName = $_SESSION['LastName'];
$FirstName = $_SESSION['FirstName'];
$OtherNames = $_SESSION['OtherNames'];
$DOB = $_SESSION['DOB'];
$Gender = $_SESSION['Gender'];
$Nationality = $_SESSION['Nationality'];
$Passport = $_SESSION['Passport'];
$fid = $_SESSION['fid'];    

$query="select * from stfbiodata where StaffID=$fid";
$result=mysqli_query($con, $query);
    
    include('../includes/dbconnect.php');
    $fid = $_SESSION['fid'];   
    if(isset($_POST['confirm'])){
    
    $sql ="INSERT INTO users(username,password,userlevel,usergroup) VALUES('$fid','pass','13','staff')";
    //Print_r($sql);
    $result = mysqli_query($con, $sql);
    
    if($result){
    echo"<p style='color:green; text-align:center'>".$LastName."  ".$FirstName."  "."has successfully been Documented. The Staff can login with his/her file number as USERNAME and 'pass' as PASSWORD for the first time and change your default password to a SECRET password";
    	}
		
    }
    ?>
	<script>

            setTimeout(function(){
            window.location.href = 'dashboard.php';
            }, 2000000);

    </script>
	
	
	