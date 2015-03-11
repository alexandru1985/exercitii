<?php
if(isset($_POST['sub']))
$contor=$_POST['sub']+1;

$a = array(0,1,2,3,4,5,6,7,8,9,"a","b","c","d","e","f");
$culoare = "#";
 for ($i=1;$i>=$contor;$i++){
      $index=rand(0,15);
      $culoare.= "$a[$index]";}

   
 ?>
<html>
      <head>
          <title></title>
        <style type="text/css">

body{
background-color: <?php if ($contor<4){echo $culoare;}?>

}

</style>    
      </head>
<form method="POST">  

<input type="submit" name="sub" value="Schimba">

</form>

 
 <?php
if(isset($_POST['sub']))
{
if (empty($_POST['nume'])) echo "scrie ceva la nume!";
elseif (empty($_POST['prenume'])) echo "scrie ceva la prenume!";
elseif (empty($_POST['adresa'])) echo "scrie ceva la adresa!";
else
{
//pasul 1
//$fisier=$_POST['nume'].'_'.$_POST['prenume'].'.txt';
$fisier="cetateni";
$delimitare="\r\n*******************************\r\n";

//pasul 2
$poveste = "Nume: {$_POST['nume']}
Prenume: {$_POST['prenume']}
Adresa: ".str_replace("\r\n", "\r\n\t", $_POST['adresa'])."
Data nasterii: {$_POST['zi']}/{$_POST['luna']}/{$_POST['an']}
Fumator: {$_POST['fum']}";

//pasul 3
if (!file_exists($fisier))
		file_put_contents($fisier, $poveste);
	else
		file_put_contents($fisier, $delimitare.$poveste, FILE_APPEND);
		
}
}

?>
      

<body>

<form method="post">
<table cellspacing="10px">
<tr>
<td align="right"> Nume: </td>
<td>  <input name="nume" type="text" />  </td>
</tr>

<tr>
<td align="right"> Prenume: </td>
<td>  <input name="prenume" type="text" />  </td>
</tr>

<tr>
<td align="right" valign="top"> Adresa: </td>
<td> <textarea name="adresa" maxlenght="50" rows="4"></textarea> </td>
</tr>

<tr>
<td align="right"> Data nasterii: </td>
<td> <select name="zi">
	<option value="0">zi</option>
<?php
	for($i=1;$i<=31;$i++)
	echo "<option>$i</option>";
?>

</select>

<select name="luna">
	<option value="0">luna</option>
<?php
	
	 $luna=array("ianuarie","februarie","martie","aprilie","mai","iunie",
	              "iulie","august","septembrie","octombrie","noiembrie","decembrie");
	foreach ($luna as $k => $v)
	echo "<option value=".($k+1).">$v</option>";
?>

</select>
	<select name="an">
	<option value="0">an</option>
<?php
	for($i=2014;$i>=1900;$i--)
	echo "<option>$i</option>";
?>
</select>
</td>
</tr>

<tr>
<td align="right"> Fumator: </td>
<td> <input name="fum" type="radio" value="da"/>Da
	 <input name="fum" type="radio" value="nu" checked />Nu </td>
</tr>

<tr>
<td> </td>
<td> <input name="sub" type="submit" value="Trimite"></td>
</tr>

</table>

</form>

</body>
</html>
