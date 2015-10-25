<?php

//You want to know if a string contains a particular substring. 
//For example, you want to find out if an email address contains a @.
if (strpos($_POST['email'], '@') === false) {
    print 'There was no @ in the e-mail address!';
 }

//********************************************************************************

//Use ucfirst( ) or ucwords( ) to capitalize the first letter of one or more words
//Use ucwords( ) to capitalize the first character of each word in a string 
//Use strtolower( ) or strtoupper( ) to modify the case of entire strings 
//******************************************************************************** 
 
//The trim( ) functions can also remove user-specified characters from strings. Pass the characters you want to remove as a second argument.
//You can indicate a range of characters with two dots between the first and last characters in the range:

// Remove numerals and space from the beginning of the line
print ltrim('10 PRINT A$',' 0..9');
// Remove semicolon from the end of the line
print rtrim('SELECT * FROM turtles;',';');
//******************************************************************************** 
$books = array( array('Elmer Gantry', 'Sinclair Lewis', 1927),
                array('The Scarlatti Inheritance','Robert Ludlum',1971),
                array('The Parsifal Mosaic','William Styron',1979) );

foreach ($books as $book) {
    print pack('A25A15A4', $book[0], $book[1], $book[2]) . "\n";
}

//Elmer Gantry Sinclair Lewis 1927 The Scarlatti InheritanceRobert Ludlum 1971 The Parsifal Mosaic William Styron 1979