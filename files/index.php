<?php
if(isset($_POST['upload'])){
    
    move_uploaded_file($_FILES['img']['tmp_name'], $_FILES['img']['name']);
    $img_name = $_FILES['img']['name'];
    $img_size = $_FILES['img']['size'];
    $img_type = $_FILES['img']['type'];
    echo "Name:" .  $img_name . "<br />";
    echo "Type:" .  $img_type . "<br />";
    echo "Size:" .  $img_size . "<br />";
    echo "<img src='" . $img_name. "'/>";
}
?>

<form action="index.php" method = "post" enctype="multipart/form-data">
    <input type ="file" name = "img" /><br />
    <input type ="submit" name = "upload" value ="Upload" />
    
</form>