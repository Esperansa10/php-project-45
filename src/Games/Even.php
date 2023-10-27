<?php

namespace BrainGames\Even;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function even()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');

    $random = '';


    for ($i = 1; $i <= 3; $i++) {
        line('Question: ' . $random = rand(1, 10));
        $answer = prompt('Your answer');
        $result = primeCheck($random);

        if ($result === 0 && $answer === 'yes') {
            $result = 'no';
            $answer = 'yes';
             Engine\checkAnser($answer, $result, $name);
        } elseif ($result === 1 && $answer === 'no') {
            $result = 'yes';
            $answer = 'no';
              Engine\checkAnser($answer, $result, $name);

        } elseif ($result === 0 && $answer !== 'no') {
            $result = 'no';
            $answer = 'yes';
              Engine\checkAnser($answer, $result, $name);

        } elseif ($result === 1 && $answer !== 'yes') {
            $result = 'yes';
            $answer = 'no';
              Engine\checkAnser($answer, $result, $name);

        } elseif ($result === 1 && $answer === 'yes') {
            $result = 'yes';
            $answer = 'yes';
            Engine\checkAnser($answer, $result, $name);

        } elseif ($result === 0 && $answer === 'no') {
            $result = 'no';
            $answer = 'no';
            Engine\checkAnser($answer, $result, $name);

        }
    }
    return line("Congratulations, " .  $name . "!");
}

//cчитаем, простое ли число
// 1 простое число
// 0 непростое число
function primeCheck(int $number)
{
    if ($number == 1) {
        return 0;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return 0;
        }
    }
    return 1;
}
