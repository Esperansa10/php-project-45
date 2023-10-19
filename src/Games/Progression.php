<?php

namespace BrainGames\Progression;

use BrainGames\Cli;
use BrainGames\Engine;
use function cli\greet;
use function cli\line;
use function cli\prompt;
use function Engine\engine;


function progression()
{
  line('Welcome to the Brain Games!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
  line('What number is missing in the progression?');
  $b = 0;
  for ($i = 1; $i <= 3; $i++) {

    $operator =  rand(1, 5);
    $a = rand(1, 14);
    $b = $b + $operator;
    $arr = [];

    //считаем массив   
    for ($p = 1; $p <= 10; $p++) {
      $b = $b + $operator;
      $arr[] = $b + $operator;
    };
    //закончили считать массив

    $result = '';
    $basket = '';

    //ставим пробел в массиве
    $indexchange = rand(1, 10); //было rand(0,9); 
    $result = $arr[$indexchange];
    $hide[$indexchange] = '..';
    $basket = array_replace($arr, $hide);
    // var_dump($basket); 
    $question = implode(' ', $basket);
    $hide[$indexchange] = '';

    //закончили ставить пробел в массиве
    line('Question: ' . $question);
    $answer = prompt('Your answer');
    $answer = intval($answer);

    //сравниваем result и answer   
    if ($answer === $result) {
      Engine\checkAnser($answer, $result,  $name);
    } else return Engine\checkAnser($answer, $result,  $name);
  }
  line("Congratulations, " . $name . "!");
}
