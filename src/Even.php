<?php

require_once __DIR__ . '../../vendor/autoload.php';


use cli\line;
use cli\prompt;



function checkEven()
{
    cli\line('Welcome to the Brain Game!');
    $name = cli\prompt('May I have your name?');
    cli\line("Hello, %s!", $name);
    cli\line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 1; $i<=3; $i++)
    {   
        $numb = random_int(1,40);
        cli\line('Question: ' . $numb);
        $ans = cli\prompt('Your answer ');
        if (($numb % 2 === 0 && $ans === "yes")||($numb % 2 !== 0 && $ans === "no"))
        {
            cli\line('Correct!');
        } else {
            cli\line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, " . $name . "!");
            return 0;
        }
    }
    cli\line("Congratulations, " . $name . "!");
    return 0;
}

