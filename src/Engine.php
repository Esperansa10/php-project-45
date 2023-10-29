<?php

namespace BrainGames\Engine;

use function cli\line;

function checkAnser(int|string $answer, int|string $result, string $username)
{
    if ($answer === $result) {
        return line("Correct");
    } else {
        return line("'" . $answer . "' is wrong answer ;(. Correct answer was '" . $result . "'.\nLet's try again, " . $username . "!");
    }
}
