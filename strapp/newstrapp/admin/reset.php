<?php  
    include_once 'includes/header.html';
    include_once 'includes/aside.html';   

?>               
                <div id="layoutSidenav_content">    
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       
							<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 USERS ROLES MANAGEMENT
</button></center>

	   
  <div class='table-responsive' > 
  <table class='table' id='department_table1'>
  <thead style='color:green;'>
  <th> ID </th><th> Username </th> <th> User Level </th><th> User Group </th> 
  <th> Assign Role</th><th>Reset Password</th><th>Reset Role</th> 
  <thead>
  
  <?php 
  
    include 'connection.php';
  $sql ="SELECT * FROM users ORDER BY id ASC";
 // print_r($sql);
  
  $result = mysqli_query($mysqli,$sql);
  
  while($row = mysqli_fetch_array($result)){
  
            $did 		= $row['id'];
	    $depart 		= $row['first_name'];
	    $created_by 	= $row['other_name'];
	    $date	 	= $row['last_name'];
	    
  echo"<tr style='color:black;'><td> $did </td> <td>$depart</td> <td>$created_by</td> <td>$date</td><td> <a href='assignrole.php?did=$did&username=$depart'>Assign Role</a> </td> <td><a href='resetpassword.php?did=$did&username=$depart'>Reset Password</a> </td>  <td><a href='assignrole2.php?did=$did&username=$depart'>Reset Role</a> </td> </tr>";
 
  
  }
  mysqli_close($con);
  
  ?>
  
  </table>
  
  
                    
                        
    </div>
                        
                    </div>
                </main>
                

<?php  
     
    include_once 'includes/footer.html';

?>                     