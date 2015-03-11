

<?php
if(isset($_POST['sub']))
  $selectOption = $_POST['zi']; 
  $selectOption1 = $_POST['luna']; 
  $selectOption2 = $_POST['an']; 
  echo ($_POST['zi'])."/".($_POST['luna'])."/".($_POST['an']) ;


?> 




<form method="POST">
<select name="zi">
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
    
</select>

<input type="submit" name="sub" value="Change"> 
</form>