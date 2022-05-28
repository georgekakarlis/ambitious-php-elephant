<?php 
  //echo - output strings, numbers etc
  //echo 'Hello123', 123, 10.5;

 // this is a comment

 //this is multi line comment 

/* echo 1;
   echo 2;
*/

// print - works like echo, but can only take in a sigle argument
//print 123;

//print_r() - Print single values and arrays (is a function) and is used a lot to print out arrays
//print_r([1,2,3]);


//var_dumb() - returns more info like data type and length
//var_dump(true);


//var_export() - simiral to var_dumb(). outputs a string representation of a variable.
//var_export('Hello')
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
    <h1><?= 'Post one' ?></h1>
</body>
</html>