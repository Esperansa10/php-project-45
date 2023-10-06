<?php

namespace BrainGames\Gcd;

use BrainGames\Cli;
use BrainGames\Engine;
use function cli\greet;
use function cli\line;
use function cli\prompt;
use function Engine\engine; 

 
function gcd($name)
{

    $username = $name; 
      line('Find the greatest common divisor of given numbers.');
    
    for($i = 1; $i <= 3; $i++) {

    $result = '';
    $arr = ['+','-','*'];
    $operator = $arr[array_rand($arr)];
    $random1 = rand(1,10); 
    $random2 =  rand(1,10); 

    line('Question: '. $random1 . ' ' . $operator . ' ' . $random2); 
    $answer = prompt('Your answer');
    $answer = intval($answer); 
        
        //считаем result 
        if ($operator === '+'){
            $result = $random1+$random2 ; 
        }
        else if  ($operator === '-'){
            $result = $random1-$random2   ; 
            }
        else {
            $result = $random1*$random2  ;
        } 
        // закончили считать result
        
        //сравниваем result и answer   
        if ($answer === $result) {
            Engine\engine($answer, $result,  $username);      
        }
        else return Engine\engine($answer, $result,  $username);             
        
    }
    line("Congratulations, " . $name . "!");
} 

