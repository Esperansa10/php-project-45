<?php

namespace BrainGames\Progression;

use BrainGames\Cli;
use BrainGames\Engine;
use function cli\greet;
use function cli\line;
use function cli\prompt;
use function Engine\engine; 

 
function progression($name)
{
  $username = $name; 
  line('What is the result of the expression?');
  $b = 0; 
    for($i = 1; $i<=3; $i++) {

    $operator =  rand(1,5);
    $a = rand(1,14); 
    $b = $b + $operator;
    $arr = [];

    //считаем массив   
    for($p = 1; $p<=10; $p++) {
      $b = $b + $operator;
        $arr[]= $b + $operator;
    }; 
    //закончили считать массив

    $result = '';
    $basket = ''; 

    //ставим пробел в массиве
    $indexchange = rand(0,9); 
    $result = $arr[$indexchange]; 
    $hide[$indexchange] = '..'; 
    $basket = array_replace($arr, $hide);
    // var_dump($basket); 
    $question = implode(' ', $basket); 
    $hide[$indexchange] = ''; 

//закончили ставить пробел в массиве
line('Question: '. $question); 
$answer = prompt('Your answer');
$answer = intval($answer); 
      
//сравниваем result и answer   
if ($answer === $result) {
Engine\engine($answer, $result,  $username);      
}
else return Engine\engine($answer, $result,  $username);             
}
line("Congratulations, " . $name . "!");
} 



   
   

