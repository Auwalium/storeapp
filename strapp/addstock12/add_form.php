
<?php

session_start();
$dispatchby = $_SESSION["username"];

// variable to store the current time in seconds  
$currentTimeinSeconds = time();  
  
// converts the time in seconds to current date  
$currentDate = date('Y-m-d', $currentTimeinSeconds); 

  	
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
            <td>Name</td>
            <td><input type='text' name='name' class='form-control'></td>
        </tr>
 
        <tr>
            <td>Description</td>
            <td><input type='text' name='descrip' class='form-control'  ></td>
        </tr>
 
        <tr>
            <td>Quantity</td>
            <td><input type='text' name='quantity' class='form-control'  ></td>
        </tr>
		 <tr>
            <td>Why is it needed</td>
            <td><input type='text' name='swy' class='form-control'   ></td>
        </tr>
		<tr>
            <td>Department</td>
            <td><input type='text' name='dept' class='form-control' value='<?php echo $row['descrip']; ?>' required></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type='hidden' name='ddate' class='form-control' value='<?php echo $currentDate; ?>' required>
            <?php echo $currentDate; ?></td>
        </tr>
		
		<tr>
            <td>Unit Price</td>
            <td><input type='int' name='cprice' class='form-control' ></td>
        </tr>
		 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plusaa"></span> Send
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
