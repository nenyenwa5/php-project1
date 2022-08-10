<?php
//$string = "i am a web developer";
//$strings = explode(" ", $string);

//for($i = 0; i <= $string.length; i++){
  //  if($strings[$i . count] > $l_word){
    //    $l_word = $strings[i];
    //}
//}
//$l_word = 0;
//echo $strings[i];

//function findLargestWord($sentence){
  //  $largestWord = " ";
    //$singleWord = explode(" ", $sentence);

    //foreach($singleWord as $word){
      //  if (strlen($word)>
        //strlen($largestWord)){
          //  $largestWord = $word;
        //}
    //}
    //return $largestWord;
//}
//echo findLargestWord('my name is chinenye');

function ogologoOkwu($ahiriOkwu){
    $okwuTokariri = " ";
    $otuOkwu = explode(" ", $ahiriOkwu);

    foreach($otuOkwu as $okwu){
        while(strlen($okwu)>strlen($okwuTokariri)){
            $okwuTokariri = $okwu;
        }
    }
    return $okwuTokariri;
}
echo ogologoOkwu('Inwale ma o ga adaba');