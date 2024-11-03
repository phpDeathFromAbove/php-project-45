#!/usr/bin/env php
<?php

require_once __DIR__ . '../../vendor/autoload.php';


use cli\line;
use cli\prompt;

function name()
{
    cli\line('Welcome to the Brain Game!');
    $name = cli\prompt('May I have your name?');
    cli\line("Hello, %s!", $name);
}