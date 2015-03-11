<?php
error_reporting(0);
session_start();
$u="doe";
$p="123";

if (isset($_GET['mesaj']) && $_GET['mesaj']==1)
{
if ($_SESSION['afisare']!="ceva")
{
echo "<span style='background:green;color:white;font-size:14px;font-weight:bold'>Ne pare rau ca ai plecat!</span>";
$_SESSION['afisare']="ceva";
}
}

if (isset($_POST['sub']))
{
if (empty($_POST['nume'])) echo "scrie ceva la nume!";
elseif (empty($_POST['parola'])) echo "scrie ceva la parola!";
else {
	if ($_POST['nume'] == $u && $_POST['parola'] == $p)
		{
		//inseamna ca si-a nimerit datele, il lasam sa intre
		$_SESSION['logat']="da";
		$_SESSION['nume']=$_POST['nume'];
		header("location: site.php");
     	setcookie("u", $_POST['nume'], time()+200);
	    setcookie("p", md5($_POST['parola']), time()+200);
		exit;
		}
		else echo "date incorecte!";
	}
}
?>
<form method=post>
<input type=text name=nume>
<br>
<input type=password name=parola>
<br>
<input type=submit name=sub value=Intra >
</form>