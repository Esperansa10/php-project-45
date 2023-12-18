<?php

namespace MyApp\Games\Progression;

use MyApp\Engine;

const PROGRESSION_LENGTH = 10;

const MIN_NUMBER = 1;
const MAX_NUMBER = 5;

function run()
{
    Engine\runGames('What number is missing in the progression?', function () {
        return progression();
    });
}

function progression()
{
    $counter = 0;
    $progressionStep =  rand(MIN_NUMBER, MAX_NUMBER);
    $progression = [];

    //считаем массив
    for ($i = 1; $i <= PROGRESSION_LENGTH; $i++) {
        $counter = $counter + $progressionStep;
        // $progression[] = $counter + $progressionStep;
        $progression[] = $counter;
    }
    //закончили считать массив


    //ставим пробел в массиве
    $indexHired = rand(0, PROGRESSION_LENGTH - 1);  //хаотично выбираем где будет пробел
    $result = (string) $progression[$indexHired]; // записываем его как индекс массива + как верный результат
    $progression[$indexHired] = '..'; // пробуем сразу ставить 2 точки
    $questionFromGame = implode(' ', $progression);

    return [$questionFromGame, $result];
}
