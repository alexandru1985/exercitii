<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("abcd") or die(mysql_error());

//partea de stergere
if (isset($_POST['sterge']))
	{
	mysql_query("delete from tabel1 where id='{$_POST['id']}'");
	}

if( isset( $_POST['Trimite'])) 
{
	if (strlen(trim($_POST[ 'nume' ]))<1) echo "scrie ceva la nume!";
	elseif (strlen(trim($_POST[ 'prenume' ]))<1) echo "scrie ceva la prenume!";
	elseif (strlen(trim($_POST[ 'adresa' ]))<1) echo "scrie ceva la adresa!";
	else
	{
	$q=mysql_query("insert into tabel1 ( nume, prenume, adresa, datan, fumator ) values ( '{$_POST[ 'nume' ]}','{$_POST[ 'prenume' ]}','{$_POST[ 'adresa' ]}','{$_POST[ 'an' ]}-{$_POST[ 'luna' ]}-{$_POST[ 'zi' ]}','{$_POST[ 'fumator' ]}') ");
	
	}
}


?>
<form  action="" method="post">
Nume: <br />
<input type="text" name="nume" /> <br />
Prenume: <br />
<input type="text" name="prenume" /> <br />
Adresa: <br />
<textarea name="adresa" rows="3" cols="20"></textarea> <br />
Data nasterii: <br />
<?php  

echo "<select name=zi>";
for( $i = 1; $i <= 31; $i++ ) {
	echo "<option value=\"$i\">$i</option>\n";
}
print "</select>";

echo "<select name=luna>";
for( $i = 1; $i <= 12; $i++ ) {
	echo "<option value=\"$i\">$i</option>\n";
}
print "</select>";


echo "<select name=an>";
for( $i = 1940; $i <= 2013; $i++ ) {
	echo "<option value=\"$i\">$i</option>\n";
}
print "</select>";

?>
<br/><br/>
Fumator:<br>
<input type="radio" name="fumator" value="da" />Da
<input type="radio" name="fumator" value="nu"  checked="checked"/>Nu
<br/><br/>

<input type="submit" value="Trimite" name="Trimite" />
</form>


<?php

$q=mysql_query("select * from tabel1 order by id desc");
echo "<table border=1><tr><td>Id</td><td>Nume</td><td>Prenume</td><td>Adresa</td><td>Data nasterii</td><td>Fumator</td><td></td></tr>";
while($d=mysql_fetch_row($q))
	{
	echo "<tr><td>{$d[0]}</td><td>{$d[1]}</td><td>{$d[2]}</td><td>{$d[3]}</td><td>{$d[4]}</td><td>{$d[5]}</td><form method=post><td><input type=hidden name=id value='{$d[0]}' ><input type=submit name=sterge value=Sterge ></td></form></tr>";
	}
echo "</table>";
?>