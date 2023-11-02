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

        // $a = 23;
        // $b = 1;

        line('Question: ' . $a . ' ' . $b);
        $answer = prompt('Your answer');
        $answer = (int) $answer;

        //считаем result
        $result = (int) gcd_result($a, $b);

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

function gcd_result(int $a, int $b)
{
    $result = 1;
    while ($a % $b > 0) {
        $result = $a % $b;
        $a = $b;
        $b = $result;
    }
    return $result;
}
