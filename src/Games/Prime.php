<?php

namespace BrainGames\Prime;

use BrainGames\Cli;
use BrainGames\Engine;
use function cli\greet;
use function cli\line;
use function cli\prompt;
use function Engine\engine; 

 
function prime($name)
{
  $username = $name; 
  line('Answer "yes" if given number is prime. Otherwise answer "no".?');

  for($i = 1; $i<=3; $i++) {  
 
$number = rand(1,100);
$flag = primeCheck($number);
if ($flag == 1)
  $result = 'yes';
else
$result = 'no';

line('Question: '. $number); 
$answer = prompt('Your answer');

     
//сравниваем result и answer   
if ($answer === $result) {
Engine\engine($answer, $result,  $username);      
}
else return Engine\engine($answer, $result,  $username);             
}
line("Congratulations, " . $name . "!");
}

function primeCheck($number){
  if ($number == 1)
  return 0;
  for ($i = 2; $i <= $number/2; $i++){
      if ($number % $i == 0)
          return 0;
  }
  return 1;
}





   
   

