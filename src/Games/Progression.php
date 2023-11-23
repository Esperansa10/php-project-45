<?php

namespace MyApp\Games\Progression;

use MyApp\Games\Engine;

function run()
{
    Engine\runGames('What number is missing in the progression?', function () {
        return progression();
    });
}

function progression()
{
    // создаем стартовое число массива
    $counter = 0; //счетчик заполнения элементов массива
    $stepOfProgression =  rand(1, 5); // шаг между числами
    $counter = $counter + $stepOfProgression; // к счетчику добавляем шаг, получаем стартовое число с которого начнется массив
    $arrOfProgression = []; // массив прогрессии

    //считаем массив
    for ($lenghtOfArrOfProgression = 1; $lenghtOfArrOfProgression <= 10; $lenghtOfArrOfProgression++) { //задаем длину массива
        $counter = $counter + $stepOfProgression; //создаем стартовое число массива
        $arrOfProgression[] = $counter + $stepOfProgression; // заполняем числами массив
    };
    //закончили считать массив


    //ставим пробел в массиве
    $indexchange = rand(0, 9);  //хаотично выбираем где будет пробел
    $result = (string) $arrOfProgression[$indexchange]; // записываем его как индекс массива + как верный результат
    $arrOfProgression[$indexchange] = '..'; // пробуем сразу ставить 2 точки
    $question = implode(' ', $arrOfProgression);

    //закончили ставить пробел в массиве
    $questionFromGame = $question;
    return [$questionFromGame, $result];
}
