<?php

    // Simple Array
    $numbers = [1, 44, 55, 22]; // using brackets
    $fruits = array('apple', 'orange', 'pear'); // using a function

    // print_r($numbers); // note: echo will not print an array use print_r() instead
    // var_dump($numbers); // used often in debugging

    // echo $fruits[1]; // note: arrays are 0 based (starts from 0)

    // Associative Array
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    // echo $colors[4];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    // echo $hex['blue'];

    $person = [
        'first_name' => 'Adi',
        'last_name' => 'West',
        'email' => 'adi@gmail.com'
    ];

    // echo $person['first_name'];
    // Multi-dimensional array
    $people = [
    [
        'first_name' => 'Adi',
        'last_name' => 'West',
        'email' => 'adi@gmail.com'
    ],
    [
        'first_name' => 'Ricky',
        'last_name' => 'West',
        'email' => 'ricky@gmail.com'
    ],
    [
        'first_name' => 'Jordan',
        'last_name' => 'West',
        'email' => 'jordan@gmail.com'
    ],
    ];
    
    echo $people[1]['email'];
    var_dump(json_encode($people));

?>