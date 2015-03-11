
<?php
if(isset($_POST['sub'])){
  $selectOption = $_POST['zi']; 
  $selectOption1 = $_POST['luna']; 
  $selectOption2 = $_POST['an']; 
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $radio = $_POST['radio'];
  $radio1 = $_POST['radio1'];
  $adresa = $_POST['textarea'];
  echo $_POST['nume']."<br>"; 
  echo $_POST['prenume']."<br>";  
  echo ($_POST['zi'])."/".($_POST['luna'])."/".($_POST['an'])."<br>";  
  echo $_POST['radio']."<br>";  
  echo $_POST['radio1']."<br>"; 
  echo $_POST['textarea']."<br>";  }
?> 


<form method="POST">
 <table> 
   <tr> 
        <td>Nume</td>     <td><input type="text" name='nume'>    </td></tr> <br>
     <tr> <td>Prenume</td><td><input type="text" name='prenume'></td> </tr><br>
    <tr> <td>Data nasterii</td><td> <select name="zi">
     
<option value ="0">zi</option>
<?php
for($i=1;$i<=31;$i++)
echo  "<option>$i</option>";

	
       
        
            
?>
    
</select>
<select name="luna">
<option value ="1">luna</option>

<?php

$luni = array('ianuarie', 'februarie', 'martie', 'aprilie', 'mai', 'iunie', 'iulie','august','septembrie','octombrie','noiembrie','decembrie');

foreach($luni as $luni)
echo  "<option>$luni</option>";

	
       
        
                 
?>
    
</select>


<select name="an">

<option value ="2">an</option>
<?php
for($i=1;$i<=2014;$i++)
echo  "<option>$i</option>";

	
       
        
            
?>
    
</select></td></tr>  <br>
 <tr><td>Fumator</td><td><input type="radio" name='radio'>DA <input type="radio" name='radio1'>NU</td></tr><br>  
 <tr><td>Adresa</td><td><textarea name="textarea"> 
</textarea></td> <br>
<tr><td><input type="submit" name="sub" value="Trimite"></td></tr>    
</table>
</form>