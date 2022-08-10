<?php
$fruits = ['apple', 'orange', 'tomato'];
// get length
//echo count($fruits);

//search array
var_dump(in_array('tomato', $fruits));
// add to array
$fruits[] = 'grape';
//print_r($fruits); //or

array_push($fruits, 'tomtom', 'milk');
array_unshift($fruits, 'lemon');
//print_r($fruits);
// remove from the end

//array_pop($fruits);
//remove from beginning
//array_shift($fruits);
//print_r($fruits);

// to remove a specific element
//unset($fruits[2]);
//print_r($fruits);

// to split into 2 chunks
$chunked_array = array_chunk($fruits, 2);
//print_r($chunked_array);

// merging arrays
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2); // or
$arr4 = [...$arr1, ...$arr2];
//print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'beans'];

$c = array_combine($a, $b);
//print_r($c);

$numbers = range(1,20);
//print_r($numbers);
$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);
//print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number)=>
$number<=10);
//print_r($lessThan10);

//reduce
$sum = array_reduce($numbers, fn($carry, $number) =>
$carry + $number);

var_dump($sum);
 
