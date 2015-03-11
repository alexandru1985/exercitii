<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Eroare de conectare: " . mysqli_connect_error());
}
 
 $editId= $_GET['edit'];  
 $query = mysqli_query($conn,"select * from admin_interface where id = '$editId'");
 while($row=mysqli_fetch_array($query)){
         $id=$row[0];
         $name=$row[1];
         
     }
 
 ?>
<html>
    <head><title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css">     
    </head>
<body>

    <h3>Modificare date</h3>
    <form action="edit.php?edit_form=<?php echo $id;?>" method="post">
  Denumire portal: <input type="text" name="uname" value="<?php echo $name;?>"/><br>    
      <input type="submit" name="update" value="Salveaza"/>  
       
   </form> 
 
</body>
</html>   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Eroare de conectare: " . mysqli_connect_error());
}
if( isset( $_POST['update']))
 {
   $uid= $_GET['edit_form'];
   $uname =$_POST['uname'];
   
   if(mysqli_query($conn,"update admin_interface set portal = '$uname' where id= $uid")){
       header('location:interface.php');
  
   }
} 

?>