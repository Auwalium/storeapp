
<?php
session_start();
$user = $_SESSION['username1'];
if(($_SESSION['username'] != 'store') and ($_SESSION['username'] != 'hstore')) 
{
    header("Location: index.php");
}
$currentTimeinSeconds = time();  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
?>


<html>  
    <head>  
        <title>SUB-STORE</title>  
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
			
			<h2 style="color: green;" align="center">WELCOME TO CENTRAL STORE</h2><br />
			<h3 align="center">ADD NEW ITEM TO STORE</h3><br />
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
					<label>Enter Brand Name</label>
					<input type="text" name="brand_name" id="brand_name" class="form-control" />
					<span id="error_brand_name" class="text-danger"></span>
				
				<div class="form-group">

				<?php
					include('dbconnect.php');       
            		echo "<label>SUb Store Name</label><br>"; 
					
$role = $_SESSION['role'];
include('dbconfig.php');
if(($role) == ('stationary') )
 {

$select = "SELECT * FROM category where category = 'Office Stationary' ";
  }

 elseif(($role) == ('officeequipment') )
   {

$select = "SELECT * FROM category  where category = 'Office Equipment' ";
   }

   elseif(($role) == ('maintenance') )
   {
$select = "SELECT * FROM category where category = 'Maintenance Items' ";
   }

   elseif(($role) == ('hospitalequipment') )
   {
$select = "SELECT * FROM category where category = 'Hospital Equipment' ";
   }
  
else
   {
  echo "no query";
   }
				

		    		$result1 = mysqli_query($mysqli, $select);
					echo "<select name='item_category' id='item_category' class='form-control'>";
	
					while($row = mysqli_fetch_assoc($result1)) 
					{
				    echo "<option value='" . $row["category"]." '>" .$row["category"]."</option>";				
				    }
					echo "</select>";	
				?> 	
				<span id="error_item_category" class="text-danger"></span>
				</div>

					<div class="form-group">
					<div class="form-group">
			<!--	 <label>Date Created</label> -->
					<input type="hidden" name="date_created" id="date_created" class="form-control" value = "<?php echo $currentDate; ?>/><?php echo $currentDate; ?>
					<span id="error_date_created" class="text-danger"></span>
					<div class="form-group">
					<div class="form-group">
					
					<input type="hidden" name="created_by" id="created_by" class="form-control" value="<?php echo($user) ?>" /> 
					<span id="error_created_by" class="text-danger"></span>
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
		var error_generic_name = '';
		var error_brand_name = '';
		var error_item_category = '';
		var error_date_created = '';
		var error_created_by = '';
		if($('#generic_name').val() == '')
		{
			error_generic_name = 'Generic Name is required';
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
			error_item_category = '';
			$('#error_item_category').text(error_item_category);
			$('#item_category').css('border-color', '');
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
		if($('#created_by').val() == '')
		{
			error_created_by= 'created_by is required';
			$('#error_created_by').text(error_created_by);
			$('#created_by').css('border-color', '#cc0000');
		}
		else
		{
			error_created_by = '';
			$('#error_created_by').text(error_created_by);
			$('#created_by').css('border-color', '');
		}
		if(error_created_by != '' || error_date_created != '' || error_item_category != '' ||error_generic_name != '' || error_brand_name != '')
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
				$('#generic_name').val(data.generic_name);
				$('#brand_name').val(data.brand_name);
				$('#item_category').val(data.item_category);
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