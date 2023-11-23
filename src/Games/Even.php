<?php

namespace MyApp\Games\Even;

use MyApp\Games\Engine;

function run()
{
    $desctription = 'Answer "yes" if the number is even, otherwise answer "no".';
    Engine\runGames($desctription, function () {
        return even();
    });
}

function even()
{
    $questionFromGame =  $random = rand(1, 10);
    $random = rand(1, 100);

    if ($random % 2 === 0) {
        $result = 'yes';
    } else {
        $result = 'no';
    }
    return [$questionFromGame, $result];
}
