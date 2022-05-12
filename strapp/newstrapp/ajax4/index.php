

<?php
//index.php
$currentTimeinSeconds = time();  
$currentTimeinHours = time(hours);  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 
$connect = mysqli_connect("sql213.byethost7.com", "b7_26627836", "1066emedear", "b7_26627836_nsuk");
$country = '';
//$query = "SELECT country FROM country_state_city GROUP BY country ORDER BY country ASC";
$query = "SELECT generic_name, stock_level FROM item GROUP BY generic_name ORDER BY generic_name ASC";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
 $country .= '<option value="'.$row["generic_name"].'">'.$row["generic_name"].'=======>"'.$row["stock_level"].'"</option>';
}
?>
<html>  
    <head>  
        <title>PHP - Sending multiple forms data through jQuery Ajax</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="bootstrap.min.css" />
  <title>Pharmacy dispensary Module</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="jquery.min.js"></script>  
  <script src="jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
   <br />
   
   <h3 align="center">DRUGS DISPENSING MODULE</a></h3><br />
   <br />
   <br />
   <div align="right" style="margin-bottom:5px;">
    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
   </div>
   <br />
   <form method="post" id="user_form">
    <div class="table-responsive">
     <table class="table table-striped table-bordered" id="user_data">
      <tr>
       <th>Patient PID</th>
       <th>Prescribe Quantity</th>
       <th>Drug Generic Name</th>
       <th>Drug Brand Name</th>
        <th>Drug Price</th>
       <th>Edit </th>
       <th>Remove</th>
      </tr>
     </table>
    </div>

   
    <div align="center">
     <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Save Invoice" />
     <a class='btn btn-primary' style='padding:4px;' href='fetch.php?id=$staff_id'>View Invoice </a>
    </div>
   </form>

   <br />
  </div>
  <div id="user_dialog" title="Add Data">
   <div class="form-group">
    <label>Enter Patient PID</label>
    <input type="text" name="first_name" id="first_name" class="form-control" />
    <span id="error_first_name" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>Enter Prescribe Quanty</label>
    <input type="text" name="last_name"   id="last_name"   class="form-control" />
    <span id="error_last_name" class="text-danger"></span>
   </div>
   <div>
     <select name="country" id="country" class="form-control action">
    <option value="">Select Drug Generic Name</option>
    <?php echo $country; ?>
    <span id="error_country" class="text-danger"></span>
   </select>
   <br />
   <select name="state" id="state" class="form-control action">
    <option value="">Item Id</option>
    <span id="error_state" class="text-danger"></span>
   </select>
   <br />
    <label>Drug Price</label>
   <select name="city" id="city" class="form-control">
    <option value="">Select Drug Price</option>
    <span id="error_city" class="text-danger"></span>
   </select>
 </div>
   <div class="form-group" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="button" name="save" id="save" class="btn btn-info">Save</button>
   </div>
  </div>
  <div id="action_alert" title="Action">

  </div>
    </body>  
</html> 

<script>  

  
$(document).ready(function(){ 
 
  




 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Add Data');
  $('#first_name').val('');
  $('#last_name').val('');
  $('#country').val('');
  $('#state').val('');
  $('#city').val('');

  $('#error_first_name').text('');
  $('#error_last_name').text('');
  $('#error_country').text('');
  $('#error_state').text('');
  $('#error_city').text('');


  $('#first_name').css('border-color', '');
  $('#last_name').css('border-color', '');
  $('#country').css('border-color', '');
  $('#state').css('border-color', '');
  $('#city').css('border-color', '');


  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_first_name = '';
  var error_last_name = '';
  var error_country = '';
  var error_state = '';
  var error_city = '';


  var first_name = '';
  var last_name = '';
  var country = '';
  var state = '';
  var city = '';

  if($('#first_name').val() == '')
  {
   error_first_name = 'PID is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').css('border-color', '#cc0000');
   first_name = '';
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').css('border-color', '');
   first_name = $('#first_name').val();
  }


  if($('#last_name').val() == '')
  {
   error_last_name = 'Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').css('border-color', '#cc0000');
   last_name = '';
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').css('border-color', '');
   last_name = $('#last_name').val();
  }

  if($('#country').val() == '')
  {
   error_country = 'Generic Name is required';
   $('#error_country').text(error_country);
   $('#country').css('border-color', '#cc0000');
   country = '';
  }
  else
  {
   error_country = '';
   $('#error_country').text(error_country);
   $('#country').css('border-color', '');
   country = $('#country').val();
  }

  if($('#state').val() == '')
  {
   error_state = 'Brand Name is required';
   $('#error_state').text(error_state);
   $('#state').css('border-color', '#cc0000');
   state = '';
  }
  else
  {
   error_state = '';
   $('#error_state').text(error_state);
   $('#state').css('border-color', '');
   state = $('#state').val();
  }

  if($('#city').val() == '')
  {
   error_city = 'city Price is required';
   $('#error_city').text(error_city);
   $('#city').css('border-color', '#cc0000');
   city = '';
  }
  else
  {
   error_city = '';
   $('#error_city').css('border-color', '');
   city = $('#city').val();
  }

  if(error_first_name != '' || error_state != '' || error_country != '' || error_city != '' || error_last_name != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+first_name+'" /></td>';
    output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+last_name+'" /></td>';
    output += '<td>'+country+' <input type="hidden" name="hidden_country[]" id="country'+count+'" value="'+country+'" /></td>';
    output += '<td>'+state+' <input type="hidden" name="hidden_state[]" id="state'+count+'" value="'+state+'" /></td>';
    output += '<td>'+city+' <input type="hidden" name="hidden_city[]" id="city'+count+'" value="'+city+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output = '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value="'+first_name+'" /></td>';
    output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+last_name+'" /></td>';
     output += '<td>'+country+' <input type="hidden" name="hidden_country[]" id="country'+row_id+'" value="'+country+'" /></td>';
    output += '<td>'+state+' <input type="hidden" name="hidden_state[]" id="state'+row_id+'" value="'+state+'" /></td>';
     output += '<td>'+city+' <input type="hidden" name="hidden_city[]" id="city'+row_id+'" value="'+city+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });

 $(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");
  var first_name = $('#first_name'+row_id+'').val();
  var last_name = $('#last_name'+row_id+'').val();
  var country = $('#country'+row_id+'').val();
  var state = $('#state'+row_id+'').val();
  var city = $('#city'+row_id+'').val();

  $('#first_name').val(first_name);
  $('#last_name').val(last_name);
  $('#country').val(country);
  $('#state').val(state);
  $('#city').val(city);
  $('#save').text('Edit');
  $('#hidden_row_id').val(row_id);
  $('#user_dialog').dialog('option', 'title', 'Edit Data');
  $('#user_dialog').dialog('open');
 });

 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.first_name').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#user_data').find("tr:gt(0)").remove();
     $('#action_alert').html('<p>Data Inserted Successfully</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Please Add atleast one data</p>');
   $('#action_alert').dialog('open');
  }
 });
 
});  
</script>


<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "country")
   {
    result = 'state';
   }
   else
   {
    result = 'city';
   }
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>