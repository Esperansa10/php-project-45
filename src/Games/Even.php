<?php

namespace BrainGames\Even;

use BrainGames\Engine;
use function cli\line;
use function cli\prompt;
 
function even()
{


    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    
   line('Answer "yes" if the number is even, otherwise answer "no".');
   $random = '';
   $result = ''; 
 
    for($i = 1; $i <= 3; $i++) {

        line('Question: ' . $random = rand(1, 10)); 
        $answer = prompt('Your answer');
        
        if ($random % 2 === 1 && $answer === 'yes') {
            $result = 'no'; 
            $answer = 'yes'; 
            return Engine\checkAnser($answer, $result,  $name);             
        }
        else if ($random % 2 === 0 & $answer === 'no')  {
            $result = 'yes'; 
            $answer = 'no'; 
            return  Engine\checkAnser($answer, $result,  $name);             
           
        }
        else if ($random % 2 === 1 & $answer !== 'no')  {
            $result = 'yes'; 
            $answer = 'no'; 
            return  Engine\checkAnser($answer, $result,  $name);
            
        }
        else if ($random % 2 === 0 & $answer !== 'yes')  {
            $result = 'no';
            $answer = 'yes'; 
            return  Engine\checkAnser($answer, $result,  $name);
           
        }
        else if  ($random % 2 === 0 & $answer === 'yes'){
            $result = 'yes';
            $answer = 'yes'; 
            Engine\checkAnser($answer, $result,  $name);
        }
        else if ($random % 2 === 1 & $answer === 'no'){
            $result = 'no';
            $answer = 'no'; 
            Engine\checkAnser($answer, $result, $name);
        }

           
    }
    return line("Congratulations, " .  $name . "!");
} 

 