<?php
session_start();
$user = $_SESSION['username1'];
if(($_SESSION['username'] != 'store') ) 
{
    header("Location: index.php");
}
$currentTimeinSeconds = time();  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
$role = $_SESSION['role'];
include('dbconfig.php');
if(($role) == ('stationary') )
 {
 $select = "SELECT * FROM item where  item.item_category = 'Office Stationary' ";

  }

 elseif(($role) == ('officeequipment') )
	 {
$select = "SELECT * FROM item where  item.item_category = 'office equipment' ";

	 }

	 elseif(($role) == ('maintenance') )
	 {
$select = "SELECT * FROM item where  item.item_category = 'Maintenance Items' ";

	 }

	 elseif(($role) == ('hospitalequipment') )
	 {
$select = "SELECT * FROM item where  item.item_category = 'Hospital Equipment' ";

	 }
else
   {
	echo "no query";
	 }


?>



<html>  
    <head>  
        <title>Register New Supply</title>  
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
    </head>  
    <body> 

   
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
			
			<h2 style="color: green;" align="center" align="center">Stock Supply Table</h2><br />
			<br />
			<div align="right" style="margin-bottom:5px;">
			<button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
			</div>
			<div class="table-responsive" id="user_data">
				
			</div>
			<br />
		</div>
		
		<div id="user_dialog" title="Add Data">
			<form method="post" id="user_form">
				<div class="form-group">
					
					<?php

			include('dbconnect.php');       
			//echo "<br>";
            echo "<label>Select Item Name</label><br>"; 
			
		    $result1 = mysqli_query($con, $select);
			echo "<select name='item_id' id='item_id' class='form-control'>";
	
			while($row = mysqli_fetch_assoc($result1)) {
				    
			echo "<option value='" . $row["id"]." '>" .$row["generic_name"]. "=======>".$row["brand_name"]."</option>";	
						
				}
			echo "</select>";	
	
				?> 
					
					<span id="error_item_id" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter LPO</label>
					<input type="text" name="lpo" id="lpo" class="form-control" />
					<span id="error_lpo" class="text-danger"></span>
				</div>
				<div class="form-group">
			
					<?php

			include('dbconnect.php');       
			//echo "<br>";
            echo "<label>Select Supplier Name</label><br>"; 
			$select = "SELECT * FROM supplier ";
		    $result1 = mysqli_query($con, $select);
			echo "<select name='supply_id' id='supply_id' class='form-control'>";
	
			while($row = mysqli_fetch_assoc($result1)) {
				    
			echo "<option value='" . $row["id"]." '>" .$row["name"]. "</option>";	
						
				}
			echo "</select>";	
	
				?> 
					<span id="error_supply_id" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Supply Price</label>
					<input type="text" name="supply_price" id="supply_price" class="form-control" />
					<span id="error_supply_price" class="text-danger"></span>
				</div>


				<div class="form-group">
					<label>Enter Model No</label>
					<input type="text" name="model_no" id="model_no" class="form-control" />
					<span id="error_model_no" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter quantity Suppy</label>
					<input type="text" name="quantity_supply" id="quantity_supply" class="form-control" />
					<span id="error_quantity_supply" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter manufacture Date</label>
					<input type="date" name="manufacture_date" id="manufacture_date" class="form-control" />
					<span id="error_manufacture_date" class="text-danger"></span>
				</div>


				<div class="form-group">
					<label>Enter Expire Date</label>
					<input type="date" name="expire_date" id="expire_date" class="form-control" />
					<span id="error_expire_date" class="text-danger"></span>
				</div>
				<div class="form-group">
					
					<input type="hidden" name="created_by" id="created_by" value = "<?php echo $_SESSION['username1']; ?>" class="form-control" />
					<span id="error_created_by" class="text-danger"></span>
				</div>
				<div class="form-group">
					
					<input type="hidden" name="date_created" id="date_created" class="form-control" value = "<?php echo $currentDate; ?>" />
					<span id="error_date_created" class="text-danger"></span>
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
		var error_item_id = '';
		var error_lpo = '';
		var error_supply_id = '';
		var error_supply_price = '';

		var error_model_no = '';
		var error_quantity_supply = '';
		var error_manufacture_date = '';
		var error_expire_date= '';
		var error_created_by = '';
		var error_date_created = '';
		if($('#item_id').val() == '')
		{
			error_item_id = 'Item Id is required';
			$('#error_item_id').text(error_item_id);
			$('#item_id').css('border-color', '#cc0000');
		}
		else
		{
			error_item_id = '';
			$('#error_item_id').text(error_item_id);
			$('#item_id').css('border-color', '');
		}
		if($('#lpo').val() == '')
		{
			error_lpo = 'LPO is required';
			$('#error_lpo').text(error_lpo);
			$('#lpo').css('border-color', '#cc0000');
		}
		else
		{
			error_lpo = '';
			$('#error_lpo').text(error_lpo);
			$('#lpo').css('border-color', '');
		}
		
		if($('#supply_id').val() == '')
		{
			error_supply_id = 'Supply Id is required';
			$('#error_supply_id').text(error_supply_id);
			$('#supply_id').css('border-color', '#cc0000');
		}
		else
		{
			error_lpo = '';
			$('#error_supply_id').text(error_supply_id);
			$('#supply_id').css('border-color', '');
		}
		if($('#supply_price').val() == '')
		{
			error_supply_price = 'supply_price is required';
			$('#error_supply_price').text(error_supply_price);
			$('#supply_price').css('border-color', '#cc0000');
		}
		else
		{
			error_supply_price = '';
			$('#error_supply_price').text(error_supply_price);
			$('#supply_price').css('border-color', '');
		}



		if($('#model_no').val() == '')
		{
			error_model_no = 'Model No is required';
			$('#error_model_no').text(error_model_no);
			$('#model_no').css('border-color', '#cc0000');
		}
		else
		{
			error_model_no = '';
			$('#error_model_no').text(error_model_no);
			$('#model_no').css('border-color', '');
		}
		if($('#quantity_supply').val() == '')
		{
			error_quantity_supply = 'quantity supply is required';
			$('#error_quantity_supply').text(error_quantity_supply);
			$('#quantity_supply').css('border-color', '#cc0000');
		}
		else
		{
			error_quantity_supply = '';
			$('#error_quantity_supply').text(error_quantity_supply);
			$('#quantity_supply').css('border-color', '');
		}
		if($('#manufacture_date').val() == '')
		{
			error_manufacture_date = 'manufacture_date is required';
			$('#error_manufacture_date').text(error_manufacture_date);
			$('#manufacture_date').css('border-color', '#cc0000');
		}
		else
		{
			error_manufacture_date = '';
			$('#error_manufacture_date').text(error_manufacture_date);
			$('#manufacture_date').css('border-color', '');
		}

		if($('#expire_date').val() == '')
		{
			error_expire_date = 'expire_date is required';
			$('#error_expire_date').text(error_expire_date);
			$('#expire_date').css('border-color', '#cc0000');
		}
		else
		{
			error_expire_date = '';
			$('#error_expire_date').text(error_expire_date);
			$('#expire_date').css('border-color', '');
		}

		if($('#created_by').val() == '')
		{
			error_created_by = 'created_by is required';
			$('#error_created_by').text(error_created_by);
			$('#created_by').css('border-color', '#cc0000');
		}
		else
		{
			error_created_by = '';
			$('#error_created_by').text(error_created_by);
			$('#created_by').css('border-color', '');
		}

		if($('#date_created').val() == '')
		{
			error_date_created = 'date_created is required';
			$('#error_date_created').text(error_date_created);
			$('#date_created').css('border-color', '#cc0000');
		}
		else
		{
			error_date_created = '';
			$('#error_date_created').text(error_date_created);
			$('#date_created').css('border-color', '');
		}

		if(error_date_created != '' || error_created_by != '' || error_expire_date != '' || error_model_no != '' || error_quantity_supply != '' || error_manufacture_date != '' || error_supply_price != '' || error_supply_id != '' || error_lpo != '' || error_item_id!= '')
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
				$('#item_id').val(data.item_id);
				$('#lpo').val(data.lpo);
				$('#supply_id').val(data.supply_id);
				$('#supply_price').val(data.supply_price);

				$('#model_no').val(data.model_no);
				$('#quantity_supply').val(data.quantity_supply);
				$('#manufacture_date').val(data.manufacture_date);
				$('#expire_date').val(data.expire_date);
				$('#created_by').val(data.created_by);
				$('#date_created').val(data.date_created);

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