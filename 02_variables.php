<?php

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Adi'; // String
$age = 19; // int
$has_kids = false; // bool
$cash_on_hand = 100.50; // float

// echo $has_kids; // php will not show anything if false and will output 1 if true
// var_dump($has_kids);

// echo $name . ' is ' . $age . ' years old'; // use (.) to concatenate
// echo "$name is $age years old"; // double quotes " " will parse the variables unlike single quotes '
// echo "${name} is ${age} years old"; // works as well recommended (same as javascript literals)

$x = '5' + 5;
// var_dump($x);

/* PHP Operators */
// echo 10 -5;
// echo 5 * 6;
// echo 10 / 2;
// echo 10 % 3;

// Declare a constant in PHP
define('HOST', 'localhost');
define('DB_NAME', 'localhost');

echo HOST;

?>