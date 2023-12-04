<?php

namespace MyApp\Games\Even;

use MyApp\Games\Engine;

const MIN_NUNBER = 1;
const MAX_NUNBER = 100;


function run()
{
    $desctription = 'Answer "yes" if the number is even, otherwise answer "no".';
    Engine\runGames($desctription, function () {
        return even();
    });
}

function even()
{
    $random = rand(MIN_NUNBER, MAX_NUNBER); //заменить на константы
    $questionFromGame =  $random;

    if ($random % 2 === 0) {
        $result = 'yes';
    } else {
        $result = 'no';
    }
    return [$questionFromGame, $result];
}
