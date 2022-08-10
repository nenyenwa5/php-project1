<?php
//echo 'help1235677890uhgcv';
// echo - output strings, numbers, html, etc
//echo 'i finally made it', 1234, 10.5;

// print - works like echo, but can only take in asingle argument
//print 123;
// print_r() prints single values and arrays
print_r([1,2,3]);

// var_dump() - returns more info like data type and length
var_dump('Hello');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'Post One'; ?></h1>
    <h2><?php echo 'Post One'; ?></h2>
</body>
</html>