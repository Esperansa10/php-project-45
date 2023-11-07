<?php

namespace MyApp\Games\Prime;

use MyApp\Games\Engine;

use function cli\line;
use function cli\prompt;

function prime()
{

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if given number is prime. Otherwise answer "no".?');

    $round = 3;
    for ($i = 1; $i <= $round; $i++) {
        $number = rand(1, 100);
        $flag = primeCheck($number);
        if ($flag == true) {
            $result = 'yes';
        } else {
            $result = 'no';
        }

        line('Question: ' . $number);
        $answer = prompt('Your answer');


      //сравниваем result и answer
        if ($answer === $result) {
            Engine\checkAnser($answer, $result, $name);
        } else {
            return Engine\checkAnser($answer, $result, $name);
        }
    }
    line("Congratulations, " . $name . "!");
}

function primeCheck(int $number)
{
    if ($number == 1) {
        return true;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
