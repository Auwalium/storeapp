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
			
			<h3 align="center">PHP Ajax Crud using JQuery UI Dialog</a></h3><br />
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
					<label>Enter Generic Name</label>
					<input type="text" name="generic_name" id="generic_name" class="form-control" />
					<span id="error_generic_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Brand Last Name</label>
					<input type="text" name="brand_name" id="brand_name" class="form-control" />
					<span id="error_brand_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Gategory</label>
					<input type="text" name="item_category" id="item_category" class="form-control" />
					<span id="error_item_category" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Date Created</label>
					<input type="text" name="date_created" id="date_created" class="form-control" />
					<span id="error_date_created" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Created By</label>
					<input type="text" name="Created_by" id="Created_by" class="form-control" />
					<span id="error_created_by" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Stock Level</label>
					<input type="text" name="stock_level" id="stock_level" class="form-control" />
					<span id="error_stock_level" class="text-danger"></span>
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
		var error_generic_name = '';
		var error_brand_name = '';
		
		var error_date_created = '';
		var error_created_by = '';
		var error_stock_level = '';
		var error_item_category = '';
		

		if($('#generic_name').val() == '')
		{
			error_generic_name = 'First Generic is required';
			$('#error_generic_name').text(error_generic_name);
			$('#generic_name').css('border-color', '#cc0000');
		}
		else
		{
			error_generic_name = '';
			$('#error_generic_name').text(error_generic_name);
			$('#generic_name').css('border-color', '');
		}
		if($('#brand_name').val() == '')
		{
			error_brand_name = 'Brand Name is required';
			$('#error_brand_name').text(error_brand_name);
			$('#brand_name').css('border-color', '#cc0000');
		}
		else
		{
			error_brand_name = '';
			$('#error_brand_name').text(error_brand_name);
			$('#brand_name').css('border-color', '');
		}





		if($('#item_category').val() == '')
		{
			error_item_category = 'category is required';
			$('#error_item_category').text(error_item_category);
			$('#item_category').css('border-color', '#cc0000');
		}
		else
		{
			error_generic_name = '';
			$('#error_item_category').text(error_item_category);
			$('#item_category').css('border-color', '');
		}
		if($('#Created_by').val() == '')
		{
			error_created_by = 'Created_by is required';
			$('#error_created_by').text(error_created_by);
			$('#Created_by').css('border-color', '#cc0000');
		}
		else
		{
			error_created_by = '';
			$('#error_created_by').text(error_created_by);
			$('#Created_by').css('border-color', '');
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
		if($('#stock_level').val() == '')
		{
			error_stock_level = 'stock_level is required';
			$('#error_stock_level').text(error_stock_level);
			$('#stock_level').css('border-color', '#cc0000');
		}
		else
		{
			error_stock_level = '';
			$('#error_stock_level').text(error_stock_level);
			$('#stock_level').css('border-color', '');
		}








		
		if(error_generic_name != '' || error_brand_name != ''  error_stock_level != '' || error_created_by != ''error_date_created != '' || error_category != '')
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
				$('#generic_name').val(data.generic_name);
				$('#brand_name').val(data.brand_name);
				$('#item_category').val(data.item_category);
				$('#date_created').val(data.date_created);
				$('#Created_by').val(data.Created_by);
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

include("dbconfig.php");

$query = "SELECT * FROM item";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>Generic Name</th>
		<th>Brand Name</th>

		<th>Category</th>
		<th>Date Created</th>

		<th>Created By</th>
		<th>Stock Level</th>

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
			<td width="40%">'.$row["generic_name"].'</td>
			<td width="40%">'.$row["brand_name"].'</td>

			<td width="40%">'.$row["item_category"].'</td>
			<td width="40%">'.$row["date_created"].'</td>
			<td width="40%">'.$row["Created_by"].'</td>
			<td width="40%">'.$row["stock_level"].'</td>
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
		INSERT INTO item (generic_name, brand_name, item_category, date_created,Created_by,stock_level) 
		VALUES ('".$_POST["generic_name"]."', '".$_POST["brand_name"]."' ,'".$_POST["item_category"]."', '".$_POST["date_created"]."','".$_POST["Created_by"]."', '".$_POST["stock_level"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM item WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['generic_name'] = $row['generic_name'];
			$output['brand_name'] = $row['brand_name'];

			$output['item_category'] = $row['item_category'];
			$output['date_created'] = $row['date_created'];

			$output['Created_by'] = $row['Created_by'];
			$output['stock_level'] = $row['stock_level'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE item 
		SET 
		generic_name = '".$_POST["generic_name"]."', 
		brand_name = '".$_POST["brand_name"]."',

		item_category = '".$_POST["item_category"]."', 
		date_created = '".$_POST["date_created"]."' ,

		Created_by = '".$_POST["Created_by"]."', 
		stock_level = '".$_POST["stock_level"]."' 

		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM item WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>