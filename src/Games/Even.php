<?php

namespace BrainGames\Even;

use BrainGames\Cli;
use BrainGames\Engine;
use function cli\greet;
use function cli\line;
use function cli\prompt;
use function Engine\engine; 

 
function even($name)
{
   line('Answer "yes" if the number is even, otherwise answer "no".');
   $random = '';
   $result = ''; 
   $username = $name; 
    for($i = 1; $i <= 3; $i++) {

        line($random = rand(1, 10)); 
        $answer = prompt('Your answer');
        
        if ($random % 2 === 1 && $answer === 'yes') {
            $result = 'no'; 
            $answer = 'yes'; 
            return Engine\checkAnser($answer, $result,  $username);             
        }
        else if ($random % 2 === 0 & $answer === 'no')  {
            $result = 'yes'; 
            $answer = 'no'; 
            return  Engine\checkAnser($answer, $result,  $username);             
           
        }
        else if ($random % 2 === 1 & $answer !== 'no')  {
            $result = 'yes'; 
            $answer = 'no'; 
            return  Engine\checkAnser($answer, $result,  $username);
            
        }
        else if ($random % 2 === 0 & $answer !== 'yes')  {
            $result = 'no';
            $answer = 'yes'; 
            return  Engine\checkAnser($answer, $result,  $username);
           
        }
        else if  ($random % 2 === 0 & $answer === 'yes'){
            $result = 'yes';
            $answer = 'yes'; 
            Engine\checkAnser($answer, $result,  $username);
        }
        else if ($random % 2 === 1 & $answer === 'no'){
            $result = 'no';
            $answer = 'no'; 
            Engine\checkAnser($answer, $result, $username);
        }

           
    }
    return line("Congratulations, " .  $username . "!");
} 

 