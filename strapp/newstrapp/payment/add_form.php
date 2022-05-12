
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
            <td>Item Name</td>
            <td><input type='text' name='itemname' class='form-control'  required /></td>
        </tr>
 
        <tr>
            <td>Description</td>
            <td><input type='text' name='descrip' class='form-control'  ></td>
        </tr>
		<tr>
            <td>Price Control Committee (Price)</td>
            <td><input type='text' name='cp' class='form-control'  ></td>
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
     
