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
        // line('Question: ' . $random = 6);
        $answer = prompt('Your answer');
        $flag = evenCheck($random);

        if ($flag === 'no' && $answer === 'yes') {
            $result = 'no';

            return Engine\checkAnser($answer, $result, $name);
        } elseif ($flag === 'yes' && $answer !== 'yes') {
            $result = 'yes';

            return Engine\checkAnser($answer, $result, $name);
        } elseif ($flag === 'no' && $answer !== 'no') {
            $result = 'no';

            return Engine\checkAnser($answer, $result, $name);
        } elseif ($flag === 'yes' && $answer === 'yes') {
            $result = 'yes';

            Engine\checkAnser($answer, $result, $name);
        } elseif ($flag === 'no' && $answer === 'no') {
            $result = 'no';

            Engine\checkAnser($answer, $result, $name);
        }
    }
    return line("Congratulations, " .  $name . "!");
}

//cчитаем, четное ли число
// 1 четное
// 0 нечетное
// function evenCheck(int $number)
// {
//     if ($number % 2 === 0) {
//         return 1;
//     } else {
//         return 0;
//     }
// }

function evenCheck(int $number)
{
    if ($number % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
