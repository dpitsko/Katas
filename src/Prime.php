<?php

class Prime
{
    public function generate($number)
    {
        $primes = [];
        $factor = 2;
        while ($factor <= $number) {
            while ($number % $factor === 0) {
                $primes[] = $factor;
                $number /= $factor;
            }
            $factor++;
        }
        return $primes;
    }
}
