

<div class="content-loader">
        
        <table cellspacing="0" width="20%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
       
        <th>First Name</th>  
        <th>Action</th>  
        </tr>
        </thead>
        <tbody>
        
<?php
 $connect = mysqli_connect("localhost", "root", "", "testing");
            

			$select = "SELECT * FROM tbl_sample GROUP BY first_name";
			$result1 = mysqli_query($connect, $select);
		
			while($row = mysqli_fetch_assoc($result1)) 
			{
				$first_name = $row['first_name'];
			
			echo"
  	<tr>
  	<td>$first_name</td>
  	<td><a class='btn btn-primary' href='fetch2.php?pid=$first_name'> Select</a></td>
  	<td><a href='fetch2.php?data=$first_name'>$first_name</a></td>
  	</tr>
  	";
		

			}
			
	
	?> 

<script>
       $("#choose").on('submit','form', function(event){
  event.preventDefault();
  $.post(
      "ajax15.php",
      {data: this.form.data.value}, 
      function (response) { alert(response); }            
   );
});
    </script>
</body>