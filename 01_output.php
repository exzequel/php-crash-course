<?php

    //echo 'this is a comment';

    /*
    this is a
    multiline comment
    */

    // echo - output strings, numbers, html, etc (takes in multiple arguments)
    // echo 123, 'Hello', 10.5;

    // print - similar to echo, can only take a single argument (echo is always better)
    // print 123;

    //print_r() - print single values and arrays
    // print_r([1,2,3]); // used for arrays, echo can't understand array

    // var_dump() - returns more info like data type and length
    // var_dump('Hello'); // shows value and data type

    // var_export() - like var_dump(), outputs string representation of variable
    // var_export('Hello');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'Post One'; //short-hand declaration?></h1> 
</body>
</html>