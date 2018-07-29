<?php

class RomanNumeral
{
    public function generate($number)
    {
        $romanNumberalLookup = [
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1,
        ];
        $romanNumeral = '';
        foreach ($romanNumberalLookup as $roman => $numeric) {
            while ($number >= $numeric) {
                $romanNumeral .= $roman;
                $number -= $numeric;
            }
        }
        return $romanNumeral;
    }
}
