<?php

namespace MyApp\Games\Even;

use MyApp\Engine;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;


function run()
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    Engine\runGames($description, function () {
        return even();
    });
}

function even()
{
    $random = rand(MIN_NUMBER, MAX_NUMBER);
    $questionFromGame =  $random;

    if ($random % 2 === 0) {
        $result = 'yes';
    } else {
        $result = 'no';
    }
    return [$questionFromGame, $result];
}
