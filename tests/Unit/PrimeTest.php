<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Prime;

class PrimeTest extends TestCase
{
    public function testPrimeGenerateReturnsArray()
    {
        $prime = new Prime();
        $this->assertTrue(is_array($prime->generate(1)));
    }

    public function testPrimeGenerate2Returns2()
    {
        $prime = new Prime();
        $this->assertEquals([2], $prime->generate(2));
    }

    public function testPrimeGenerate3Returns3()
    {
        $prime = new Prime();
        $this->assertEquals([3], $prime->generate(3));
    }

    public function testPrimeGenerate4Returns22()
    {
        $prime = new Prime();
        $this->assertEquals([2, 2], $prime->generate(4));
    }

    public function testPrimeGenerate5Returns5()
    {
        $prime = new Prime();
        $this->assertEquals([5], $prime->generate(5));
    }

    public function testPrimeGenerate6Returns23()
    {
        $prime = new Prime();
        $this->assertEquals([2, 3], $prime->generate(6));
    }

    public function testPrimeGenerate7returns7()
    {
        $prime = new Prime();
        $this->assertEquals([7], $prime->generate(7));
    }

    public function testPrimeGenerate8returns222()
    {
        $prime = new Prime();
        $this->assertEquals([2, 2, 2], $prime->generate(8));
    }

    public function testPrimeGenerate9Returns33()
    {
        $prime = new Prime();
        $this->assertEquals([3, 3], $prime->generate(9));
    }

    public function testPrimeGenerate500Returns22555()
    {
        $prime = new Prime();
        $this->assertEquals([2, 2, 5, 5, 5], $prime->generate(500));
    }
}
