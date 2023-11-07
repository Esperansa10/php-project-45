<?php

namespace MyApp\Games\Calc;

use MyApp\Games\Engine;

use function cli\line;
use function cli\prompt;

function calc($name)
{
    line('What is the result of the expression?');
    $round = 3;
    for ($i = 1; $i <= $round; $i++) {
        $result = '';
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];
        $random1 = rand(1, 10);
        $random2 =  rand(1, 10);

        line('Question: ' . $random1 . ' ' . $operator . ' ' . $random2);
        $answer = prompt('Your answer');
        $answer = intval($answer);

        //считаем result
        if ($operator === '+') {
            $result = $random1 + $random2;
        } elseif ($operator === '-') {
            $result = $random1 - $random2;
        } else {
            $result = $random1 * $random2;
        }
        // закончили считать result

        //сравниваем result и answer
        if ($answer === $result) {
            Engine\checkAnser($answer, $result, $name);
        } else {
            return Engine\checkAnser($answer, $result, $name);
        }
    }
    line("Congratulations, " . $name . "!");
}
