<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carti1";


$conn = mysqli_connect($servername, $username, $password, $dbname);
$data ='';
if (!$conn) {
    die("Eroare de conectare: " . mysqli_connect_error());
}

if(isset($_POST['search'])){
$str = $_POST['search'];
$str = preg_replace("#[^0-9a-z]#i", "", $str);
$query = "select CARTE from autori where CARTE LIKE '%$str%' ";
$result = mysqli_query($conn, $query);
$count =  mysqli_num_rows($result);
    if($count>0){
        
        while ($row = mysqli_fetch_array($result)) {
            echo $data = $data."<div>".$row['CARTE']."</div>";
        }
        
        
        
    }
} else{
?>
<!DOCTYPE html5>
<html>
      <head>
          <title></title>
         <script type="text/javascript" src="https://code.jquery.com/jquery-git2.min.js"> </script>
         <script>
            $(function(){
                
             $('.input').keyup(function(){
                 var search =  $('.input').val();
                 $.post("index.php",{"search":search},function(data){
                   $('.entry').html(data);       
                   
                }); 
                  });     
            });  
         </script>        
             
             
     </head>
    <body>
        <form action="index.php" method="POST">
         <input type="text" name="search" class = "input" />
     
          <input type="submit"  value="Search" />
        </form>
        <div class="entry"></div>
    </body>
  
</html>    
<?php }



?>