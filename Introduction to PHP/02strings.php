<?php

//Boolean
true;  // = 1
false; // = 0

//Integer
1;
2;
3;

//Floating point number
1.5;
2.4;
3.3;

//Array
["Emanuel", "Miriam"];

//Object

//Resource

//NULL

//Callback / Callable

/*--------------------------------------------------------------------------------------------------------------------*/

//Strings
$name = "Emanuel";

//problem with single quotation mark
/*
$message = 'It's a nice day!';
*/
//solution with backslash
$message = 'It\'s a nice day!';
//or
//solution with double quotation mark
$message = "It's a nice day!";

/*--------------------------------------------------------------------------------------------------------------------*/

//problem with double quotation mark
/*
$message = "He said "I love to learn PHP"";
*/
//solution with backslash
$message = "He said \"I love to learn PHP\"";
//or
//solution with single quotation mark
$message = 'He said "I love to learn PHP"';

/*--------------------------------------------------------------------------------------------------------------------*/

$name = "Emanuel";

$message = $name . ' said "He loves PHP"';

//new problem with quotation mark
/*
echo "<a href="#"<Click me></a>";
*/
//solution with backslash
echo "<a href=\"#\">Click me</a>";
//or
//solution with single quotation mark
echo '<a href="#">Click me</a>';