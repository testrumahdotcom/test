<?php
require_once 'FizzBuzz.php';

$fizzBuzz = new FizzBuzz();
echo "FizzBuzz [12..16] : <br />";
echo $fizzBuzz->run(12, 16);