<?php
//!= not equal to
// !== not identical to

// if statements
 
//$t = date('F'); // month 
//$m =  date('j');// day of the month
$y = date('H'); // hour of the day
//echo $m;
//echo $t;
//echo $y;
if($y<12){
    echo 'Good morning';

}elseif($y<17){
    echo 'Good afternoon';
}else {
    echo 'Good evening';
}


$posts = ['first post'];
if (!empty($posts)){
    echo $posts[0];
}else {
    echo 'no posts';
}
//ternary operator
echo !empty($posts) ? $posts[0] : 'no posts';// it must have else
//$firstPost = $posts[0] ?? null;  
//echo $firstPost;



?>