<?php

/**
 * Description of FizzBuzzTest
 *
 * @author Charles
 */
require_once '../FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    
    public function testRun() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($fizzBuzz->run(12, 16), 'Fizz 13 14 FizzBuzz 16');
    }
    
}
