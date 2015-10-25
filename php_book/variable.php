<?php
//The function isset( ) returns true when passed a variable that's set.
//Set variables may be empty or nonempty.
//Empty variables have values that evaluate to false as a boolean: the integer 0, the double 0.0, the empty string,
//the string "0", the boolean false, an array with no elements, an object with no properties (in versions of PHP prior to PHP 5) and NULL. 
//    Everything else is nonempty. This includes the string "00", and the string " ", containing just a space character.
if (empty($first_name)) { }
//******************************************************************************************
 
//Use isset( ) to assign a default to a variable that may already have a value:

if (! isset($cars)) { $cars = $default_cars; }

//Use the ternary (a ? b : c) operator to give a new variable a (possibly default) value:

$cars = isset($_REQUEST['cars']) ? $_REQUEST['cars'] : $default_cars;

//Because the variables are set in the global namespace, the previous code doesn't work for setting function-private defaults.
//    To do that, use variable variables:

//foreach ($defaults as $k => $v) {
//    if (! isset($$k)) { $$k = $v; }
//}
//******************************************************************************************
$animal = 'turtles';
$turtles = 103;
print $$animal;

//103
//******************************************************************************************
$pantry = array('food' => '2 lbs.','butter' => '3 sticks');
$fp = fopen('c:Web/joaca/php_book/test.txt','w') or die ("Can't open pantry");
fputs($fp,serialize($pantry));
fclose($fp);
//a:2:{s:4:"food";s:6:"2 lbs.";s:6:"butter";s:8:"3 sticks";}
//******************************************************************************************

//Use print_r( ) or var_dump( ):

$array = array("name" => "frank", 12, array(3, 4));

print_r($array);
//Array
//(
//    [name] => frank
//    [0] => 12
//    [1] => Array
//        (
//            [0] => 3
//            [1] => 4
//        )
//)
var_dump($array);
//array(3) {
//  ["name"]=>
//  string(5) "frank"
//  [0]=>
//  int(12)
//  [1]=>
//  array(2) {
//    [0]=>
//    int(3)
//    [1]=>
//    int(4)
//  }
//}
//******************************************************************************************


