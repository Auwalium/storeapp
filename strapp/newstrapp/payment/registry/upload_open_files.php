<div class='table-responsive' style='background-color:lavender;color:green;text-align:center;'>
<?php
if(isset($_POST['submit_open'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['open_file']['name'];
	$filename1 = mysqli_real_escape_string($filename);
    // destination of the file on the server
    $destination = 'OPEN/'.$filename;
    $uploadOk = 1;
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['open_file']['tmp_name'];
    
    $size = $_FILES['open_file']['size'];
    $file_type = $_FILES['open_file']['type'];
    
    $sid = $_POST['staff_id'];
    if (!in_array($extension, ['jpg', 'jpeg','png','pdf', 'docx', 'doc',])) {
        echo "You file extension must be .jpg, jpeg, .png, .docx, .pdf or .docx";
       ?>
    <script>
         setTimeout(function(){
            window.location.href = 'all_files.php';
         }, 4000);
      </script>    
        
        
        <?php  
    } elseif ($_FILES['open_file']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
        
        ?>
        <script>
         setTimeout(function(){
            window.location.href = 'all_files.php';
         }, 2000);
      </script>
      <?php
    }elseif(file_exists($destination)) {
    echo "Sorry, file already exists.";
    ?>
     
         <script>
         setTimeout(function(){
            window.location.href = 'all_files.php';
         }, 2000);
      </script>
    <?php
    $uploadOk = 0;
    }elseif(move_uploaded_file($file, $destination)) {
        // move the uploaded (temporary) file to the specified destination
        
        
        include('../includes/dbconnect.php');
            $sql = "INSERT INTO open_files(name, size, file_type, staff_id, downloads) VALUES ('$filename', '$size','$file_type', ' $sid', '0')";
           // print_r($sql);
           
            if (mysqli_query($con, $sql)) {
                echo "File uploaded successfully";
                }else{echo" File Upload Failed";}
                ?>
                
              <script>
         setTimeout(function(){
            window.location.href = 'all_files.php';
         }, 2000);
      </script>  
      
      <?php
            }
        } 
    

?>

</div>
