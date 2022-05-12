
		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>stock</title>
<link  href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">


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
<script>
var front = document.getElementById('flipthis')
  , back_content = "&lt;h1>I'm the back!&lt;/h1>" // Generate or pull any HTML you want for the back.
  , back

// when the correct action happens, call flip!
back = flippant.flip(front, back_content)
// this creates the back element, sizes it and flips it around.

// call the close method on the back element when it's time to close.
back.close()
// alternatively you can trigger a close event on the back element if you fancy.
var close_event = new CustomEvent('close')
back.dispatchEvent(close_event)

</script>
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
      
       <center> <h2 class="form-signin-heading">Items in Store and Their Stock Level.</h2><hr /></center>
        
       
        
        <div class="content-loader" style="overflow-x:auto;">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Stock Level</th>
        <th>category</th>
		<th>model</th>
        
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM stock ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['slevel']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['model']; ?></td>
			
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
    

    




</html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>stock</title>


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
    


	<div class="container" style="overflow-x: auto;">
      
        <center><h2 class="form-signin-heading1">Dept/Units Request Awaiting Recommendation for Approval.</h2> </center><hr />
        
    
        
        <div class="content-loader1">
		
				
						<table cellspacing="0" width="90%" id="example" class="table table-striped table-hover table-responsive">
						<thead>
						<tr>
						<th>ID</th>
						<th>STOCK LEVEL</th>
						<th>NAME</th>
						<th>DEPT</th>
						<th>UNIT</th>
						<th>SUB UNIT</th>
						<th>QTY</th>
						 <th>DATE</th>
						<th>RECOM. QTY BY HO CLINICAL</th>
						<th>RECOM. QTY BY HO ADMIN</th>
						<th>RECOM. QTY BY HO ACCT</th>
						<th>APPROVED QTY BY MD</th>
						<th>COMMENT By HOS</th>
						<th>COMMENT By MD</th>
						
						<th><h1 style="text-decoration:underline"><center><button class="btn btn-info" type="button" > <span class="glyphicon glyphicon-pencil"></span>Recommend</th>

						</tr>
						</thead>
						<tbody>
						<?php
						require_once '../dbconfig.php';
						
						$stmt = $db_con->prepare("SELECT stock.slevel, requestitem.name, 
						requestitem.rdate,requestitem.id, requestitem.dept,requestitem.unit , requestitem.sunit, 
						requestitem.quantity, requestitem.rqmd1,requestitem.commentm,requestitem.comments, requestitem.rqmd, requestitem.rqs, requestitem.rqa 
						FROM stock inner join requestitem where  stock.name = requestitem.name AND (requestitem.noti = 1 )and requestitem.category != 'cittu'");	
						
						$stmt->execute();
						while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						{
							
							
						$id=$row['id'];
		
							?>
							<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['slevel']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['dept']; ?></td>
							<td><?php echo $row['unit']; ?></td>
							<td><?php echo $row['sunit']; ?></td>
							<td><?php echo $row['quantity']; ?></td>
							<td><?php echo $row['rdate']; ?></td>
							<td><?php echo $row['rqs']; ?></td>
							<td><?php echo $row['rqa']; ?></td>
							<td><?php echo $row['rqmd']; ?></td>
							<td><?php echo $row['rqmd1']; ?></td>
							<td><?php echo $row['comments']; ?></td>
							<td><?php echo $row['commentm']; ?></td>
							<td align="center">
							<a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Recommend">
							<img src="edit.png" width="20px" />
							</a></td>
						
							
</td>
							
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
<center><h2>

<a href="../index.php?logout='1'" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</tr></center></h2>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Input Item ID</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
         
   
	   <?php
include_once '../dbconfig.php';

//if($_GET['id'])
{
	//echo $row['id']; 
	//$id = 10;	
	if(isset($_POST['btn-update']))
	{
	//$id= $id;
	print_r ($id);
	//$id = echo $row['id']; 
	$id = $_GET['btn-update'];	
	$stmt=$db_con->prepare("SELECT * FROM requestitem WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	}
}

?>
<?php 
// PHP program to demonstrate the use of current  
// date since Unix Epoch  
  
// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
  
// prints the current date 
 
?> 


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post'  action='index1.php'>
 
    <table class='table table-bordered'>
 		<input type='text' name='id'  />
       
		<button type="submit" class="btn btn-secondary" name="btn-update" class="btn btn-default">Submit</button>
       <div class="modal-footer">
       
    </table>
</form>

		
		
		

      </div>
      <div class="modal-footer d-flex justify-content-center">
        
      </div>
    </div>
  </div>
</div>


	
	   
	   
      </div>

        
      </div>
    </div>
  </div>
</div>
</html>

		
		
