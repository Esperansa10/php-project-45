<?php

namespace MyApp\Games\Progression;

use MyApp\Games\Engine;

const PROGRESSION_LEGTH = 10;

const MIN_NUNBER = 1;
const MAX_NUNBER = 5;

function run()
{
    Engine\runGames('What number is missing in the progression?', function () {
        return progression();
    });
}

function progression()
{
    $counter = 0;
    $progressionStep =  rand(MIN_NUNBER, MAX_NUNBER); // цифры заменить на контанты minstepprogresstion , maxstepprogression
    $progression = [];

    //считаем массив
    for ($i = 1; $i <= PROGRESSION_LEGTH; $i++) {
        $counter = $counter + $progressionStep;
        // $progression[] = $counter + $progressionStep;
        $progression[] = $counter;
    };
    //закончили считать массив


    //ставим пробел в массиве
    $indexHired = rand(0, PROGRESSION_LEGTH - 1);  //хаотично выбираем где будет пробел
    $result = (string) $progression[$indexHired]; // записываем его как индекс массива + как верный результат
    $progression[$indexHired] = '..'; // пробуем сразу ставить 2 точки
    $questionFromGame = implode(' ', $progression);

    return [$questionFromGame, $result];
}
