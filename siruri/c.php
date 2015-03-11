<?php
error_reporting(0);
$u="admin";
$p=md5("123");

//sa vedem daca are cookie si sa facem login din ele
if (isset($_COOKIE['u']) && $_COOKIE['u']==$u && isset($_COOKIE['p']) && $_COOKIE['p']==$p)
	{
	echo "Bine ai venit cetatene ".$_COOKIE['u']." si parola ".$_COOKIE['p'];
	exit;
	}

if (isset($_POST['sub']))
{
if (empty($_POST['nume'])) echo "scrie ceva la nume!";
elseif (empty($_POST['parola'])) echo "scrie ceva la parola!";
else {
	if ($_POST['nume'] == $u && md5($_POST['parola']) == $p)
		{
		//inseamna ca si-a nimerit datele, il lasam sa intre
		//sa vedem daca e bifata bifa
		
		echo "Bine ai venit cetatene ".$_POST['nume'];
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
<input type=checkbox name=checkbox >
<br>
<input type=submit name=sub value=Intra >
</form>