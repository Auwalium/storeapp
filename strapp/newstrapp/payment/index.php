

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
      <?php  if (isset($_SESSION['username1'])) : ?>
          <strong><?php echo $_SESSION['username']; ?></strong>

          <small>
            <i  style="color: green; font-size: 16px;">(<?php echo ucfirst($_SESSION['username']); ?>)</i> 
            <br>
            <a href="../index.php?logout='1'" style="color: red; font-size: 16px;">LOGOUT</a>
			
          </small>

        <?php endif ?>
    
  </div>  

    <div class="container">
      <center><h2 class="form-signin-heading">SUPPLIER DEBT/PAYMENT DETAILS</h2></center><hr />
        <hr />

	<div>


 <div class="search" style='background-color:whitesmoke;'>
<center>
<form  action="" method="post">
<!--<input type="text" name="search" width='100%' placeholder="Search with ITEM NAME ">-->

 <div class="container" style="width:500px;">  
                
                <br><tr><td><label>Enter Supplier Name</label></td>  
				<td><input type="text" name="suppliername" width='100%' id='autocomplete' ><br>
				<input type="submit" name="submit" value="Search " class='btn-sm btn-info'></td></tr>
           </div>  

</form>
</center>
</div>
	

<table class='table' id='summary_table'>       
        
		<thead>
        <tr>
            <th colspan="13"><h4></h4></th>
        </tr>       
        <tr>
            <th>ID</th>
			<th>supplier NAME</th>
		<th>Item NAME</th>	
		<th>amount</th>
		<th>DESCRIPTION</th>
		<th>quantity</th>
		<th>Total Due Payment</th>
		<th>Date recieved</th>
		
		
	</thead>
        </tr>
        <?php	
		
	 if(isset($_POST["submit"]))  
 {      
        $suppliername =  $_POST['suppliername'];
		
		require_once '../config.php';
		$sql="SELECT SUM(amount)*SUM(qty) AS TotalItemsOrdered FROM lpo where lpo.suppliername = '$suppliername' and qty != ''";
		$result=mysqli_query($mysqli,$sql);
		$row1=mysqli_fetch_array($result);
		
		$sql="SELECT SUM(amount)AS TotalItemsOrdered FROM payment where suppliername = '$suppliername'";
		$result=mysqli_query($mysqli,$sql);
		$row2=mysqli_fetch_array($result);

		$sql="SELECT * from lpo INNER join item where item.lpo=lpo.id and lpo.suppliername = '$suppliername'";
        $result = mysqli_query($mysqli,$sql);
		//print_r($sql);
		
		while ($row=mysqli_fetch_assoc($result))
             {
				 $amount= $row['amount'];
				 $qty= $row['qty'];
		//echo "[('$category'),".$row['Total']."],"; 
		
	
            ?>
            <tbody>
                <tr>
				<td><?php echo $row['id']; ?></td>
             <td><?php echo $row['suppliername']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['descrip']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo ($amount * $qty); ?></td> 
			<td><?php echo $row['date2']; ?></td>			
            
            </tr>
		
		
		
      
	   </tbody>   
<?php
}
 }
?>

        
        
<tr>
			<td style='color:purple;'>TOTAL Debt</td>
             <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td style='color:red;'><?php echo "$row1[0]"; ?></td>
			<td></td>			
            <td></td>
			
			<td ></td>
            </tr>

<tr>
			<td style='color:purple;'>TOTAL Payment</td>
             <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td style='color:blue;'><?php echo "$row2[0]"; ?></td>
			<td></td>			
            <td></td>
			
			<td ></td>
            </tr>

<tr>
			<td style='color:purple;'>TOTAL Balance</td>
             <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td style='color:red;'><?php echo ("$row1[0]" -"$row2[0]"); ?></td>
			<td></td>			
            <td></td>
			
			<td ></td>
            </tr>
			<td> <?php echo "<a href='edit.php?id=$suppliername' class='badge badge-primary'> Record Payment</a>";?> 
			<img src="edit.png" width="20px" />
            </a></td>
</table>
<div>
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
	
        
		<center><a href="../registry/dashboard.php" class="btn btn-warning">Back</a>
		
     
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

</body>
</html>
