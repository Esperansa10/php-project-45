<?php

namespace MyApp\Games\Engine;

use function cli\line;
use function cli\prompt;

const ROUND_COUNT = 3;

function greet()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function runGames($desctiption, $foo)
{
    $name = greet();
    line($desctiption);
    for ($i = 1; $i <= ROUND_COUNT; $i++) {
        $arr = $foo();
        $question = $arr[0];
        line('Question: ' . $question); //calc
        $result = $arr[1]; // тут правильный ответ
        $answer = prompt('Your answer');

        if ($result === $answer) {
            line("Correct");
        } else {
            return line("'" . $answer . "' is wrong answer ;(. Correct answer was '" . $result . "'.\nLet's try again, " . $name . "!");
        }
    }
    line("Congratulations, " . $name . "!");
}
