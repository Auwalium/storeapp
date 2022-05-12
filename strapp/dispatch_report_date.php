<?php ini_set('display_errors', 0); ?> 
<?php

$localhost = "localhost";

$username = "emedion";

$password = "Password";

$dbname = "inventory";

$con = new mysqli($localhost, $username, $password, $dbname);

if( $con->connect_error){

    die('Error: ' . $con->connect_error);

}



if( isset($_GET['search']) ){

   
     //$strange = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
      $strangea = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));


    $sql = "SELECT * FROM dispatch where ddate between '$strangea'   and  curdate() order by ddate desc";


}

$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FMC KEFFI </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boot/css/bootstrap.min.css">
  <script src="boot/js/jquery.min.js"></script>
  <script src="boot/js/bootstrap.min.js"></script>
  <style>
    .wrapper{
      width: 80%;
      margin: auto;
    }
  </style>
</head>
<body>

<div class="container">
        <div class="row">
          <div class="col-md-12">
              <center><h1>Dispatch report</h1></center>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
            <h5>Pick a date to date</h5>
          
                <form action="" method="GET">
                
            
                <input type="Date"  name="search" style="width: 60%; border-radius: 5px; border-width: 0px;">&nbsp;

                 
                
            
            
                <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
                
                </form>
              </div>
              <div>
                <div class="col-md-5">
                  <button class="btn btn-primary" onclick="Pfunction()" style="width: 70%; padding: 10px;">Print this page</button>
                    <script>
                        function Pfunction() {
                          window.print();
                        }
                        </script>
                  
                </div>
              </div>
                </div>
              </div>
             <div class="col-md-6"> 
              <p>Type the search key word either Date, Recieved by,Dispatch by ,unit or file no.</p>  
                <input class="form-control" id="myInput" type="text" placeholder="Search.." style="border-color:green; color:green;font-size:18px;">
              </div>  
              
              <table class="table table-bordered table-stripeda table-hover">
              <thead style="background-color: green; color: white;">
                <tr>
                <th width="15%">Item Name</th>

                <th width="7%">Dept</th>

                <th width="7%">Unit</th>

                <th width="8%">Approved By</th>

                <th width="5%">Qty. Requested</th>
                <th width="5%">Qty Dispatch</th>
                <th width="10%">Dispatch Date </th>
                <th width="15%">Recieved By</th>
                <th width="5%">File NO.</th>
                <th width="15%">Dispatch By</th>
                </tr>
                </thead>
                <tbody id="myTable">
                    <?php

                while($row = $result->fetch_assoc()){

                    ?>

                    <tr>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['dept']; ?></td>

                    <td><?php echo $row['unit']; ?></td>

                    <td><?php echo $row['appv']; ?></td>

                    <td><?php echo $row['qis']; ?></td>
                    <td><?php echo $row['qabs']; ?></td>
                    <td><?php echo $row['rdate']; ?></td>
                    <td><?php echo $row['cname']; ?></td>
                    <td><?php echo $row['cfile']; ?></td>
                    <td><?php echo $row['dby']; ?></td>

                    </tr>

                    <?php

                }
                /*freeresultset*/
                    $result->free();
                ?>
             </tbody>
            </table>
          </div>
        </div>
  
  
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
