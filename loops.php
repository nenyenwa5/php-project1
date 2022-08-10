<?php
// for
//for($x = 0; $x <= 10; $x++){
    //echo $x;
    //echo 'Number ' . $x . '<br>';
//};

//while loop
$x= 1;
while($x <= 15) {
    //echo 'Number ' . $x. '<br>';
    //$x++; // or
    $x = $x + 1; 
}
$poste = ['First Post', 'second post', 'third post'];
//for($x = 0; $x < count($poste); $x++){
    //echo $poste[$x] . '<br>';
//} // or

//foreach($poste as $post) {
    //echo $post;
//}

//foreach($poste as $index => $post) {
    //echo $index . '-' . $post . '<br>';
//}

$person = [
    'first_name' => 'nenny',
    'last_name' => 'ezigbo'
];
foreach($person as $key => $value){
    echo "$key - $value<br>";
}

?>