

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
       
            <tr><td><label for="platenum">Item Name:</label></td><td>

		   <?php
	include_once '../dbconfig.php';
	$stmt=$db_con->prepare("SELECT  * from item");
	$stmt->execute(array(':id'=>$id));	


			echo "<select id='name' name='itemid'>";
	
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				   
					echo "<option value='" . $row["id"]." '>" .$row["generic_name"]. "=======>".$row["brand_name"]."</option>";	
					
				}
			echo "</select>";
	

echo "</div>";
	
?>      
</td></tr>	
        </tr>
 
  <tr>
       
            <tr><td><label for="platenum">Suppliers Name:</label></td><td>

		   <?php
	include_once '../dbconfig.php';
	$stmt=$db_con->prepare("SELECT  * from supplier");
	$stmt->execute(array(':id'=>$id));	


			echo "<select id='name' name='supplierid'>";
	
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				   
					echo "<option value='" . $row["id"]." '>" .$row["name"]. "</option>";	
					
				}
			echo "</select>";
	

echo "</div>";
	
?>      
</td></tr>	
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' class='form-control'  required></td>
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
     
