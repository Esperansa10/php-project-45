<?php

namespace BrainGames\Even;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function calc()
{

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('What is the result of the expression?');

    for ($i = 1; $i <= 3; $i++) {
        $result = '';
        $arrOperators = ['+', '-', '*'];
        $operator = $arrOperators[array_rand($arrOperators)];
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
