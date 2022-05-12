

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Stock to Store</title>
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
      
        <h2 class="form-signin-heading">Items with Stock Level less than 4</h2><hr />
              <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp;Raise LPO for other Items</button>

        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive" style="overflow-x: scroll;">
		
		
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
		<th>Supplier</th>
		<th>Model</th>
		<th>Stock level</th>
		<th>Manufactured date</th>
	   <th>Category</th>
	   <th>Edit</th>
		
        
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * from stock where slevel <='4' and noti = 1 ORDER BY category DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['dsup']; ?></td>
			<td><?php echo $row['model']; ?></td>
			<td style = "color:red;><?php echo $row['slevel']; ?></td>
			<td><?php echo $row['edate']; ?></td>
			<td><?php echo $row['category']; ?></td>
			
			
			<td align="center"><a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Approve">
			<img src="edit.png" width="20px" />
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
      
       
		
		
		
		
		
		
       <center><h4>Check all Items with Low Stock Level</center></h4>
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





  
 <center> <form class="form-inline my-2 my-lg-0" method="post" action= "index.php">
      <input class="form-control mr-sm-2" type="int" placeholder="enter stock level" aria-label="Search" name="slevel">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit3" value="Search">
    </form></center>
	
<?php
require_once '../config.php';
if(isset($_POST['search_submit3'])){
  $slevel = $_POST['slevel'];
 $query="select * from stock where slevel <='$slevel'";
 $result=mysqli_query($mysqli,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3 style="text-shadow:1px 2px black;">Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
	<th> ID</th>
      <th> Item Name</th>
      <th>Supplier</th>
	  <th>Model</th>
      <th>Stock level</th>
      <th>Manufactured date</th>
	   <th>Category</th>
	  
    
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
   
	  $id=$row['id'];
	 $name=$row['name'];
    $rname=$row['rname'];
    $model=$row['model'];
    $slevel=$row['slevel'];
    $edate=$row['edate'];
	  $category=$row['category'];
	
	
	
    echo '<tr>
     <td>'.$id.'</td>
	  <td>'.$name.'</td>
      <td>'.$rname.'</td>
      <td>'.$model.'</td>
      <td>'.$slevel.'</td>
      
	  <td>'.$edate.'</td>
	   <td>'.$category.'</td>
	  
	   
	 
			
	   
    </tr>';
	
	
  }
echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
   
</html>';
	
}
	
	?>
	
	
 <div class="container">
      
        <div class="alert alert-info">
        
		
		
		
		
		
        <a href="../index.php?logout='1'" class="btn btn-danger">Back </a></center>
        </div>

</body>
</html>