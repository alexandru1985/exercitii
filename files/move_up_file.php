<?php
$name = $_FILES['file']['name'];
//    $img_size = $_FILES['file']['size'];
//    $img_type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];



if (isset($name)) {
    if (!empty($name)) {
      
      $location = 'joaca/files_recive';  
      if (move_uploaded_file($tmp_name , $destination.$name)){
          
          echo "Uploaded.";
      }
        
    } else {
        echo "Please choose a file.";
    }
}
?>



<form action="move_up_file.php" method = "post" enctype="multipart/form-data">
    <input type ="file" name = "file" /><br />
    <input type ="submit" name = "upload" value ="Submit" />

</form>