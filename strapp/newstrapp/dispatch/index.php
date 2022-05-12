
<?php
session_start();
$user = $_SESSION['username1'];
$role = $_SESSION['role'];
if(($_SESSION['username'] != 'store') and ($_SESSION['username'] != 'hstore')) 
{
    header("Location: index.php");
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
          <h3><?php echo ucfirst($_SESSION['role']); ?></h3>
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
			
			<h2  style="color: green;" align="center">APPROVED AND RECOMMENDED REQUEST, <br>FOR DISPATCH.</h2><br />
			<br />
			<a  href="../mreport" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> VIEW ALL ITEMS WITH THEIR STOCK LEVEL</button> </a><BR>
			<a  href="../supply" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> ADD NEW SUPPLY</button> </a><BR>
		<a  href="../report" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> REPORTS</button> </a><BR>
		<a  href="../store" title="Click here" target = "new window">
		<img src="edit.png" width="20px" /></span> ADD NEW ITEM TO STORE</button> </a>
		
		
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
					<label>Collected By</label>
					<input type="text" name="cname" id="cname" class="form-control" />
					<span id="error_cname" class="text-danger"></span>
				</div>
				

				<div class="form-group">
					<label>File Number</label>
					<input type="text" name="cfile" id="cfile" class="form-control" />
					<span id="error_cfile" class="text-danger"></span>
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
		var error_cfile = '';
		var error_cname = '';
		
		if($('#cfile').val() == '')
		{
			error_cfile = 'Reciever File Number is required';
			$('#error_cfile').text(error_cfile);
			$('#cfile').css('border-color', '#cc0000');
		}
		else
		{
			error_cfile = '';
			$('#error_cfile').text(error_cfile);
			$('#cfile').css('border-color', '');
		}
		if($('#cname').val() == '')
		{
			error_cname = 'Collected by Name is required';
			$('#error_cname').text(error_cname);
			$('#cname').css('border-color', '#cc0000');
		}
		else
		{
			error_cname = '';
			$('#error_cname').text(error_cname);
			$('#cname').css('border-color', '');
		}
		
		if(error_cfile != '' || error_cname != '' )
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
				$('#cname').val(data.cname);
				$('#cfile').val(data.cfile);
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