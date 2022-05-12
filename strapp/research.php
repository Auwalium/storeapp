
<?php include('abum.php'); ?>
<!DOCTYPE html>

<html>

<head>

<title>Comfirm your application</title>

<link rel="stylesheet" type="text/css"

href="boot/css/bootstrap.min.css">

</head>

<body>
    <div class="container">

              <div class="row"><div class="col-md-12"><center><h1>Search your application.</h1></center></div>  

                

                <form action="" method="GET">
                <div class="col-md-12">
            
                <input type="text"  name="search" placeholder="Enter your user name">&nbsp;
            
            
                <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
                </div>
                </form>



                <table class="table table-striped table-responsive">

                <tr>

                <th>Name</th>

                <th>Quantity</th>

                <th>Department</th>

                <th>Unit</th>

                <th>Sub Unit</th>

                </tr>

                <?php

                while($row = $result->fetch_assoc()){

                    ?>

                    <tr>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['quantity']; ?></td>

                    <td><?php echo $row['dept']; ?></td>

                    <td><?php echo $row['unit']; ?></td>

                    <td><?php echo $row['sunit']; ?></td>

                    </tr>

                    <?php

                }
                /*freeresultset*/
                    $result->free();
                ?>

                </table>
        </div>
                
    </div>
</body>

</html>