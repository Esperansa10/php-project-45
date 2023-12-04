<?php

namespace MyApp\Games\Prime;

use MyApp\Games\Engine;

const MIN_NUNBER = 1;
const MAX_NUNBER = 100;

function run()
{
    Engine\runGames('Answer "yes" if given number is prime. Otherwise answer "no".?', function () {
        return prime();
    });
}

function prime()
{
    $number = rand(MIN_NUNBER, MAX_NUNBER);
    $flag = primeCheck($number);
    if ($flag == true) {
        $result = 'yes';
    } else {
        $result = 'no';
    }

    $questionFromGame = $number;
    return [$questionFromGame, $result];
}

function primeCheck(int $number)
{
    if ($number == 1) {
        return true;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
