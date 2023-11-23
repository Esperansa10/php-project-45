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
    $random = rand(1, 100);
    $questionFromGame =  $random;


    if ($random % 2 === 0) {
        $result = 'yes';
    } else {
        $result = 'no';
    }
    return [$questionFromGame, $result];
}
