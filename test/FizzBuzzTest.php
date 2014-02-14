<?php

/**
 * Description of FizzBuzzTest
 *
 * @author Charles
 */
require_once 'D:/WebApps/tests/rumahdotcom/FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    
    public function testRun() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Fizz 13 14 FizzBuzz 16', $fizzBuzz->run(12, 16));
    }
    
}
