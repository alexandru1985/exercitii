<?php
if(isset($_POST['sub']))
$a = array(0,1,2,3,4,5,6,7,8,9,"a","b","c","d","e","f");
$culoare = "#";
 for ($i=1;$i<=6;$i++){
      $index=rand(0,15);
      $culoare.= "$a[$index]";}
     for ($i=1;$i<=5;$i++%3!==0) 
 ?>
<html>
      <head>
          <title></title>
        <style type="text/css">

body{
background-color: <?php echo $culoare;?>

}

</style>    
      </head>
<form method="POST">  
<input type="submit" name="sub" value="Schimba">
    
</form>
 </html>