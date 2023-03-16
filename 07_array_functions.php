<?php
    $fruits = ['apple', 'orange', 'pear'];

    // Get length
    echo count($fruits);
    
    // Search array
    var_dump(in_array('apple', $fruits));

    // Add to array
    $fruits[] = 'grape';

    array_push($fruits, 'blueberry', 'strawberry');

    print_r($fruits);
?>