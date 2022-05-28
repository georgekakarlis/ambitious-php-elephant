<?php 

//these are built-in PHP functions that can be used for basically working with array data
//The array functions allow you to access and manipulate arrays. Simple and multi-dimensional arrays are supported.

$fruits = ['apples', 'orange', 'pear'];

//get length 
/* echo count($fruits);
 */

// search array
/* var_dump(in_array('apple', $fruits)); */

//add to array
$fruits[] ='grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');


//remove from array 
array_pop($fruits); //removes from the end
array_shift($fruits); // removes the start
//unset($fruits[2]); //it also removes the index

// split into 2 chunks
//$chunked_array = array_chunk($fruits, 2);
//print_r($chunked_array);

//print_r($fruits);

// CONCATINATE ARRAYS 
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
//spread operator
$arr4 = [...$arr1];

//print_r($arr4);


//combine array it takes the $a as KEYS and the $b as values 
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'banana', 'apple'];

$c = array_combine($a, $b);

//print_r($c);

$keys = array_keys($c);
//print_r($keys);

//flipped array. what was originally the values are now the keys. it flips them
$flipped = array_flip($c);
//print_r($flipped);

//range function to create an array with a range of numbers
$numbers = range(1,20);
//print_r($numbers);

//similar to JS high order mapping 
$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);

//print_r($newNumbers);

//array filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
//print_r($lessThan10);

//array reduce
//basically the $carry will start at 0 and through iteration it will carry out which number is
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);