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
      // создаем стартовое число массива
        $counter = 0; //счетчик заполнения элементов массива
        $stepOfProgression =  rand(1, 5); // шаг между числами
        $counter = $counter + $stepOfProgression; // к счетчику добавляем шаг, получаем стартовое число с которого начнется массив
        $arrOfProgression = []; // массив прогрессии

      //считаем массив
        for ($lenghtOfArrOfProgression = 1; $lenghtOfArrOfProgression <= 10; $lenghtOfArrOfProgression++) { //задаем длину массива, название жесть конечно, зато понятно
            $counter = $counter + $stepOfProgression; //создаем стартовое число массива 
            $arrOfProgression[] = $counter + $stepOfProgression; // заполняем числами массив
        };
      //закончили считать массив

        $result = '';


      //ставим пробел в массиве
        $indexchange = rand(0, 9);  //хаотично выбираем где будет пробел
        $result = $arrOfProgression[$indexchange]; // записываем его как индекс массива + как верный результат
        $arrOfProgression[$indexchange] = '..'; // пробуем сразу ставить 2 точки
        $question = implode(' ', $arrOfProgression);

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
