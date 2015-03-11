<?php
session_start();
$tzero= time();
if ($_SESSION['logat']!="da")
{
     if (isset($_POST['nume'])) {
         $coloare = $_POST['nume'];
         setcookie($culoare, $tzero);    
if(time()>=($tzero+5))
{$a = array(0,1,2,3,4,5,6,7,8,9,"a","b","c","d","e","f");
$culoare = "#";
 for ($i=1;$i<=6;$i++){
      $index=rand(0,15);
      $culoare.= "$a[$index]";}
}
}
}
?>
<html>
<head>
	<title>Pagina mea minunata</title>
        <style type="text/css">

body{
background-color: <?php echo $culoare;?>

}

</style>     
</head>
<body>
Bine ai venit cetatene <?php echo $_SESSION['nume']; ?>
<br>
<a href="logout.php">logout</a>
</body>
</html>
