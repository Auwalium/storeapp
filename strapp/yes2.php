<!--
//index.php
!-->

<html>  
    <head>  
        <title>STRAPP</title>  
 
  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="boot4/bootstrap/css/bootstrap.min.css" />
 

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>
  <style>
	
	#top1{
  	text-align: center;
  	font-size: 50px;
  	font-weight: bolder;

  }
  #top2{
  	text-align: center;
  	font-size: 20px;
  	font-style: italic;
  }
  #top3{
  	text-align: center;
  	font-size: 20px;

  }
  .log{
  	line-height: 0px;
  }
  
  #rvoucher{
  	text-align: center;
  	text-decoration: underline;
    font-size: 25px;
  	font-weight: bold;
  }
  .vdate{
  	font-size: 20px;
    font-weight: bolder;
    
  }
  .log2{
  	line-height: 10px;
  }
 
	
  </style>
    </head>  
    <body>  
        <div class="container">
   <br />
   
    <div class="container ">
		<div class="row log">
			<div class="col-md-10"><h1 id="top1"><img src="photo/care_logo_mysql.gif"> &nbsp FEDERAL MEDICAL CENTRE.</h1> <br><p id="top2"> P.M.B. 1004 </p><br><h6 id="top3">KEFFI, NASARAWA STATE</h6></div>
		</div>
		<div class="row">
			<div class="col-md-12"><p id="rvoucher">GOODS RECEIVED VOUCHER</p></div>
		</div>
		<div class="row">
			<div class="col-md-6"><p class="vdate"><!--Date:<?php //date(); $date1= date("d/m/Y"); echo $date1;("Y/m/d"); ?> <script type="text/javascript">/*var today =new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
			var yyyy = today.getFullYear();
			

			today = dd + '/' + mm + '/' + yyyy;
			document.write(today);*/</script></p></div>
      <div class="col-md-6" style="text-align: right;"><!--<p class="vdate">Voucher Number: &nbsp <?php //echo mt_rand(); ?></p>--></div>
		</div>
   <br />
   <br />
       <hr style="height:1px;border:none;color:#333;background-color:#333;">
   
	 <form action="yes8.php" method="POST">
       <div class="form-row">
	   
			<div class="col-md-12">
			<input type="date" name="date1" class="vdate">
			
      <div class="col-md-6" style="text-align: right;"><!--<p class="vdate">Voucher Number: &nbsp <?php //echo mt_rand(); ?></p>--></div>
		</div>
         <div class="col-md-2"><p>
           <label>Received at:</label>
         </div>
         <div class="col-md-10">
           <input type="tex" name="vreceived" class="form-control" placeholder="Specify the store Receiving Goods" required>
         </div></p>
         <div class="col-md-2"><p>
           <label>from:</label>
         </div>
         <div class="col-md-9">
           <input type="tex" name="storename" class="form-control" placeholder="Specify the Suplier and His Address" required>
         </div>
         <div class="col-md-1">
           <label>Stores.</label>
         </div></p>
         <div class="col-md-5">
           <label>The Following goods order as per L.P.O. No.</label>
         </div>
         <div class="col-md-7">
           <input type="tex" name="lpono" class="form-control" placeholder="Enter the LPO number">
         </div>
              
                    <table>
                          <tr>
                            <td colspan="2"><label style="text-align: right;">RECEIVED BY</label></td>
                            <td colspan="2"><input type="text" name="received_of" class="form-control"></td>
                            <td colspan="3" style="text-align: right;"><label >ENTERED BIN CARD NO</label></td>
                            <td colspan="2"><input type="text" name="card_no" class="form-control"></td>

                          </tr>
                          <tr>
                            <td colspan="2" style="text-align: right;">checked and inspected by</td>
                            <td colspan="2"><input type="text" name="check_by" class="form-control"></td>
                            <td colspan="3" style="text-align: right;">Reference to invoice number and action taken</td>
                            <td colspan="2"><input type="text" name="store_of" class="form-control"></td>
                          </tr>
                          <tr>
                            
							<td colspan="5"></td>
							<td colspan="3"><p class="vdate" style="font-size: 16px;text-align: right;">Voucher Number</p> </td>
                            <td colspan="3" style="align-content: right;" ><input type="tex" name="vnumber1" class="form-control" style="border-color: green; background-color: #414040; color: white;" value= <?php echo mt_rand(); ?> readonly></td>
                            
							
                          </tr>
						  <tr>
							<td colspan="3"><button type="submit" name = "save"  class="btn btn-primary"> INSERT 2</button></td>
							<td colspan="6"></td>
							<td colspan="2"><button type="reset" class="btn btn-danger"> Clear</button></td>
						  </tr>
                        </tbody>
                      
                    </table>
                
        </div> 

       
    </form>
   
   
   <form method="post" id="user_form">
    <div class="table-responsive">
     <table class="table table-striped table-bordered" id="user_data">
      <tr>
		<th>Unit</th>
		 <th>Reference</th> 
		  <th>Description</th>
		  
		    <th>Unit Price</th>
			 <th>Qty Received</th>
			  <th>Amount</th>
       <th>Folio</th>
	    <th>Remarks</th>
		 <th>VOUCHER Number</th>
       <th>Details</th>
       <th>Remove</th>
      </tr>
     </table>
    </div>
	<div class="row">
	<div class="col-md-4" style="align-content="left" >
    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
   </div>
    <div class="col-md-4" style="align-content:right;">
     <input type="submit" name="insert" id="insert" class="btn btn-primary" value="INSERT 1" />
    </div>
	</div>
   </form>

   <br />
  </div>
  <div id="user_dialog" title="Add Data" style="color:blue;margin-left:30px; width: 100px;" >
  
    
    <div class="form-group">
    <label>Enter Reference</label>
    <input type="text" name="way_bill" id="way_bill" class="form-control" />
    <span id="error_way_bill" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>Enter Description</label>
    <input type="text" name="item_description" id="item_description" class="form-control" />
    <span id="error_item_description" class="text-danger"></span>
   </div>
   <div class="row">
    <div class="form-group col-md-6">
    <label>Enter Unit</label>
    <input type="text" name="unit" id="unit" class="form-control" />
    <span id="error_unit" class="text-danger"></span>
   
   </div>
   <div class="form-group col-md-6">
    <label>Enter Unit Price</label>
    <input type="text" name="unit_price" id="unit_price" class="form-control" />
    <span id="error_unit_price" class="text-danger"></span>
   </div>
    <div class="form-group col-md-6">
    <label>Enter Qty Received</label>
    <input type="text" name="qty_received" id="qty_received" class="form-control" />
    <span id="error_qty_received" class="text-danger"></span>
   </div>
   <div class="form-group col-md-6">
   <label>Enter Amount</label>
    <input type="text" name="amount" id="amount" class="form-control" />
    <span id="error_amount" class="text-danger"></span>
  </div>
  </div>
   <div class="form-group">
    <label>Enter Folio</label>
    <input type="text" name="folio" id="folio" class="form-control" />
    <span id="error_folio" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>Enter Remarks</label>
    <input type="text" name="remarks" id="remarks" class="form-control" />
    <span id="error_remarks" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>Enter VOUCHER Number</label>
    <input type="text" name="vnumber" id="vnumber" class="form-control" required>
    <span id="error_vnumber" class="text-danger"></span>
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
  $('#amount').val('');
   $('#way_bill').val('');
   $('#item_description').val('');
   $('#unit').val('');
  $('#unit_price').val('');
  $('#qty_received').val('');
  $('#folio').val('');
  $('#remarks').val('');
  $('#vnumber').val('');
  
  $('#error_amount').text('');
   $('#error_way_bill').text('');
   $('#error_item_description').text('');
   $('#error_unit').text('');
   $('#error_unit_price').text('');
    $('#error_qty_received').text('');
	$('#error_folio').text('');
   $('#error_remarks').text('');
	$('#error_vnumber').text('');
   
  $('#amount').css('border-color', '');
   $('#way_bill').css('border-color', '');
   $('#item_description').css('border-color', '');
    $('#unit').css('border-color', '');
   $('#unit_price').css('border-color', '');
    $('#qty_received').css('border-color', '');
	$('#vnumber').css('border-color', '');
	$('#folio').css('border-color', '');
   $('#remarks').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_amount = '';
  var error_way_bill = '';
  var error_item_description = '';
  var error_unit = '';
  var error_unit_price = '';
  var error_qty_received = '';
   var error_folio = '';
  var error_remarks = '';
  var error_vnumber = '';
  
  var amount = '';
   var way_bill = '';
   var item_description = '';
    var unit = '';
   var unit_price = '';
    var qty_received = '';
	var folio = '';
   var remarks = '';
	var vnumber = '';
  if($('#amount').val() == '')
  {
   error_amount = 'amount is required';
   $('#error_amount').text(error_amount);
   $('#amount').css('border-color', '#cc0000');
   amount = '';
  }
  else
  {
   error_amount = '';
   $('#error_amount').text(error_amount);
   $('#amount').css('border-color', '');
   amount = $('#amount').val();
  } 
  
  if($('#vnumber').val() == '')
  {
   error_vnumber = 'vnumber is required';
   $('#error_vnumber').text(error_vnumber);
   $('#vnumber').css('border-color', '#cc0000');
   vnumber = '';
  }
  else
  {
   error_vnumber = '';
   $('#error_vnumber').text(error_vnumber);
   $('#vnumber').css('border-color', '');
   vnumber = $('#vnumber').val();
  } 
  if($('#unit').val() == '')
  {
   error_unit = 'unit is required';
   $('#error_unit').text(error_unit);
   $('#unit').css('border-color', '#cc0000');
   unit = '';
  }
  else
  {
   error_unit = '';
   $('#error_unit').text(error_unit);
   $('#unit').css('border-color', '');
   unit = $('#unit').val();
  } 
  
  if($('#folio').val() == '')
  {
   error_folio = 'folio is required';
   $('#error_folio').text(error_folio);
   $('#folio').css('border-color', '#cc0000');
   folio = '';
  }
  else
  {
   error_folio = '';
   $('#error_folio').text(error_folio);
   $('#folio').css('border-color', '');
   folio = $('#folio').val();
  } 
  
  if($('#unit_price').val() == '')
  {
   error_unit_price = 'unit_price is required';
   $('#error_unit_price').text(error_unit_price);
   $('#unit_price').css('border-color', '#cc0000');
   unit_price = '';
  }
  else
  {
   error_unit_price = '';
   $('#error_unit_price').text(error_unit_price);
   $('#unit_price').css('border-color', '');
   unit_price = $('#unit_price').val();
  } 
  
  
  if($('#remarks').val() == '')
  {
   error_remarks = 'remarks is required';
   $('#error_remarks').text(error_remarks);
   $('#remarks').css('border-color', '#cc0000');
   remarks = '';
  }
  else
  {
   error_remarks = '';
   $('#error_remarks').text(error_remarks);
   $('#remarks').css('border-color', '');
   remarks = $('#remarks').val();
  }
  
  
  if($('#way_bill').val() == '')
  {
   error_way_bill = 'way_bill is required';
   $('#error_way_bill').text(error_way_bill);
   $('#way_bill').css('border-color', '#cc0000');
   way_bill = '';
  }
  else
  {
   error_way_bill = '';
   $('#error_way_bill').text(error_way_bill);
   $('#way_bill').css('border-color', '');
   way_bill = $('#way_bill').val();
  }
  if($('#item_description').val() == '')
  {
   error_item_description = 'item_description is required';
   $('#error_item_description').text(error_last_name);
   $('#item_description').css('border-color', '#cc0000');
   item_description = '';
  }
  else
  {
   error_item_description = '';
   $('#error_item_description').text(error_item_description);
   $('#item_description').css('border-color', '');
   item_description = $('#item_description').val();
  }
	if($('#qty_received').val() == '')
  {
   error_qty_received = 'qty_received is required';
   $('#error_qty_received').text(error_qty_received);
   $('#qty_received').css('border-color', '#cc0000');
   qty_received = '';
  }
  else
  {
   error_qty_received = '';
   $('#error_qty_received').text(error_qty_received);
   $('#qty_received').css('border-color', '');
   qty_received = $('#qty_received').val();
  } 
  if(error_amount != '' || error_folio != '' || error_vnumber != '' || error_qty_received != '' ||error_remarks != ''|| error_item_description != ''|| error_way_bill != ''|| error_unit != '' ||error_unit_price != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+amount+' <input type="hidden" name="hidden_amount[]" id="amount'+count+'" class="amount" value="'+amount+'" /></td>';
    output += '<td>'+way_bill+' <input type="hidden" name="hidden_way_bill[]" id="way_bill'+count+'" value="'+way_bill+'" /></td>';
    output += '<td>'+item_description+' <input type="hidden" name="hidden_item_description[]" id="item_description'+count+'" value="'+item_description+'" /></td>';
	output += '<td>'+unit+' <input type="hidden" name="hidden_unit[]" id="unit'+count+'" value="'+unit+'" /></td>';
    output += '<td>'+unit_price+' <input type="hidden" name="hidden_unit_price[]" id="unit_price'+count+'" value="'+unit_price+'" /></td>';
	output += '<td>'+qty_received+' <input type="hidden" name="hidden_qty_received[]" id="qty_received'+count+'" value="'+qty_received+'" /></td>';
	output += '<td>'+folio+' <input type="hidden" name="hidden_folio[]" id="folio'+count+'" value="'+folio+'" /></td>';
	output += '<td>'+remarks+' <input type="hidden" name="hidden_remarks[]" id="remarks'+count+'" value="'+remarks+'" /></td>';
	output += '<td>'+vnumber+' <input type="hidden" name="hidden_vnumber[]" id="vnumber'+count+'" value="'+vnumber+'" /></td>';

	output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output += '<td>'+amount+' <input type="hidden" name="hidden_amount[]" id="amount'+count+'" class="amount" value="'+amount+'" /></td>';
     output += '<td>'+way_bill+' <input type="hidden" name="hidden_way_bill[]" id="way_bill'+count+'" value="'+way_bill+'" /></td>';
     output += '<td>'+item_description+' <input type="hidden" name="hidden_item_description[]" id="item_description'+count+'" value="'+item_description+'" /></td>';
	output += '<td>'+unit+' <input type="hidden" name="hidden_unit[]" id="unit'+count+'" value="'+unit+'" /></td>';
    output += '<td>'+unit_price+' <input type="hidden" name="hidden_unit_price[]" id="unit_price'+count+'" value="'+unit_price+'" /></td>';
	output += '<td>'+qty_received+' <input type="hidden" name="hidden_qty_received[]" id="qty_received'+count+'" value="'+qty_received+'" /></td>';
	output += '<td>'+folio+' <input type="hidden" name="hidden_folio[]" id="folio'+count+'" value="'+folio+'" /></td>';
	output += '<td>'+remarks+' <input type="hidden" name="hidden_remarks[]" id="remarks'+count+'" value="'+remarks+'" /></td>';
	output += '<td>'+vnumber+' <input type="hidden" name="hidden_vnumber[]" id="vnumber'+count+'" value="'+vnumber+'" /></td>';

	output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });

 $(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");
   var remarks = $('#remarks'+row_id+'').val();
    var way_bill = $('#way_bill'+row_id+'').val();
	 var item_description = $('#item_description'+row_id+'').val();
	 var unit = $('#unit'+row_id+'').val();
	 var unit_price = $('#unit_price'+row_id+'').val();
	  var qty_received = $('#qty_received'+row_id+'').val();
	  var amount = $('#amount'+row_id+'').val();
		var folio = $('#folio'+row_id+'').val();
	  var vnumber = $('#vnumber'+row_id+'').val();
  $('#amount').val(amount);
  
   $('#way_bill').val(way_bill);
   $('#item_description').val(item_description);
   $('#unit').val(unit);
   $('#unit_price').val(unit_price);
    $('#qty_received').val(qty_received);
	$('#folio').val(folio);
   $('#remarks').val(remarks);
	$('#vnumber').val(vnumber);
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
  $('.amount').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"yes2.php",
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
<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=inventory", "emedion", "Password");
//require_once 'dbconfig.php';
		
$query = "DELETE FROM 'voucher' WHERE 'vnumber1' = '' or 'vnumber' = ''";	
		$statement = $connect->prepare($query);
		
$query = "
INSERT INTO voucher 
(amount, folio, remarks, way_bill, item_description, unit, unit_price,qty_received,vnumber) 
VALUES (:amount, :folio,:remarks,:way_bill,:item_description,:unit,:unit_price ,:qty_received,:vnumber)
";

for($count = 0; $count<count($_POST['hidden_amount']); $count++)
{
 $data = array(
  ':amount' => $_POST['hidden_amount'][$count],
  ':folio' => $_POST['hidden_folio'][$count],
  ':remarks' => $_POST['hidden_remarks'][$count],
  ':way_bill' => $_POST['hidden_way_bill'][$count],
  ':item_description' => $_POST['hidden_item_description'][$count],
  ':unit' => $_POST['hidden_unit'][$count],
  ':unit_price' => $_POST['hidden_unit_price'][$count],
   ':qty_received' => $_POST['hidden_qty_received'][$count],
   ':vnumber' => $_POST['hidden_vnumber'][$count]
 );
 $statement = $connect->prepare($query);
 $statement->execute($data);
}
?>
