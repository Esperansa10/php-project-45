<?php

namespace MyApp\Games\Gcd;

use MyApp\Games\Engine;

function run()
{
    Engine\runGames('Find the greatest common divisor of given numbers.', function () {
        return gcd();
    });
}

function gcd()
{
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    $questionFromGame = $firstNumber . ' ' . $secondNumber;

    $result = (string) gcd_result($firstNumber, $secondNumber);
    return [$questionFromGame, $result];
}

function gcd_result(int $firstNumber, int $secondNumber)
{
    $result = 1;
    while ($firstNumber % $secondNumber > 0) {
        $result = $firstNumber % $secondNumber;
        $firstNumber = $secondNumber;
        $secondNumber = $result;
    }
    return $result;
}
