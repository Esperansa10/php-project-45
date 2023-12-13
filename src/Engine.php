<?php

namespace MyApp\Games\Engine;

use Closure;
use MyApp\Cli;

use function cli\line;
use function cli\prompt;

const ROUND_COUNT = 3;

function runGames(string $description, Closure $getGameData)
{
    $name = Cli\greet();
    line($description);
    for ($i = 1; $i <= ROUND_COUNT; $i++) {
        $gameData = $getGameData();
        $question = $gameData[0];
        line('Question: ' . $question);
        $result = $gameData[1];
        $answer = prompt('Your answer');

        if ($result === $answer) {
            line("Correct");
        } else {
            return line("'" . $answer . "' is wrong answer ;(. Correct answer was '" . $result . "'.\nLet's try again, " . $name . "!");
        }
    }
    line("Congratulations, " . $name . "!");
}
