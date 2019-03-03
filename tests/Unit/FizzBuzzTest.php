<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function itReturns1()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals(1, $fizzBuzz->execute(1));
    }

    /**
     * @test
     */
    public function itReturns2()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals(2, $fizzBuzz->execute(2));
    }

    /**
     * @test
     */
    public function itReturnsFizz()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals('fizz', $fizzBuzz->execute(3));
    }

    /**
     * @test
     */
    public function itReturns4()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals(4, $fizzBuzz->execute(4));
    }

    /**
     * @test
     */
    public function itReturnBuzz()
    {
        $fizzBuzz = new FizzBuzz;
        $this->assertEquals('buzz', $fizzBuzz->execute(5));
        $this->assertEquals('buzz', $fizzBuzz->execute(10));
    }

    /**
     * @test
     */
    public function itReturns6()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals('fizz', $fizzBuzz->execute(6));
    }

    /**
     * @test
     */
    public function itReturns7()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals(7, $fizzBuzz->execute(7));
    }

    /**
     * @test
     */
    public function itReturns8()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals(8, $fizzBuzz->execute(8));
    }

    /**
     * @test
     */
    public function itReturns9()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals('fizz', $fizzBuzz->execute(9));
    }

    /**
     * @test
     */
    public function itReturns11()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals(11, $fizzBuzz->execute(11));
    }

    /**
     * @test
     */
    public function itReturnsFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals('fizzbuzz', $fizzBuzz->execute(15));
    }

    /**
     * @test
     */
    public function itExecutesUpTo5()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(
            [
                1,
                2,
                'fizz',
                4,
                'buzz',
            ],
            $fizzBuzz->executeUpTo(5)
        );
    }
}
