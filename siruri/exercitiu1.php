<?php
if(isset($_POST['sub']))
	
        $red=$_POST['red'];
	$yellow=$_POST['yellow'];
        $green=$_POST['green'];
        $maroon=$_POST['maroon'];
        $blue=$_POST['blue'];
        $orange=$_POST['orange'];
        $red1=$_POST['red1'];
        $yellow1=$_POST['yellow1'];
        $green1=$_POST['green1'];
        $blue1=$_POST['blue1'];
	$color=$_POST['color'];
        
        	   if($color=="red") {
              
				$sel1='selected="selected"';
                                 echo '<body style="background-color:red">';
				}

	 		   elseif($color=="yellow")  {
					
					$sel2='selected="selected"';
                                        echo '<body style="background-color:yellow">';
					}
	 		    
				elseif($color=="green") {
				        echo '<body style="background-color:green">';
					$sel3='selected="selected"';
					}
                                  elseif($color=="maroon") {
				        echo '<body style="background-color:maroon">';
					$sel4='selected="selected"';
					}              
                                    elseif($color=="blue") {
				        echo '<body style="background-color:blue">';
					$sel5='selected="selected"';
					}    
                                     elseif($color=="orange") {
				           echo '<body style="background-color:orange">';
					   $sel6='selected="selected"';
					}
                                       elseif($color=="red1") {
				           echo '<body style="background-color:#B22222">';
					   $sel7='selected="selected"';
					}
                                        elseif($color=="yellow1")  {
	                                     $sel8='selected="selected"';
                                             echo '<body style="background-color:#FFFFE0">';
					}
                                        elseif($color=="green1") {
				           echo '<body style="background-color:#228B22">';
					    $sel9='selected="selected"';
					}
                                          elseif($color=="blue1") {
				             echo '<body style="background-color:#87CEFA">';
					    $sel10='selected="selected"';
					} 
                                        
?>

<html>
<head>

</head>
<body>
<form method="POST">    
<select name="color">
    <option value="red" style="background-color: red;"<?php  echo $sel1; ?>>Red    </option>
    <option value="yellow" style="background-color: yellow;"<?php echo $sel2; ?>>Yellow</option>
    <option value="green" style="background-color: green;"<?php  echo $sel3; ?>>Green</option>
    <option value="maroon" style="background-color: maroon;"<?php  echo $sel4; ?>>Maroon</option>
    <option value="blue" style="background-color: blue;"<?php  echo $sel5; ?>>Blue</option>
    <option value="orange" style="background-color: orange;"<?php  echo $sel6; ?>>Orange</option>
    <option value="red1" style="background-color: #B22222;"<?php  echo $sel7; ?>>Red1    </option>
    <option value="yellow1" style="background-color: #FFFFE0;"<?php echo $sel8; ?>>Yellow1</option>
    <option value="green1" style="background-color: #228B22;"<?php  echo $sel9; ?>>Green1</option>
    <option value="blue1" style="background-color: #87CEFA;"<?php  echo $sel10; ?>>Blue1</option>
</select>
<input type="submit" name="sub" value="Change">
</form>
</body>
</html>