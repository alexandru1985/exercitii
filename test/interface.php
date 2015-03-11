<html>
    <head>
        <title></title>
          <link rel="stylesheet" href="css/style.css" type="text/css">  
    </head>
<body>

    <h3>Adaugare date</h3>
   <form action="interface.php" method="post">
   Denumire portal: <input type="text" name="name"/><br>    
          
      <input type="submit" name="submit" value="Adauga"/>  
       
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



if( isset( $_POST['submit']))
{
$name =$_POST['name'];


if(mysqli_query($conn,"insert into admin_interface (portal) values ('$name')"))
{
    echo "Datele au fost adaugate.";}


}
?>

<div>
    <table id = "tabel" border="2" width="400">
        <tr id ="title">
         <th >Id</th><th>Portal</th><th id="modifica">Modifica</th><th id="sterge">Sterge</th>
        </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Eroare de conectare: " . mysqli_connect_error());
}
  if( isset( $_GET['delete']))
 {
   $deleteId= $_GET['delete'];  
   if(mysqli_query($conn,"delete from admin_interface where id='$deleteId'")){
   echo "Datele au fost sterse.";    
   }
} 
     $query = mysqli_query($conn,"select * from admin_interface");
     while($row=mysqli_fetch_array($query)){
         $showId=$row[0];
         $showName=$row[1];
       
      echo "<tr align='center'> 
            <td>$showId</td>
            <td>$showName</td>
            <td><button type=button id=buton><a href = edit.php?edit=$showId>Modifica</a></button></td>
            <td><button type=button id=buton><a href = interface.php?delete=$showId>Sterge</a></button></td>  
         </tr>";
     }

?>
    </table>
    
    
    
</div>

