<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if ($age >= 18) {
//     echo 'You are old enough to vote';
// } 
// else {
//     echo 'Sorry, you are not old enough';
// }

// Dates
// $today = date("F j, Y, g:i a");

$t = date("H");

// if ($t < 12){
//     echo 'Good Morning!';
// }
// elseif ($t < 17){
//     echo 'Good Afternoon';
// }
// else {
//     echo 'Good Evening';
// }

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = ['First Post'];

// if(!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL

// echo !empty($posts) ? $posts[0] : 'No Posts';
// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = $posts[0] ?? null;
// echo $firstPost;

$favcolor = 'red';

switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, green, or blue';
}


?>