<?php $presidents = array(1 => 'Washington', 'Adams', 'Jefferson', 'Madison');


foreach ($presidents as $number => $president) {
    print "$number: $president\n";
}

//1: Washington 2: Adams 3: Jefferson 4: Madison

//**************************************************************************
foreach ($presidents as $number => $president) {
    $number++;
    print "$number: $president\n";
}

//2: Washington 3: Adams 4: Jefferson 5: Madison

//**************************************************************************
$presidents = array(1 => 'Washington', 'Adams', 'Honest' => 'Lincoln', 'Jefferson');


//This is equivalent to:

$presidents[1]         = 'Washington';   // Key is 1
$presidents[]          = 'Adams';        // Key is 1 + 1 => 2
$presidents['Honest']  = 'Lincoln';      // Key is 'Honest'
$presidents[]          = 'Jefferson';    // Key is 2 + 1 => 3


//**************************************************************************
$fruits['red'][] = 'strawberry';
$fruits['red'][] = 'apple';
$fruits['yellow'][] = 'banana';

foreach ($fruits as $color=>$color_fruit) {
    // $color_fruit is an array
    foreach ($color_fruit as $fruit) {
        print "$fruit is colored $color.<br>";
    }
}
//strawberry is colored red.
//apple is colored red.
//banana is colored yellow.

//**************************************************************************

function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
//The first argument to array_map( ) is a function to modify an individual element, and the second is the array to be iterated through.
print_r($b);
//Array ( [0] => 1 [1] => 8 [2] => 27 [3] => 64 [4] => 125 )
//**************************************************************************

//To delete one element, use unset( ):
//
//unset($array[3]);
//**************************************************************************


//Use array_pad( ) to make an array grow:


// start at three
$array = array('apple', 'banana', 'coconut');

// grow to five
$array = array_pad($array, 5, '');

//Now , count($array) is 5, and the last two elements, $array[3] and $array[4], contain the empty string.
//**************************************************************************
$array = array('apple', 'banana', 'coconut');
$array = array_pad($array, 4, 'dates');
print_r($array);
//Array
//(
//    [0] => apple
//    [1] => banana
//    [2] => coconut
//    [3] => dates
//)





//To reduce an array, you can use array_splice( ):

// no assignment to $array
array_splice($array, 2);

//**************************************************************************


//You have an array, and you want to convert it into a nicely formatted string.
//Use join( ):


// make a comma delimited list
$presidents = array(1 => 'Washington', 'Adams', 'Honest' => 'Lincoln', 'Jefferson');
$string = join(',', $presidents);
echo $string;
//Washington,Adams,Lincoln,Jefferson

//**************************************************************************

$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
//**************************************************************************

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}

//**************************************************************************

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;

//**************************************************************************
function test_odd($var)
{
return($var & 1);
}

$a1=array("a","b",2,3,4);
print_r(array_filter($a1,"test_odd"));

//Array ( [3] => 3 )

//array_filter — Filtrează elementele unui tablou utilizând o funcție de apel invers
//**************************************************************************

$array = array('Zero', 'One', 'Two');
$reversed = array_reverse($array);

print_r($reversed); 
//Array ( [0] => Two [1] => One [2] => Zero )
//**************************************************************************

//You want to eliminate duplicates from an array.;

$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
//Array ( [a] => red [b] => green )
//**************************************************************************

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
//Array ( [d] => yellow )
//**************************************************************************
?>

