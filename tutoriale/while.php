<?php

$counter = 1;

while ($counter <= 10){
    
    echo "Text <br />";
    $counter++;
}

//Output
//Text 
//Text 
//Text 
//Text 
//Text 
//Text 
//Text 
//Text 
//Text 
//Text 


$counter = 1;

while ($counter <= 10){
    
    echo $counter."."."Text <br />";
    $counter++;
}
//Output
//1.Text 
//2.Text 
//3.Text 
//4.Text 
//5.Text 
//6.Text 
//7.Text 
//8.Text 
//9.Text 
//10.Text 