<?php

namespace MyApp\Games\Engine;

use function cli\line;
use function cli\prompt;

function greet() {
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function checkAnser(int|string $answer, int|string $result, string $name)
{
    if ($answer === $result) {
        return line("Correct");
    } else {
        return line("'" . $answer . "' is wrong answer ;(. Correct answer was '" . $result . "'.\nLet's try again, " . $name . "!");
    }
}
