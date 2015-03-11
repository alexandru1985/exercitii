<?php
 error_reporting(0);
 mysql_connect("localhost", "root" , "") or die(mysql_error());
 mysql_select_db("crud") or die(mysql_error());
 
 $edit_id= $_GET['edit'];  
 $query = mysql_query("select * from user where id = '$edit_id'");
 while($row=mysql_fetch_array($query)){
         $id=$row[0];
         $name=$row[1];
         $email=$row[2];
         $pass=$row[3];
      echo "<tr align='center'> 
            <td>$showid</td>
            <td>$showname</td>
            <td>$showemail</td>
            <td>$showpass</td>
          
         </tr>";
     }
 
 ?>
<html>
    <head><title></title>
    </head>
<body>
<center>
    <h1>Edit Users</h1>
    <form action="edit.php?edit_form=<?php echo $id;?>" method="post">
   Name:<input type="text" name="uname" value="<?php echo $name;?>"/><br>    
   Password:<input type="text" name="upass" value="<?php echo $pass;?>"/><br>        
   Email:<input type="text" name="uemail" value="<?php echo $email;?>"/><br>          
      <input type="submit" name="update" value="Update"/>  
       
   </form> 
</center>    
</body>
</html>   
<?php

 error_reporting(0);
 mysql_connect("localhost", "root" , "") or die(mysql_error());
 mysql_select_db("crud") or die(mysql_error());
if( isset( $_POST['update']))
 {
   $uid= $_GET['edit_form'];
   $uname =$_POST['uname'];
   $upass =$_POST['upass'];
   $uemail =$_POST['uemail'];
   if(mysql_query("update user set name = '$uname', email = '$uemail', pass ='$upass' where id= $uid")){
       header('location:index.php');
   echo "User was updated";    
   }
} 



 ?>