<?php
session_start();
$user = $_SESSION['username1'];
if(($_SESSION['username'] != store) ) 
{
    header("Location: index.php");
}

?>

<html>  
    <head>  
        <title>PHP Ajax Crud using JQuery UI Dialog Box</title>  
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Add Supply</a></h3><br />
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
					<label>Enter item id</label>
					<input type="text" name="item_id" id="item_id" class="form-control" />
					<span id="error_item_id" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter LPO</label>
					<input type="text" name="lpo" id="lpo" class="form-control" />
					<span id="error_lpo" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter supply Id</label>
					<input type="text" name="supply_id" id="supply_id" class="form-control" />
					<span id="error_supply_id" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter supply price</label>
					<input type="text" name="supply_price" id="supply_price" class="form-control" />
					<span id="error_supply_price" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label>Model No</label>
					<input type="text" name="model_no" id="model_no" class="form-control" />
					<span id="error_model_no" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Quantity Supply</label>
					<input type="text" name="quantity_supply" id="quantity_supply" class="form-control" />
					<span id="error_quantity_supply" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Manufacture Date</label>
					<input type="text" name="manufacture_date" id="manufacture_date" class="form-control" />
					<span id="error_manufacture_date" class="text-danger"></span>
				</div>






				<div class="form-group">
					<label>Enter expire date</label>
					<input type="text" name="expire_date" id="expire_date" class="form-control" />
					<span id="error_expire_date" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter created by</label>
					<input type="text" name="created_by" id="created_by" value = "<?php echo '$user'; ?>" class="form-control" />
					<span id="error_created_by" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter date created</label>
					<input type="text" name="date_created" id="date_created" class="form-control" />
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
			url:"ajax.php",
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

		var error_expire_date = '';
		var error_date_created = '';
		var error_created_by = '';
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
				url:"ajax.php",
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
			url:"ajax.php",
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data)
			{
				$('#item_id').val(data.item_id);
				$('#lpo').val(data.lpo);
				$('#supply_id').val(data.supply_id);
				$('#supply_price').val(data.supply_price);
				$('#manufacture_date').val(data.manufacture_date);
				$('#quantity_supply').val(data.quantity_supply);
				$('#model_no').val(data.model_no);

				$('#expire_date').val(data.expire_date);
				$('#date_created').val(data.date_created);
				$('#created_by').val(data.created_by);

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
					url:"ajax.php",
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
<?php

//fetch.php

include('dbconfig.php');

$query = "SELECT * FROM supply";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>Item Id</th>
		<th>LPO</th>
		<th>supply Id</th>
		<th>supply price</th>
		<th>model no</th>
		<th>quantity supply Id</th>
		<th>manufacture date price</th>

		<th>Expire Date</th>
		<th>Created By </th>
		<th>date created</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="40%">'.$row["item_id"].'</td>
			<td width="40%">'.$row["lpo"].'</td>
			<td width="40%">'.$row["supply_id"].'</td>
			<td width="40%">'.$row["supply_price"].'</td>

			<td width="40%">'.$row["model_no"].'</td>
			<td width="40%">'.$row["quantity_supply"].'</td>
			<td width="40%">'.$row["manufacture_date"].'</td>

			<td width="40%">'.$row["expire_date"].'</td>
			<td width="40%">'.$row["created_by"].'</td>
			<td width="40%">'.$row["date_created"].'</td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Edit</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>


<?php

//action.php

include('dbconfig.php');
if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO supply (item_id, lpo, supply_id,supply_price,model_no,quantity_supply,manufacture_date,expire_date,created_by,date_created) VALUES ('".$_POST["item_id"]."', '".$_POST["lpo"]."', '".$_POST["supply_id"]."', '".$_POST["supply_price"]."', '".$_POST["model_no"]."', '".$_POST["quantity_supply"]."', '".$_POST["manufacture_date"]."', '".$_POST["expire_date"]."', '".$_POST["created_by"]."', '".$_POST["date_created"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM supply WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['item_id'] = $row['item_id'];
			$output['lpo'] = $row['lpo'];
			$output['supply_id'] = $row['supply_id'];
			$output['supply_price'] = $row['supply_price'];

			$output['model_no'] = $row['model_no'];
			$output['quantity_supply'] = $row['quantity_supply'];
			$output['manufacture_date'] = $row['manufacture_date'];

			$output['expire_date'] = $row['expire_date'];
			$output['created_by'] = $row['created_by'];
			$output['date_created'] = $row['date_created'];
			

		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE supply 
		SET item_id = '".$_POST["item_id"]."', 
		lpo = '".$_POST["lpo"]."' ,
		supply_id = '".$_POST["supply_id"]."',
		supply_price = '".$_POST["supply_price"]."',
		model_no = '".$_POST["model_no"]."',
		quantity_supply = '".$_POST["quantity_supply"]."',
		manufacture_date = '".$_POST["manufacture_date"]."',
		expire_date = '".$_POST["expire_date"]."',
		created_by = '".$_POST["created_by"]."',
		date_created = '".$_POST["date_created"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM supply WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>