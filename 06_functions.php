<?php

    // $y = 12; // declared in global scope

    function registerUser($email) {
        // global $y; // modify to global (can now be used) 
        // echo $y;
        // $x = 10; // declared in the function / local scope

        // echo 'User registered';
        echo $email . ' registerd';
    }

    // echo $x; // global scope (won't work)
    // registerUser('Adi');

    function sum($n1, $n2){ // arguments (optional can set default values)
        return $n1 + $n2;
    }

    $number = sum(5, 5); // paremeters
    // echo $number;

    $subtract = function($n1, $n2) {
        return $n1 - $n2;
    };

    // echo $subtract(10, 5);

    // Arrow Functions
    $multiply = fn($n1, $n2) =>  $n1 * $n2;
    echo $multiply(9, 9);
    



?>