
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
            <td>Item Name</td><td>
		   <?php
	include_once '../dbconfig.php';
	$stmt=$db_con->prepare("select * from item ");
	$stmt->execute(array(':id'=>$id));	


			echo "<select id='name' name='name'>";
	
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				   
					echo "<option value='" . $row["itemname"]." '>" .$row["itemname"]."=======>". $row["descrip"]."</option>";	

				}
			echo "</select>";
	

echo "</div>";
	
?>      
       </td> </tr>
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
								<option value = "Radiology ">Radiology Goods</option>
								<option value = "Dental">Dental Goods</option>
								<option value = "theater">Theater Goods</option>
								<option value = "Laboratory ">Laboratory Goods</option>
								<option value = "pharmacy ">Pharmacy Goods</option>
								
				</select>
				
				</td>
				</tr> 
		
		
		
		<tr>
            <td>Unit (procured) Price</td>
            <td><input type='int' name='cprice' class='form-control'  required></td>
        </tr>
		<tr>
            <td>Unit (sale)Price</td>
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
     
