<?php
//function sum($n1, $n2){
  //  return $n1 + $n2;
//}
//echo sum(3, 9);

$subract = function($n1, $n2){
    return $n1 - $n2;
};
//echo $subract(11, 2);
$multiply = fn($n1, $n2) => $n1 * $n2;
echo  $multiply(9,2);