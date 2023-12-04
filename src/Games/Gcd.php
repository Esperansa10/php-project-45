<?php

namespace MyApp\Games\Gcd;

use MyApp\Games\Engine;

const MIN_NUNBER = 1;
const MAX_NUNBER = 100;

function run()
{
    Engine\runGames('Find the greatest common divisor of given numbers.', function () {
        return gcd();
    });
}

function gcd()
{
    $firstNumber = rand(MIN_NUNBER, MAX_NUNBER);
    $secondNumber = rand(MIN_NUNBER, MAX_NUNBER);

    $questionFromGame = $firstNumber . ' ' . $secondNumber;

    $result = (string) gcdResult($firstNumber, $secondNumber);
    return [$questionFromGame, $result];
}

function gcdResult(int $firstNumber, int $secondNumber)
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
