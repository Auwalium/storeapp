
<?php include('functions1.php') ?><!DOCTYPE html>
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
    <form method="GET" action="#">
       <div class="form-row">
         <div class="col-md-2"><p>
           <label>Received at:</label>
         </div>
         <div class="col-md-10">
           <input type="tex" name="vreceived" class="form-control" placeholder="Specify the store Receiving Goods">
         </div></p>
         <div class="col-md-2"><p>
           <label>from:</label>
         </div>
         <div class="col-md-9">
           <input type="tex" name="storename" class="form-control" placeholder="Specify the Suplier and His Address">
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
              
                    <table class="table stripe table-sm table-responsive">
                      
                        <thead class="thead-light">
                          <tr>
                          <th style="width: 8%;">Item No.</th>
                          <th style="width: 15%;">Way Bill or other Reference</th>
                          <th style="width: 25%;">Description of Goods</th>
                          <th style="width: 7%;">Unit</th>
                          <th style="width: 10%;">Unit Price</th>
                          <th style="width: 5%;">QTY Received</th>
                          <th style="width: 10%;">Amount</th>
                          <th style="width: 10%;">Folio No of Store Ledger</th>
                          <th style="width: 10%;">Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" name="Item_no" class="form-control" value="1" readonly></td>
                            <td><input type="text" name="way_bill" class="form-control"></td>
                            <td><input type="text" name="Item_description" class="form-control"></td>
                            <td><input type="text" name="Unit" class="form-control"></td>
                            <td><input type="text" name="Unit_price" class="form-control"></td>
                            <td><input type="text" name="qty_received" class="form-control"></td>
                            <td><input type="text" name="Amount" class="form-control"></td>
                            <td><input type="text" name="Folio" class="form-control"></td>
                            <td><input type="text" name="Remarks" class="form-control"></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="Item_no" class="form-control" value="2" readonly></td>
                            <td><input type="text" name="way_bill" class="form-control"></td>
                            <td><input type="text" name="Item_description" class="form-control"></td>
                            <td><input type="text" name="Unit" class="form-control"></td>
                            <td><input type="text" name="Unit_price" class="form-control"></td>
                            <td><input type="text" name="qty_received" class="form-control"></td>
                            <td><input type="text" name="Amount" class="form-control"></td>
                            <td><input type="text" name="Folio" class="form-control"></td>
                            <td><input type="text" name="Remarks" class="form-control"></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="Item_no" class="form-control" value="3" readonly></td>
                            <td><input type="text" name="way_bill" class="form-control"></td>
                            <td><input type="text" name="Item_description" class="form-control"></td>
                            <td><input type="text" name="Unit" class="form-control"></td>
                            <td><input type="text" name="Unit_price" class="form-control"></td>
                            <td><input type="text" name="qty_received" class="form-control"></td>
                            <td><input type="text" name="Amount" class="form-control"></td>
                            <td><input type="text" name="Folio" class="form-control"></td>
                            <td><input type="text" name="Remarks" class="form-control"></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="Item_no" class="form-control" value="4" readonly></td>
                            <td><input type="text" name="way_bill" class="form-control"></td>
                            <td><input type="text" name="Item_description" class="form-control"></td>
                            <td><input type="text" name="Unit" class="form-control"></td>
                            <td><input type="text" name="Unit_price" class="form-control"></td>
                            <td><input type="text" name="qty_received" class="form-control"></td>
                            <td><input type="text" name="Amount" class="form-control"></td>
                            <td><input type="text" name="Folio" class="form-control"></td>
                            <td><input type="text" name="Remarks" class="form-control"></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="Item_no" class="form-control" value="5" readonly></td>
                            <td><input type="text" name="way_bill" class="form-control"></td>
                            <td><input type="text" name="Item_description" class="form-control"></td>
                            <td><input type="text" name="Unit" class="form-control"></td>
                            <td><input type="text" name="Unit_price" class="form-control"></td>
                            <td><input type="text" name="qty_received" class="form-control"></td>
                            <td><input type="text" name="Amount" class="form-control"></td>
                            <td><input type="text" name="Folio" class="form-control"></td>
                            <td><input type="text" name="Remarks" class="form-control"></td>
                          </tr>
                          <tr>
                            <td colspan="2"><label>RECEIVED BY</label></td>
                            <td colspan="2"><input type="text" name="recieved_of" class="form-control"></td>
                            <td colspan="3" style="text-align: right;"><label >ENTERED BIN CARD NO</label></td>
                            <td colspan="2"><input type="text" name="card_no" class="form-control"></td>

                          </tr>
                          <tr>
                            <td colspan="2">checked and inspected by</td>
                            <td colspan="2"><input type="text" name="checked_by" class="form-control"></td>
                            <td colspan="3">Reference to invoice number and action taken</td>
                            <td colspan="2"><input type="text" name="store_of" class="form-control"></td>
                          </tr>
                          <tr>
                            <td colspan="3"><button type="submit" class="btn btn-primary"> Save the Information</button></td>
                            <td colspan="3"><p class="vdate" style="font-size: 16px;text-align: right;">Voucher Number</p> </td>
                            <td colspan="2" ><input type="tex" name="vnumber" class="form-control" style="border-color: green; background-color: #414040; color: white;" value= <?php echo mt_rand(); ?> readonly></td>
                            <td><button type="reset" class="btn btn-danger"> Clear</button></td>
                          </tr>
                        </tbody>
                      
                    </table>
                
        </div> 

       
    </form>
		

</body>

</html>