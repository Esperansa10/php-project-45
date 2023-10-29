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
    return (int) ($a % $b) ? gcd_result($b, $a % $b) : $b;
}

// function gcd_result(int $a, int $b) {
//     return gmp_gcd($a, $b); 
// }


