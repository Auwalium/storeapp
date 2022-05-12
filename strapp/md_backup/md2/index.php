
		
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
        require_once '../dbconfig.php';
        
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
						FROM stock inner join requestitem where  stock.name = requestitem.name AND (requestitem.noti = 1 )and requestitem.category != 'cittu' ");
						$stmt->execute();
						while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						{
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

</html>

		
		
