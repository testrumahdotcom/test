<?php

/**
 * Description of FizzBuzz
 *
 * @author Charles
 */
class FizzBuzzBazz {

    /**
     * 
     * @param int $int divisor
     * @param int $value dividend
     * @return int remainder of $value divided by $int
     */
    private function modulus($int, $value) {
        return $value % $int;
    }

    /**
     * 
     * @param int $start
     * @param int $end
     * @return string Output
     */
    public function run($start, $end) {
        if (!is_int($start)) {
            die('Expects parameter 1 to be positive integer, ' . gettype($start) . ' given');
        }
        if (!is_int($end)) {
            die('Expects parameter 2 to be positive integer, ' . gettype($end) . ' given');
        }

        $output = '';
        // by default, set fizz/buzz called flag to false
        $fizzCalled = false;
        $buzzCalled = false;
        // loop from $start range till the $end
        for ($i = $start; $i <= $end; ++$i) {
            $mod3 = $this->modulus(3, $i);
            $mod5 = $this->modulus(5, $i);
            // check whether the number is a multiple of 3 or 5
            if (!$mod3 || !$mod5) {
                // now, check whether the number is a multiple of 3 and 5
                if (!$mod3 && !$mod5) {
                    $output .= "FizzBuzz ";
                } else {
                    if (!$mod3) {
                        $output .= "Fizz ";
                        // set fizz flag to true
                        $fizzCalled = true;
                    }
                    if (!$mod5) {
                        $output .= "Buzz ";
                        // set buzz flag to true
                        $buzzCalled = true;
                    }
                }
            } else {
                // if fizz/buzz flag is true, display "Bazz"
                if ($fizzCalled && $buzzCalled) {
                    $output .= "Bazz ";
                } else {
                    // otherwise, display the integer itself
                    $output .= "$i ";
                }
                $fizzCalled = false;
                $buzzCalled = false;
            }
        }
        // strip whitespace at the end of string when return
        return trim($output);
    }

}
