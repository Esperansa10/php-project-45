<?php

namespace BrainGames\Progression;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function progression()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What number is missing in the progression?');

    for ($i = 1; $i <= 3; $i++) {
        $b = 0;
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


      //ставим пробел в массиве
        $indexchange = rand(0, 9);  //хаотично выбираем где будет пробел
        $result = $arr[$indexchange]; // записываем его как индекс массива + как верный результат
        $arr[$indexchange] = '..'; // пробуем сразу ставить 2 точки
        $question = implode(' ', $arr);

      //закончили ставить пробел в массиве
        line('Question: ' . $question);
        $answer = prompt('Your answer');
        $answer = intval($answer);

    //сравниваем result и answer
        if ($answer === $result) {
            Engine\checkAnser($answer, $result, $name);
        } else {
            return Engine\checkAnser($answer, $result, $name);
        }
    }
    line("Congratulations, " . $name . "!");
}
