<div class='table-responsive' style='background-color:lavender;color:green;text-align:center;'>
<?php
if (isset($_POST['submit_secret'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['secret_file']['name'];

    // destination of the file on the server
    $destination = 'SECRET/'.$filename;
    $uploadOk = 1;
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['secret_file']['tmp_name'];
    $size = $_FILES['secret_file']['size'];
    $file_type = $_FILES['secret_file']['type'];
    $sid = $_POST['staff_id'];
    if (!in_array($extension, ['jpg', 'jpeg','png','pdf', 'docx', 'doc',])) {
        echo "You file extension must be .jpg, jpeg, .png, .docx, .pdf or .doc";
        
        ?>
    <script>
         setTimeout(function(){
            window.location.href = 'all_files.php';
         }, 4000);
      </script>    
        
        
        <?php
    } elseif ($_FILES['secret_file']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
        ?>
        <script>
         setTimeout(function(){
            window.location.href = 'all_files.php';
         }, 4000);
      </script>
      <?php
    }elseif(file_exists($destination)) {
    echo "Sorry, file already exists.";
    ?>
     
         <script>
         setTimeout(function(){
            window.location.href = 'all_files.php';
         }, 4000);
      </script>
    <?php
    $uploadOk = 0;
   
    }else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
        
        include('../includes/dbconnect.php');
            $sql = "INSERT INTO secret_files(name, size,file_type,staff_id, downloads) VALUES ('$filename','$size','$file_type','$sid','0')";
            
            if(mysqli_query($con, $sql)) {
                echo "File uploaded successfully";
               } else {
            echo "Failed to upload file.";
        } 
            ?>
                
                <script>
         setTimeout(function(){
            window.location.href = 'all_files.php';
         }, 5000);
      </script>
      
      <?php
            }
        
    }
}

?>

</div>

