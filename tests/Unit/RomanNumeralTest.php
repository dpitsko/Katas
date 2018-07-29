<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use RomanNumeral;

class RomanNumeralTest extends TestCase
{
    public function testRomanNumeralGenerateReturnsString()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertTrue(is_string($romanNumeral->generate(1)));
    }

    public function testRomanNumeralGenerate1ReturnsI()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('I', $romanNumeral->generate(1));
    }

    public function testRomanNumeralGenerate2ReturnsII()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('II', $romanNumeral->generate(2));
    }

    public function testRomanNumeralGenerate3ReturnsIII()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('III', $romanNumeral->generate(3));
    }

    public function testRomanNumeralGenerate4ReturnsIV()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('IV', $romanNumeral->generate(4));
    }

    public function testRomanNumeralGenerate5ReturnsV()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('V', $romanNumeral->generate(5));
    }

    public function testRomanNumeralGenerate6ReturnsVI()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('VI', $romanNumeral->generate(6));
    }

    public function testRomanNumeralGenerate7ReturnsVII()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('VII', $romanNumeral->generate(7));
    }

    public function testRomanNumeralGenerate8ReturnsVIII()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('VIII', $romanNumeral->generate(8));
    }

    public function testRomanNumeralGenerate9ReturnsIX()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('IX', $romanNumeral->generate(9));
    }

    public function testRomanNumeralGenerate10ReturnsX()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('X', $romanNumeral->generate(10));
    }

    public function testRomanNumeralGenerate11ReturnsXI()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('XI', $romanNumeral->generate(11));
    }

    public function testRomanNumeralGenerate15ReturnsXV()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('XV', $romanNumeral->generate(15));
    }

    public function testRomanNumeralGenerate20ReturnsXX()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('XX', $romanNumeral->generate(20));
    }

    public function testRomanNumeralGenerate40ReturnsXL()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('XL', $romanNumeral->generate(40));
    }

    public function testRomanNumeralGenerate44ReturnsXLIV()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('XLIV', $romanNumeral->generate(44));
    }

    public function testRomanNumeralGenerate44ReturnsL()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('L', $romanNumeral->generate(50));
    }

    public function testRomanNumeralGenerate3444ReturnsMMMCDXLIV()
    {
        $romanNumeral = new RomanNumeral();
        $this->assertEquals('MMMCDXLIV', $romanNumeral->generate(3444));
    }
}
