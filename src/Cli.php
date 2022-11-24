<?php
namespace BrainGames\Cli;

require_once('/home/razum/php-project-45/vendor/autoload.php');


use function cli\line;
use function cli\prompt;


function hello()
{
	line('Welcome to the Brain Game!');
	$name = prompt('May I have your name?');
	line("Hello, %s!", $name);
}
