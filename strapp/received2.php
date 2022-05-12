 <?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $vnumber=$_POST['vnumber'];
 

//$query="select voucher.way_bill, voucher.item_description, voucher.unit, voucher.unit_price, voucher.qty_received, voucher.amount, voucher.folio, voucher.remarks, voucher1.vreceived, voucher1.storename, voucher1.lpono, voucher1.received_of, voucher1.check_by, voucher1.card_no, voucher1.store_of from voucher join voucher1 where voucher.vnumber=voucher1.vnumber ";
$query="select * from voucher where vnumber1 = '$vnumber'";

 $result=mysqli_query($mysqli,$query);

  while($row=mysqli_fetch_array($result)){

 
    
		$vreceived=$row['vreceived'];
		$storename=$row['storename'];
		$lpono=$row['lpono'];
    	$recieved_of=$row['recieved_of'];
		$check_by=$row['check_by'];
		$store_of=$row['store_of'];
		$vnumber=$row['vnumber'];
		$vnumber1=$row['vnumber1'];
	
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Good recieved voucher</title>
	<link rel="stylesheet" type="text/css" href="boot4/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="boot4/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="boot4/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="boot4/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="cug.css">
  <!--<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->


</head>
<body>
	<div class="container dynamic-rows">
		<div class="row log">
			<div class="col-md-1"><img src="photo/care_logo_mysql.gif"></div>
			<div class="col-md-10"><h1 id="top1">FEDERAL MEDICAL CENTRE.</h1> <br><p id="top2"> P.M.B. 1004 </p><br><h6 id="top3">KEFFI, NASARAWA STATE</h6></div>
		</div>
		<div class="row">
			<div class="col-md-12"><p id="rvoucher">GOODS RECEIVED VOUCHER</p></div>
		</div>
		<div class="row">
			<div class="col-md-6"><p class="vdate">Date:<script type="text/javascript">var today =new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
			var yyyy = today.getFullYear();
			

			today = dd + '/' + mm + '/' + yyyy;
			document.write(today);</script></p></div>
      <div class="col-md-6" style="text-align: right;"><!--<p class="vdate">Voucher Number: &nbsp <?php //echo mt_rand(); ?></p>--></div>
		</div>
    <hr style="height:1px;border:none;color:#333;background-color:#333;">
   
	 <form action="received.php" method="POST">
       <div class="form-row">
         <div class="col-md-2"><p>
           <label>Received at:</label>
         </div>
         <div class="col-md-10">
           <input type="tex" name="vreceived" value='<?php echo $vreceived; ?>'class="form-control" >
         </div></p>
         <div class="col-md-2"><p>
           <label>From(Supplier Name/Store):</label>
         </div>
         <div class="col-md-10">
           <input type="tex" name="storename" value='<?php echo $storename; ?>'class="form-control" >
         </div>
         
         <div class="col-md-2">
          <td colspan="10">The Following Goods Order With L.P.O. No.</td>
         </div>
         <div class="col-md-10">
           <input type="tex" name="lpono" value='<?php echo $lpono; ?>'class="form-control" >
         </div>
              
                    <?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
 $vnumber=$_POST['vnumber'];  
 

//$query="select voucher.way_bill, voucher.item_description, voucher.unit, voucher.unit_price, voucher.qty_received, voucher.amount, voucher.folio, voucher.remarks, voucher1.vreceived, voucher1.storename, voucher1.lpono, voucher1.received_of, voucher1.check_by, voucher1.card_no, voucher1.store_of from voucher join voucher1 where voucher.vnumber=voucher1.vnumber ";
$query="select * from voucher where (vnumber = '$vnumber') or (vnumber1 = '$vnumber');";

 $result=mysqli_query($mysqli,$query);

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:100px;">
  <div class="container" style="text-align:left;">
 
  <center><table class="table table-hover">
   <thead>  <tr>
			<th> Reference</th>
			<th> Description</th>
			<th>Unit</th>
			<th>Unit Price</th>
			<th>Qty Received</th>
			<th>Amount</th>
			<th>Folio</th>
			<th>Remarks</th>
			</tr></thead>
		<tbody>,</center> ';

  while($row=mysqli_fetch_array($result)){

 
		$way_bill=$row['way_bill'];
		$item_description=$row['item_description'];
    	$unit=$row['unit'];
		$unit_price=$row['unit_price'];
		$qty_received=$row['qty_received'];
		$amount=$row['amount'];
		$folio=$row['folio'];
		$remarks=$row['remarks'];
		
		$card_no=$row['card_no'];
		$store_of=$row['store_of'];
		$received_of=$row['received_of'];
		$date1=$row['date1'];
	
	
    echo '<center><tr>
		<td>'.$way_bill.'</td>
		<td>'.$item_description.'</td>
     	 <td>'.$unit.'</td>
      	 <td>'.$unit_price.'</td>
		<td>'.$qty_received.'</td>
     	 <td>'.$amount.'</td>
     	 <td>'.$folio.'</td>
		<td>'.$remarks.'</td>
		

    	 </tr><br>';
  

  }
 echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
   
</html>';

}

?>
                          <tr>
                            
                            <td colspan="2"><input type="text" name="recieved_of" value='<?php echo $received_of; ?>'class="form-control"></td>
                            <td colspan="2"><label>RECEIVED BY</label></td>
							<td colspan="2"><input type="text" class="form-control"></td>
                             <td colspan="2">sign</td>
							
                           
							<td colspan="2"><input type="text" name="card_no" value='<?php echo $card_no; ?>' class="form-control"></td>
							  <td colspan="2"><label>BIN CARD NO</label></td>
                          </tr>
                          <tr>
                           
                            <td colspan="2"><input type="text" name="checked_by" value='<?php echo $check_by; ?>' class="form-control"></td>
                             <td colspan="2">Checked And Inspected By</td>
							 <td colspan="2"><input type="text" class="form-control"></td>
                             <td colspan="2">sign</td>
							
                            <td colspan="2"><input type="text" name="store_of" value='<?php echo $store_of; ?>'class="form-control"></td>
							<td colspan="3">Reference to Invoice Number And Action Taken By</td>
						 </tr>
                          <tr>
                              <td colspan="2"><input type="text" class="form-control"></td>
                             <td colspan="2">sign</td>
							  
							  <td colspan="2"><input type="text" class="form-control" value='<?php echo $date1; ?>'></td>
                             <td colspan="2">Date Recieved</td>
							
                          </tr>
                        </tbody>
                      
                    </table>
                
        </div> 

       
    </form>
		


</body>

</html>
<form class="form-inline my-2 my-lg-0" method="post" action= "received2.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter Voucher Number" aria-label="Search" name="vnumber">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
    </form>


