<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use StringCalculator;
use InvalidArgumentException;

class StringCalculatorTest extends TestCase
{
    public function testTranslateEmptyStringTo0()
    {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(0, $stringCalculator->add(''));
    }

    public function testSum1Number()
    {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(3, $stringCalculator->add('3'));
    }

    public function testSum2Numbers()
    {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(7, $stringCalculator->add('3,4'));
    }

    public function testDisallowsNegativeNumbers()
    {
        $stringCalculator = new StringCalculator();
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid Number Provided: -2');
        $stringCalculator->add('3,4,-2');
    }

    public function testIgnoreNumbers1000OrGreater()
    {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(7, $stringCalculator->add('3,4,1000'));
    }

    public function testItAllowsNewLineDelimeter()
    {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(17, $stringCalculator->add('3,4\n10'));
    }
}
