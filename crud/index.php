<html>
    <head><title></title>
    </head>
<body>
<center>
    <h1>Add Users</h1>
   <form action="index.php" method="post">
   Name:<input type="text" name="name"/><br>    
   Password:<input type="text" name="pass"/><br>        
   Email:<input type="text" name="email"/><br>          
      <input type="submit" name="submit" value="Submit"/>  
       
   </form> 
</center>    
</body>
</html>   

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Eroare de conectare: " . mysqli_connect_error());
}


if( isset( $_POST['submit']))
{
$name =$_POST['name'];
$pass =$_POST['pass'];
$email =$_POST['email'];

if(mysqli_query($conn,"insert into user (name ,email, pass) values ('$name','$email','$pass')"))
{echo "<h2 align=center>User has been added succesufully</h2>";}


}
?>

<div align="center">
    <table border="2" width="600">
        <tr>
         <th>Id</th><th>Name</th><th>Email</th><th>Password</th><th>Edit</th><th>Delete</th>
        </tr>
     <?php
  error_reporting(0);
  mysql_connect("localhost", "root" , "") or die(mysql_error());
  mysql_select_db("crud") or die(mysql_error());
  if( isset( $_GET['delete']))
 {
   $delete_id= $_GET['delete'];  
   if(mysql_query("delete from user where id='$delete_id'")){
   echo "User was deleted";    
   }
} 
     $query = mysql_query("select * from user ");
     while($row=mysql_fetch_array($query)){
         $showid=$row[0];
         $showname=$row[1];
         $showemail=$row[2];
         $showpass=$row[3];
      echo "<tr align='center'> 
            <td>$showid</td>
            <td>$showname</td>
            <td>$showemail</td>
            <td>$showpass</td>
            <td><a href = edit.php?edit=$showid>Edit</a></td>
            <td><a href = index.php?delete=$showid>Delete</a></td>  
         </tr>";
     }
     //<button type="button"><a href="yourlink.com">Link link</a></button>
     ?>
    </table>
    
    
    
</div>

