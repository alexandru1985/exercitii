<?php
function add($a, $b) {
    return $a + $b;
}

 $total = add(2, 2);
 echo  $total; 
// Functions help you create organized and reusable code.
// They allow you to abstract out details so your code becomes more flexible and more readable. 
// Without functions, it is impossible to write easily maintainable programs because 
// you're constantly updating identical blocks of code in multiple places and in multiple files.
//***********************************************************************************
function commercial_sponsorship($letter, $number) {
    print "This episode of Sesame Street is brought to you by ";
    print "the letter $letter and number $number.\n";
}

commercial_sponsorship('G', 3);
commercial_sponsorship($another_letter, $another_number);

//This episode of Sesame Street is brought to you by the letter G and number 3.
//This episode of Sesame Street is brought to you by the letter and number .
//***********************************************************************************
function add_one($number) {
    $number++;
}

$number = 1;
add_one($number);
print "$number\n";
//***********************************************************************************
//Setting Default Values for Function Parameters
//Assign the default value to the parameters inside the function prototype:
$string = 'I am some HTML';
function wrap_html_tag($string, $tag = 'b') {
    return "<$tag>$string</$tag>";
}


$text=wrap_html_tag($string);
echo $text;
//I am some HTML
//There are two important things to remember when assigning default values. 
//First, all parameters with default values must appear after parameters without defaults.

function wrap_html_tags(&$string, $tag = 'b') {
    echo $string = "<$tag>$string</$tag>";
}
//***********************************************************************************
//Creating Functions That Take a Variable Number of Arguments

// find the "average" of a group of numbers
function mean($numbers) {
    // initialize to avoid warnings
    $sum = 0;

    // the number of elements in the array
    $size = count($numbers);

    // iterate through the array and add up the numbers
    for ($i = 0; $i < $size; $i++) {
        $sum += $numbers[$i];
    }

    // divide by the amount of numbers
    $average = $sum / $size;

    // return average
    return $average;
}

echo $mean = mean(array(96, 93, 97));
//***********************************************************************************
//Accessing function parameters without using the argument list
// find the "average" of a group of numbers
function mean_without_argument() {
    // initialize to avoid warnings
    $sum = 0;

    // the number of arguments passed to the function
    $size = func_num_args();

    // iterate through the arguments and add up the numbers
    for ($i = 0; $i < $size; $i++) {
        $sum += func_get_arg($i);
    }

    // divide by the amount of numbers
    $average = $sum / $size;

    // return average
    return $average;
}

$mean = mean_without_argument(96, 93, 97);
//***********************************************************************************
//Returning More Than One Value

 
function time_parts($time) {
    return explode(':', $time);
}

print_r(list($hour, $minute, $second) = time_parts('12:34:56'));
//Array ( [0] => 12 [1] => 34 [2] => 56 )
//***********************************************************************************
//You want to indicate failure from a function.

function lookup($name) {
    if (empty($name)) { return false; }

}

if (false !== lookup($name)) { /* act upon lookup */ } else { /* log an error */ }
//***********************************************************************************
//Calling Variable Functions
//You want to call different functions depending on a variable's value.


function get_file($filename) { return file_get_contents($filename); }

$function = 'get_file';
$filename = 'file.xml';

// calls get_file('graphic.png')
echo call_user_func($function, $filename);

//Doe 40 Brown 39