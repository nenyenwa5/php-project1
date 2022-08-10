
<?php
// simple array
$numbers = [1, 2, 23, 5];
$fruits = array('apple', 'orange');

//var_dump($numbers);
//echo $fruits[1];
$colors = [
4 => 'blue',
5 => 'green'
];
 //echo $colors[4];

 $hex = [
'red' => '#f00',
'blue' =>'#0f0',
'green' => '#00f'
 ];
 //echo $hex['green'];

 $person = [
     'first_name' => 'nenny',
     'last_name' => 'ezigbo'
 ];
//echo $person['first_name'];

$people = [
    [
    'first_name' => 'nems',
     'last_name' => 'ezidibo'
],

[
    'first_name' => 'nena',
     'last_name' => 'asazigbo'
],
[
    'first_name' => 'nenkwe',
     'last_name' => 'eze'
]
];

//echo $people[1]['last_name'];

var_dump(json_encode($people));

?>

