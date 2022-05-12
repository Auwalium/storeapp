	<?php
include('../functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../index.php');
}


?>	
		<?php
session_start();

 $dispatchby = $_SESSION["username"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer's Details</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	}); 
	
});
</script>

</head>

<body>
  
<div class="well" style="display: table;">
    <h4>Welcome </h4>
      <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: green; font-size: 16px;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="../index.php?logout='1'" style="color: red; font-size: 16px;">logout</a>
			
          </small>

        <?php endif ?>
    
  </div>  

    <div class="container">
      
        <center><h2 class="form-signin-heading">STUDENT'S DETAILS</h2></center><hr />
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View All STUDENTS</button>
       <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Register A New STUDENT</button>
        <hr />
		
       
		
		
	
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive"  style="overflow-x: auto;">
        <thead>
        <tr>
       
		<th>ID</th>
		<th>Reg. No</th>
		<th>Year</th>
		<th>Term</th>
		<th>Class</th>
		<th>Assignment</th>
		<th>Result</th>
        <th>ASSIGN A CLASS TO STUDENT</th>
		<th>VIEW PICTURE</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM session where sclass = 'ss2' and year = 2019 and term = 'third term' ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			
			$id=$row['id'];
		$reg=$row['reg'];
       $year=$row['year'];
		$term=$row['term'];
		$sclass=$row['sclass'];
       
		$gphone=$row['result'];
		$gphone=$row['assignment'];
			
			?>
			<tr>
			
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['reg']; ?></td>
			<td><?php echo $row['year']; ?></td>
			<td><?php echo $row['term']; ?></td>
			<td><?php echo $row['sclass']; ?></td>
			<td><?php echo $row['result']; ?></td>
			<td><?php echo $row['assignment']; ?></td>
			
			<td><a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="BOOK">
			<img src="edit.png" width="20px" />
            </a></td>
			
			<td align="center"><a id="<?php echo $row['id']; ?>" class="delete-link" href="#" title="VIEW">
			<img src="delete.png" width="20px" />
            </a></td>
			</tr>
			
			<?php
		}
		?>
		 </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
        </div>

    </div>
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>


</body>
</html>









     <center><h2>

<a href="http://localhost/schools/teachers/index.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</tr></center></h2>

</body>
</html>









