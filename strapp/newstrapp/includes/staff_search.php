 <div class="search">
<center>
<form  action="" method="post">
<input type="text" name="search" width='100%' placeholder="Search with FILE NUMBER,FIRSTNAME,LASTNAME OR OTHERNAME ">
<input type="submit" name="submit1" value="Search Patient " class='btn-sm btn-info'>
</form>
</center>
</div>

<div class='table-responsive'>
 <table class='table' id='summary_table'>
        
        <thead>
        <tr>
            <th colspan="15"><h4>Bio Data</h4></th>

        </tr>
        
        <tr>
            
            <th>FILE NUMBER</th>
            <th>LAST NAME</th>
            <th>FIRST NAME</th>
            <th>OTHER NAMES</th>
            <th>DATE OF BIRTH</th>
            <th>GENDER</th>
            <th>NATIONALITY</th>
            <th colspan='2'>PASSPORT</th>
            <th colspan='1'>View Staff Full Documentation</th>
            <th colspan="1">View Open Files</th>
            <th colspan="1">View Secret Files</th>
            <th colspan="1">Action</th>

	</thead>
        </tr>

        <?php
        
        if(isset($_POST["submit1"])){
	$search_value=$_POST["search"];
	
	include('../includes/dbconnect.php');

	
 $sql="select * from stfbiodata where StaffID like '%$search_value%' or LastName like '%$search_value%' or FirstName like '%$search_value%' or OtherNames like '%$search_value%'";
		
		//$sql="select * from patient_reg where phone = $search_value or pid = $search_value or firstname = $search_value or surname = $search_value";

        $result = mysqli_query($con,$sql);
        
        
            while ($row=mysqli_fetch_assoc($result))
             {
            
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['StaffID']; ?></td>
                    <?php $id = $row['StaffID']; ?>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['OtherNames']; ?></td>
                    <td><?php echo $row['DOB']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Nationality']; ?></td>
                    <td colspan='2'><?php echo $row['Passport']; ?></td>
<td colspan='1'><?php echo"<a class='btn-sm btn-success' href='full_documentation.php?id=$id'>View Full Staff Details</a>";?></td>
                    
                  <td colspan='1'><a href='open.php' class='btn-sm btn-info'> OPEN FILE</a> </td>
                  <td colspan='1'><a href='open.php' class='btn-sm  btn-info'> SECRET FILE</a> </td>
                  <td colspan='1'><?php $id =$row['StaffID']; ?>
                        
            <?php echo "<a href='update_admin_biodata.php?id=$id'class='badge badge-success'> Edit</a>";?> 
             

                    
                
        <?php
            }
            }
        ?>

                    </td>
            </tr>
         </tbody>   

</table>
      
                    </div>
