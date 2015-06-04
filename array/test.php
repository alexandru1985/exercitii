<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
     static $x = 0;
     echo $x;
     $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?>  

</body>
</html>

<?php 
$names = array ('Doe', 50);
file_put_contents('example.txt',$names);
file_get_contents('example.txt');

$handle = fopen('example.txt','r+');

while (!feof($handle)) {
    
echo fgets($handle);
}

fclose($handle);

$document = file_get_contents('example.txt');

echo $document;