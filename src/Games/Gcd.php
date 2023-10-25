<?php

namespace BrainGames\Gcd;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function gcd()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Find the greatest common divisor of given numbers.');

    for ($i = 1; $i <= 3; $i++) {
        $result = '';
        $a = rand(1, 100);
        $b = rand(1, 100);

        line('Question: ' . $a . ' ' . $b);
        $answer = prompt('Your answer');
        $answer = intval($answer);

        //считаем result
        $result = gcd_result($a, $b);

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

function gcd_result($a, $b)
{
    return ($a % $b) ? gcd_result($b, $a % $b) : $b;
}
