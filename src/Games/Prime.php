<?php
namespace BrainGames\Prime;

use BrainGames\Engine;
use function cli\line;
use function cli\prompt;

function prime()
{

  line('Welcome to the Brain Games!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);

  line('Answer "yes" if given number is prime. Otherwise answer "no".?');

  for ($i = 1; $i <= 3; $i++) {

    $number = rand(1, 100);
    $flag = primeCheck($number);
    if ($flag == 1)
      $result = 'yes';
    else
      $result = 'no';

    line('Question: ' . $number);
    $answer = prompt('Your answer');


    //сравниваем result и answer   
    if ($answer === $result) {
      Engine\checkAnser($answer, $result,  $name);
    } else return Engine\checkAnser($answer, $result,  $name);
  }
  line("Congratulations, " . $name . "!");
}

function primeCheck($number)
{
  if ($number == 1)
    return 0;
  for ($i = 2; $i <= $number / 2; $i++) {
    if ($number % $i == 0)
      return 0;
  }
  return 1;
}
