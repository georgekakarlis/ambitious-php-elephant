<?php 

//functions is a block of code that we name it and it can run anywhere
// we cant use a global variable in a function unless its ->   global $x;


function registerUser($email) {
    
    echo $email . ' Registered';
}


//registerUser('George'); // now it runs, not above.

function sum($n1 = 4, $n2 = 5) {
    return $n1 + $n2;
}

 $number = sum(5, 5);
 //echo $number;

 //anonymous function. needs ;

 $subtract = function($n1, $n2) {
     return $n1 = $n2;
 };

 //echo $subtract(10, 5);



 //turn into arrow function
 $multiply = fn($n1, $n2) => $n1 * $n2;

 echo $multiply(9,9);
