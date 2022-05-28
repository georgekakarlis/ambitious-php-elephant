<?php
// loops are used to execute a piece of code while a specific condition is met.


/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize(variable); condition; increment) {
  // code to be executed
  }
*/

//below it starts at zero, the condition is to be less or equal with 10 and then stop at ten because the condition is no longer met.
/* for($x = 0; $x <= 10; $x++) {
    echo 'Number ' . $x . '<br>';
} */


/* ------------ While Loop ------------ */

/*
** While Loop Syntax   as soon as the condition is met then the code is executed.
  while (condition) {
  // code to be executed
  }
*/
/* $x = 1;

while($x <= 15) {
    echo 'Number ' . $x . '<br>';
    $x++;
} */



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/
/* $x = 6;

do {
    echo 'Number ' . $x . '<br>';
    $x++;
} while($x <=5); */


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First post', 'Second post', 'Third Post'];

/* for($x = 0; $x < count($posts); $x++) {
    echo $posts[$x];
} */

/* foreach($posts as $post) {
    echo $post;
} */

/* foreach($posts as $index => $post) {
    echo $index . ' - ' . $post . '<br>';
} */

//associative array 

/* $person = [
    'first_name' => 'Geοrge',
    'last_name' => 'george1',
    'email' => 'george@gmail.com'
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
} */