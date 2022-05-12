
<?php

session_start();
$dispatchby = $_SESSION["username"];
  	
?>  
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
  <?php

session_start();
$dispatchby = $_SESSION["username"];
  	
?>  
        <tr>
            <td>LPO</td>
            <td><input type='text' name='sname' class='form-control'  required /></td>
        </tr>
 
        <tr>
            <td>model</td>
            <td><input type='text' name='model' class='form-control'  ></td>
        </tr>
 
        <tr>
            <td>Supplier name</td>
            <td><input type='text' name='dsup' class='form-control'  required></td>
        </tr>
		 <tr>
            <td>Item Name</td>
            <td><input type='text' name='name' class='form-control'  required /></td>
        </tr>
		<tr>
            <td>Description</td>
            <td><input type='text' name='descrip' class='form-control' value='<?php echo $row['descrip']; ?>' required></td>
        </tr>
        <tr>
            <td>Received By</td>
            <td><input type='text' name='rname' class='form-control' value='<?php echo $_SESSION['user']['username']; ?>'  required></td>
        </tr>
  <tr> 
				<td>Item category</td>
				<td>
				  <select name="category">
                  
				
				                <option value = "Hospital Equipment">Hospital Equipment</option>
				                <option value = "Office Equipment">Office Equipment</option>
								<option value = "Office Stationary">Office Stationary</option>
								<option value = "Maintenance Items">Maintenace Items</option>
								<option value = "Scrap">Scrap</option>
								<option value = "Radiology Goods">Radiology Goods</option>
								<option value = "Dental Goods">Dental Goods</option>
								<option value = "Theater Goods">Theater Goods</option>
								<option value = "Laboratory Goods">Laboratory Goods</option>
								
				</select>
				
				</td>
        </tr>
		
		
		
		<tr>
            <td>Unit Price</td>
            <td><input type='int' name='sprice' class='form-control'  required></td>
        </tr>
		 <tr>
            <td>Quantity</td>
            <td><input type='int' name='slevel' class='form-control'  required /></td>
        </tr>
 
        <tr>
            <td>Manufactured Date</td>
            <td><input type='date' name='mdate' class='form-control'  ></td>
        </tr>
 
        <tr>
            <td>Expiry Date</td>
            <td><input type='date' name='edate' class='form-control'  ></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
