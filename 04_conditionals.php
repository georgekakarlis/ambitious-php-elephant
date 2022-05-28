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

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 17;

/* if($age >= 18) {
    echo 'Your old enough to vote';
} else {
    echo 'sorry you are not old enough to vote';
} */


$t = date("H");

/* if($t < 12) {
    echo 'Good Morning';
}elseif($t < 17){ 
    echo 'Good Afternoon';
}else {
    echo 'Good Evening';
} */

$posts = ['First post'];

/* if(!empty($posts)) {
  echo $posts[0];
} else {
    echo 'no Posts';
} */







/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

//echo !empty($posts) ? $posts[0] : 'No Posts'; //JS in PHP :))

/* $firstPost = !empty($posts) ? $posts[0] : 'No Posts'; // IT DOES NOT WORK WITHOUT THE : ELSE , only with null after the :
$firstPost = $posts[0] ?? null; //works like that :)

echo $firstPost;
 */






/* -------- Switch Statements ------- */

$favcolor = 'red';

switch($favcolor) {
    case 'red':
        echo 'Your fav color is red';
        break;
        case 'blue';
        echo 'your fav color is blue';
        break;
        case 'green';
        echo 'your fav color is green';
        default;
        echo 'you fav color is not green,red,blue';
}