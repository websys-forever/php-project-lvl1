<?php

declare(strict_types=1);

namespace BrainGames\Cli;

use function cli\{out, prompt};

/**
 * Run CLI application
 *
 * @return void
 */
function run(): void
{
    out("Welcome to the Brain Games!\n");
    $name = prompt("May I have your name?");
    out("Hello, {$name}\n");
}
