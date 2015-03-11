<?php

if(isset($_POST['name']) === true && empty($_POST['name']) === false){
    
   require '../test/connect.php'; 
   $query = mysql_query("SELECT `names`.`location` FROM `names` WHERE `names`.`name`='".mysql_real_escape_string(trim($_POST['name']))."'"); 
   
    if(mysql_num_rows($query) !==0){echo "Orasul este: ".mysql_result($query, 0,'location');} 
     else{echo 'Name not found';}

}



?>