
<?php
session_start();

if($_SESSION['username'] != 'store_head') 
{
    header("Location: ../index.php");
}


$currentTimeinSeconds = time();  
	    $currentDate = date('Y-m-d', $currentTimeinSeconds); 
	    $y = date('Y'); 
	    $m = date('m'); 
	    $d = date('d');				    
		 
if (($m == 4) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set apr = stock_level WHERE apr != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
elseif (($m == 1) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set jan = stock_level WHERE jan != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
 elseif (($m == 2) and ($d == 28))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set feb = stock_level WHERE feb != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
elseif (($m == 3) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set mar = stock_level WHERE mar != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
 elseif (($m == 5) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set may = stock_level WHERE may != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
 elseif (($m == 6) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set jun = stock_level WHERE jun != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }

elseif (($m == 7) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set jul = stock_level WHERE jul != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
elseif (($m == 8) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set aug = stock_level WHERE aug != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
elseif (($m == 9) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set sep = stock_level WHERE sep != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
elseif (($m == 10) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set oct = stock_level WHERE oct != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
elseif (($m == 11) and ($d == 30))
 {
 	   include('connection.php');     
		 $query6 = "UPDATE report set nov = stock_level WHERE nov != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
 }
else
{
include('connection.php');     
		 $query6 = "UPDATE report set de = stock_level WHERE de != stock_level";	
		$result1 = mysqli_query($mysqli, $query6);	
}


?>


<html>  
    <head>  
        <title>STORE APPROVAL</title>  
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
    </head>  
    <body>  
		<?php

 $dispatchby = $_SESSION["username"];
?>
	<div class="well" style="display: table;">
    <h4>Welcome </h4>
      <?php  if (isset($_SESSION['username'])) : ?>
          <strong><?php echo $_SESSION['username1']; ?></strong>
          <small>
	<?php $user = $_SESSION['username1'];?>
            <i  style="color: green; font-size: 16px;">(<?php echo ucfirst($_SESSION['username']); ?>)</i> 
            <br>
            <a href="../index.php?logout='1'" style="color: red; font-size: 16px;">logout</a>
          </small>

        <?php endif ?>
    
  </div>

        <div class="container">
		
		
			<br />
			
			<h2 style="color: green;" align="center"align="center">RECOMMENDED QUANTITY ON REQUEST, <br>AWAITING STORE APPROVAL AND DISPATCH.</h2><br />
			<br />
			<a  href="../report" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> REPORTS</button> </a><BR>
			<a  href="../mreport" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> CHECK ALL STOCK AND STOCK LEVEL</button> </a>
		
			<div align="right" style="margin-bottom:5px;">
		<!-- <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button> -->
			</div>
			<div class="table-responsive" id="user_data">
				
			</div>
			<br />
		</div>
		
		<div id="user_dialog" title="Add Data">
			<form method="post" id="user_form">
				
				<div class="form-group">
					<label>Recommended Quantity by MD</label>
					<input type="text" name="rqmd1" id="rqmd1" class="form-control" />
					<span id="error_quantity" class="text-danger"></span>
				</div>
				<div class="form-group">
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="hidden" name="hidden_id" id="hidden_id" />
					<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
				</div>
			</form>
		</div>
		
		<div id="action_alert" title="Action">
			
		</div>
		
		<div id="delete_confirmation" title="Confirmation">
		<p>Are you sure you want to Delete this data?</p>
		</div>
		
    </body>  
</html>  




<script>  
$(document).ready(function(){  

	load_data();
    
	function load_data()
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}
	
	$("#user_dialog").dialog({
		autoOpen:false,
		width:400
	});
	
	$('#add').click(function(){
		$('#user_dialog').attr('title', 'Add Data');
		$('#action').val('insert');
		$('#form_action').val('Insert');
		$('#user_form')[0].reset();
		$('#form_action').attr('disabled', false);
		$("#user_dialog").dialog('open');
	});
	
	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var error_first_name = '';
		var error_last_name = '';
		var error_rqmd1 = '';
		if($('#rqmd1').val() == '')
		{
			error_rqmd1 = 'rqmd1 is required';
			$('#error_rqmd1').text(error_quantity);
			$('#rqmd1').css('border-color', '#cc0000');
		}
		else
		{
			error_rqmd1 = '';
			$('#error_rqmd1').text(error_quantity);
			$('#rqmd1').css('border-color', '');
		}
		if($('#first_name').val() == '')
		{
			error_first_name = 'First Name is required';
			$('#error_first_name').text(error_first_name);
			$('#first_name').css('border-color', '#cc0000');
		}
		else
		{
			error_first_name = '';
			$('#error_first_name').text(error_first_name);
			$('#first_name').css('border-color', '');
		}
		if($('#last_name').val() == '')
		{
			error_last_name = 'Last Name is required';
			$('#error_last_name').text(error_last_name);
			$('#last_name').css('border-color', '#cc0000');
		}
		else
		{
			error_last_name = '';
			$('#error_last_name').text(error_last_name);
			$('#last_name').css('border-color', '');
		}
		
		if(error_first_name != '' || error_last_name != '' || error_rqmd1 != '')
		{
			return false;
		}
		else
		{
			$('#form_action').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"action.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_dialog').dialog('close');
					$('#action_alert').html(data);
					$('#action_alert').dialog('open');
					load_data();
					$('#form_action').attr('disabled', false);
				}
			});
		}
		
	});
	
	$('#action_alert').dialog({
		autoOpen:false
	});
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('id');
		var action = 'fetch_single';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data)
			{
				$('#first_name').val(data.first_name);
				$('#last_name').val(data.last_name);
				$('#rqmd1').val(data.rqmd1);
				$('#user_dialog').attr('title', 'Edit Data');
				$('#action').val('update');
				$('#hidden_id').val(id);
				$('#form_action').val('Update');
				$('#user_dialog').dialog('open');
			}
		});
	});
	
	$('#delete_confirmation').dialog({
		autoOpen:false,
		modal: true,
		buttons:{
			Ok : function(){
				var id = $(this).data('id');
				var action = 'delete';
				$.ajax({
					url:"action.php",
					method:"POST",
					data:{id:id, action:action},
					success:function(data)
					{
						$('#delete_confirmation').dialog('close');
						$('#action_alert').html(data);
						$('#action_alert').dialog('open');
						load_data();
					}
				});
			},
			Cancel : function(){
				$(this).dialog('close');
			}
		}	
	});
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr("id");
		$('#delete_confirmation').data('id', id).dialog('open');
	});
	
});  
</script>