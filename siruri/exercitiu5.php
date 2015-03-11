<?php

//aici adaugam input-uri in formularul de upload
if (isset($_POST['adauga']))
	{
	$contor=$_POST['contor']+1;
	}
	else $contor=0;

//aici verificam fisierele trimise din formularul de upload
if(isset($_POST['sub']))
	{
	$greseli=0;
	for ($i=0; $i<=$_POST['contor']; $i++)
		{
			if ($_FILES['f_'.$i]['size']>=5)
			{
			$a=explode(".", $_FILES['f_'.$i]['name']);/*sparge dupa .*/
			$ext=$a[count($a)-1];/*alege ultimul string dupa punct*/
			$ext_permise=array("jpg","pdf","doc");/*daca este una din estensii*/
			if (in_array(strtolower($ext), $ext_permise))/*face litere mici extensia*/
				{
				$denumiri[$i]=time()."_".$i.".".$ext;
				move_uploaded_file($_FILES['f_'.$i]['tmp_name'],"poze/".$denumiri[$i]);/*muta cu denumirea timpului adaugarii*/
				}
				else 
				{
				echo "Extensie gresita la fisierul <b>".$_FILES['f_'.$i]['name']." </b>!<br>";
				$greseli++;
				}
			}
			else
			{
			echo "Dimensiune gresita la fisierul <b>".$_FILES['f_'.$i]['name']." </b>!<br>";
			$greseli++;
			}
		}
		
	if ($greseli>0) $contor=$greseli-1;
	}
?>				
<form method="post" enctype="multipart/form-data">
<?php
for ($i=0; $i<=$contor; $i++)
	echo '<input type="file" name="f_'.$i.'"><br/>';
?>
<input type="hidden" name="contor" value="<?php echo $contor; ?>">
<input type="submit" name="sub" value="Trimite">
</form>
<form method="post">
<input type="hidden" name="contor" value="<?php echo $contor; ?>">
<?php if ($contor<4) {  ?>
<input type="submit" name="adauga" value="Adauga">
<?php } ?>
</form>

<?php
//sa afisam pozele urcate
if (isset($_POST['sub']))
foreach($denumiri as $v)
	echo "<img src='poze/$v' width=100>";

