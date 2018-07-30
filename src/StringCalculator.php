<?php

class StringCalculator
{
    const MAX_NUMBER_ALLOWED = 1000;

    /**
     * Takes a string of numbers deliniated by a , or \n
     * returns a sum of these numbers
     * It does not allow negative numbers (throws exception)
     * It ignores numbers 1000 or larger
     *
     * @param String $numbers
     * @return Integer
     */
    public function add(String $numbers)
    {
        $numbersArray = $this->parseNumbers($numbers);
        $solution     = 0;
        foreach ($numbersArray as $number) {
            $this->guardAgainstInvalidNumber($number);
            if ($number >= self::MAX_NUMBER_ALLOWED) {
                continue;
            }
            $solution += $number;
        }
        return $solution;
    }

    private function guardAgainstInvalidNumber($number)
    {
        if ($number < 0) {
            throw new InvalidArgumentException('Invalid Number Provided: ' . $number);
        }
    }

    private function parseNumbers($numbers)
    {
        return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
    }
}
