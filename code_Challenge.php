<?php
function odd($num){
    if($num % 2 == 0){
        echo $num . ' is even';
    }else{
        echo $num . 'is odd';
    };

}
echo odd(4);