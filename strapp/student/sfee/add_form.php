
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
   <form name="form1" method="post" action="customer.php"> 
    <label for="name">Name:</label><input type="text" class="form-control" name="fname"value="<?php echo $name1 ?>">
	 <label for="address">Address:</label><input type="text" class="form-control" name="address"value="<?php echo $address ?>">
	  <label for="phone">Guardian Phone:</label><input type="text" class="form-control" name="gphone"value="<?php echo $phone ?>">
	   <label for="platenum">sex:</label><input type="text" class="form-control" name="sex"value="<?php echo $platenumber ?>">
    <label for="address">Middle Name:</label><input type="text" class="form-control" name="mname"value="<?php echo $address ?>">
	  <label for="phone">Surname:</label><input type="text" class="form-control" name="surname"value="<?php echo $phone ?>">
	   <label for="platenum">Guardian Name:</label><input type="text" class="form-control" name="gname"value="<?php echo $platenumber ?>">
        <label for="platenum">Age:</label><input type="text" class="form-control" name="age"value="<?php echo $platenumber ?>">
		<tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>

    </table>
</form>
     
