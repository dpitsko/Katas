<?php
class FizzBuzz
{
    public function execute($num)
    {
        if ($num % 15 == 0) {
            return 'fizzbuzz';
        }
        if ($num % 3 == 0) {
            return 'fizz';
        }
        if ($num % 5 == 0) {
            return 'buzz';
        }
        return $num;
    }

    public function executeUpTo($num)
    {
        return array_map(
            function ($i) {
                return $this->execute($i);
            },
            range(1, $num)
        );
    }
}
