
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
		 <td>Item Name</td>
            <td><input type='text' name='name'  ></td>
        </tr>
		
				
		<tr>
            <td>Quantity</td>
            <td><input type='text' name='qty'  ></td>
        </tr>		
		
			<tr> 
				<td>by</td>
				<input type="hidden" name="rby" value='<?php echo $_SESSION['user']['username']; ?>' >
				<td><input type="text" name="rname1" value='<?php echo $_SESSION['user']['username']; ?>' ></td>
			</tr>
			<tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> <tr> </tr> 
			
			
		 <tr>
            <td>Dated</td>
             <td><input type='date'  name='rdate' value = '<?php echo ($currentDate);  ?>'></td>
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
     
