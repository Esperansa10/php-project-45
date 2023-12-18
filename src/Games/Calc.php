<?php

namespace MyApp\Games\Calc;

use MyApp\Engine;

const MIN_NUMBER = 1;
const MAX_NUMBER = 10;

function calc()
{
    $operators = ['+', '-', '*'];
    $operator = $operators[array_rand($operators)];
    $firstNumber = rand(MIN_NUMBER, MAX_NUMBER);
    $secondNumber = rand(MIN_NUMBER, MAX_NUMBER);

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
    $description = 'What is the result of the expression?';
    Engine\runGames($description, function () {
        return calc();
    });
}
