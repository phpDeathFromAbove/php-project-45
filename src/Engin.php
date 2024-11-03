<?php

require_once __DIR__ . '../../vendor/autoload.php';


use cli\line;
use cli\prompt;

function checkEven(string $name)
{
    $numb = random_int(1, 40);
    cli\line('Answer "yes" if the number is even, otherwise answer "no".');
    cli\line('Question: ' . $numb);
    $ans = cli\prompt('Your answer ');
    if (($numb % 2 === 0 && $ans === "yes")||($numb % 2 !== 0 && $ans === "no"))
    {
        cli\line('Correct!');
    } else {
        cli\line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, " . $name . "!");
        return 1;
    }

}

function checkCalc(string $name)
{
    $masOp = ['+', '-', '*'];
    $numb1 = random_int(1, 40);
    $numb2 = random_int(1, 40);
    $oper = $masOp[random_int(0, 2)];
    cli\line('What is the result of the expression?');
    cli\line('Question: ' . $numb1 . " " . $oper . " " .$numb2);
    $ans = cli\prompt('Your answer ');
    switch ($oper) {
        case '+':
            if ($ans != $numb1 + $numb2) {
                cli\line("'" . $ans . "' is wrong answer ;(. Correct answer was '" . $numb1 + $numb2 . "'.");
                return 1;
            }
            break;
        case '-':
            if ($ans != $numb1 - $numb2) {
                cli\line("'" . $ans . "' is wrong answer ;(. Correct answer was '" . $numb1 - $numb2 . "'.");
                return 1;
            }
            break;
        case '*':
            if ($ans != $numb1 * $numb2) {
                cli\line("'" . $ans . "' is wrong answer ;(. Correct answer was '" . $numb1 * $numb2 . "'.");
                return 1;
            }
            break;
                
    }

    cli\line('Correct!');
    return 0;

}

function getEngin(string $stepName)
{
    cli\line('Welcome to the Brain Games!');
    $name = cli\prompt('May I have your name?');
    cli\line("Hello, %s!", $name);

    for ($i = 1; $i<=3; $i++)
    {   
        switch ($stepName) {
            case "even":
                $err = checkEven($name);
                if ($err === 1) {
                    return 0;
                }
                break;
            case "calc":
                $err = checkCalc($name);
                if ($err === 1) {
                    return 0;
                }
                break;
        }
    }
    cli\line("Congratulations, " . $name . "!");
    return 0;
}