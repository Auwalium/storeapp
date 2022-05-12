<div style='background-color:yellow;'> 
        <?php
   
    
        
    if(isset($_POST['update'])){
    include('../includes/dbconnect.php');
    $fid 	=  $_SESSION['username'];
    $wa 	=  $_POST['writers_add'];
    $ra 	=  $_POST['recipients_add'];
    $sal 	=  $_POST['salutation'];
    $tit 	=  $_POST['title'];
    $cont 	=  $_POST['content'];
    $cc 	=  $_POST['comp_close'];
    $sid	= $_GET['id'];
    
    
    $sql1= "UPDATE document SET writers_add ='$wa',recipient_add='$ra', salutation='$sal', title='$tit', body='$cont', complimentary_close = '$cc' WHERE did=18";
    
    
    if(mysqli_query($con, $sql1)){
    
    
    echo" Record Updated Successfully";
    
    }else{
    
    echo"Error Updating";
    
    }
    
    }
    
        ?>
       </div> 
