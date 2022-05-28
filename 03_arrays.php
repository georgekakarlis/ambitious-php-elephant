<?php
// simple array 
$numbers = [1,33,44,55];
$fruits = array('apple', 'orange');

//var_dump($numbers);

//echo $fruits[1]; //prints orange. because always starts from 0

// associative array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

//echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

//echo $hex['blue'];

$person = [
    'first_name' => 'Geοrge',
    'last_name' => 'george1',
    'email' => 'george@gmail.com'
];

//echo $person['first_name'];

$people = [
    ['first_name' => 'nick',
    'last_name' => 'nick1',
    'email' => 'nick@gmail.com'
],
[
    'first_name' => 'jason',
    'last_name' => 'jason1',
    'email' => 'jason@gmail.com'
]
];

//echo $people[1]['email'];

var_dump(json_encode($people));