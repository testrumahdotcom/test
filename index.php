<?php
require_once 'FizzBuzzBazz.php';

$fizzBuzzBazz = new FizzBuzzBazz();
echo "FizzBuzz [4..11] : <br />";
echo $fizzBuzzBazz->run(4, 11);