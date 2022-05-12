

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registration Page</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> 
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

</head>

<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5" style="padding:2%; background-color:#0067ab;" >
          <div class="card-body p-0" >
            <!-- Nested Row within Card Body -->
            <div class="row" style='background-color:#eee;'>
              <div class="col-lg-6">
              <center class='logo' style='background-color:#eee;;'>
               <h1 class="h4 text-gray-900 mb-4"> STORE INVENTORY SYSTEM <br>FMC EBUTE METTA</h1>
              <img src='http://fmclagos.byethost7.com/img/logo.png' id="logo" alt='Logo' style="border-radius:55px;background-color:transparent;"/>
              
               <h3 class="h4 text-gray-900 mb-4"> COMMITTED TO SERVE AND CARE</h3>
              </center>
              </div>
              <div class="col-lg-6" style='background-color:lavender;'>
                <div class="p-5">
                  <div class="text-center">
                    <h1 style="color:lavender; font-size:17px; font-weight:bold;"> LOGIN</h1>
                  </div>


                  <form class="user" method='post' action='register.php'>
                  	<?php
include_once("connection.php"); 
session_start();
if(isset($_POST['submit'])) {	
	$fname =$_POST['fname'];
	$phone = $_POST['phone'];
  $unit =$_POST['unit'];
  $dept = $_POST['dept'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$usergroup = $_POST['usergroup'];
  $role = $_POST['role'];
 $created_by = $_SESSION['username1'];
		$result = mysqli_query($mysqli, "INSERT INTO users(fname,phone,username,password,usergroup,unit,dept,role,created_by) 
			VALUES('$fname','$phone','$username','$password','$usergroup','$unit','$dept','$role','$created_by')");
		if($result){
			echo '<center>USER REGISTERED SUCCESSFULLY';
			echo"<br/>"."<a href='index.php'> Click Here to Login</a></center>";
		}
		else{
			echo 'REQUEST NOT SUCCESSFUL';
		}
	}
			
?>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="firstname" aria-describedby="emailHelp" name='fname' placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                      <input type="text" name='dept' class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Your Department">
                    </div>
                     
                    <div class="form-group">
                      <input type="text" name='unit' class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Your Unit">
                    </div>
                    <div class="form-group">
                      <input type="text" name='phone' class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Your Phone Number">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" name='username' placeholder="Enter Your Username">
                    </div>

                     <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="password" aria-describedby="emailHelp" name='password' placeholder="Enter Your password">
                    </div>
                    <div class="form-group">
                      Usergroup: <select name="usergroup">
                      <option value="store">store </option>
					            <option value="store_head">store head</option>
				              <option value="heads">heads</option>
                      <option value="md">MD</option>
				              <option value="admin">admin</option>
		                  <option value="user">users</option>
						         <option value="procurement">Procurement</option>
						         <option value="audit">Audit</option>

	                   </select> 
                    </div>
                    <div class="form-group">
                      Role: <select name="role">
                      <option value="md">MD</option>
                      <option value="hn">Head of Nursing</option>
                      <option value="admin">Head of Admin</option>
                      <option value="hcs">Head of clinical Services</option>
                      <option value="account">Head of Account</option>
                      <option value="user">users</option>

                     
                      
                      <option value="procurement">Procurement staff</option>
                      <option value="account">Account staff</option>
                      <option value="officeequipment">Store Office Equipment</option>
                      <option value="scrap">Store Scrap</option>
                      <option value="maintenance">Store Maintenance </option>
                      <option value="stationary">Store Stationary</option>
                      <option value="hospitalequipment">Store Hospital Equipment</option>

                       <option value="hstore">Head of store</option>
					          
					            <option value="audit">Audit</option>
					            <option value="admin">admin</option>
                     </select> 
                    </div>
                   <input type="submit" class="btn-sm btn-primary" name="submit" value="Login" >
                 
                  </form>
                  <hr>
                  
                  <div class="text-center">
                    <a class="small" href="register.html">Register a New User</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>





</body>
</html>