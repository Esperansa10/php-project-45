<?php

namespace MyApp\Games\Calc;

use MyApp\Games\Engine;

const MIN_NUNBER = 1;
const MAX_NUNBER = 10;

function calc()
{
    $operators = ['+', '-', '*'];
    $operator = $operators[array_rand($operators)];
    $firstNumber = rand(MIN_NUNBER, MAX_NUNBER);
    $secondNumber = rand(MIN_NUNBER, MAX_NUNBER);

    $questionFromGame =  $firstNumber . ' ' . $operator . ' ' . $secondNumber;

    switch ($operator) {
        case '+':
            $result = $firstNumber + $secondNumber;
            break;
        case '-':
            $result = $firstNumber - $secondNumber;
            break;
        case '*':
            $result = $firstNumber * $secondNumber;
            break;
        default:
            exit('оператор сломан');
    }
    $result = (string)$result;
    // закончили считать result
    return [$questionFromGame, $result];
}

function run()
{
    $desctiption = 'What is the result of the expression?';
    Engine\runGames($desctiption, function () {
        return calc();
    });
}
