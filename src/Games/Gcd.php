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
    $result = $firstNumber;

    if ($firstNumber > $secondNumber) {
        $result = $secondNumber;
    };

    while ($result > 1) {
        if ($firstNumber % $result === 0 && $secondNumber % $result === 0) {
            return $result;
        }
        $result--;
    }
    return $result;
}
