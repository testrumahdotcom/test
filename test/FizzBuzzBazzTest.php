<?php

/**
 * Description of FizzBuzzBazzTest
 *
 * @author Charles
 */
require_once '../FizzBuzzBazz.php';

class FizzBuzzBazzTest extends PHPUnit_Framework_TestCase {

    public function testRun() {
        $fizzBuzzBazz = new FizzBuzzBazz();
        $this->assertEquals('4 Buzz Fizz Bazz 8 Fizz Buzz Bazz', $fizzBuzzBazz->run(4, 11));
    }

}
