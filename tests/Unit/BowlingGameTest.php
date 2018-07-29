<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use BowlingGame;

class BowlingGameTest extends TestCase
{
    public function testBowlingGameAll0Returns0()
    {
        $bowlingGame = new BowlingGame();
        $this->repeatRoll($bowlingGame, 0, 20);
        $this->assertEquals(0, $bowlingGame->score());
    }

    public function testBowlingGameAll1Returns20()
    {
        $bowlingGame = new BowlingGame();
        $this->repeatRoll($bowlingGame, 1, 20);
        $this->assertEquals(20, $bowlingGame->score());
    }

    public function testBowlingGameSpare()
    {
        $bowlingGame = new BowlingGame();
        $bowlingGame->roll(7);
        $bowlingGame->roll(3);
        $bowlingGame->roll(2);
        $bowlingGame->roll(3);
        $this->repeatRoll($bowlingGame, 0, 16);

        $this->assertEquals(17, $bowlingGame->score());
    }

    public function testBowlingGameSrike()
    {
        $bowlingGame = new BowlingGame();
        $bowlingGame->roll(10);
        $bowlingGame->roll(3);
        $bowlingGame->roll(2);
        $this->repeatRoll($bowlingGame, 0, 17);

        $this->assertEquals(20, $bowlingGame->score());
    }

    public function testBowlingPerfectGame()
    {
        $bowlingGame = new BowlingGame();
        $this->repeatRoll($bowlingGame, 10, 12);

        $this->assertEquals(300, $bowlingGame->score());
    }

    private function rollSpare($bowlingGame)
    {
        $bowlingGame->roll(7);
        $bowlingGame->roll(3);
    }

    private function rollStrike($bowlingGame)
    {
        $bowlingGame->roll(10);
    }

    private function repeatRoll($bowlingGame, $pins, $times)
    {
        for ($i = 0; $i < $times; $i++) {
            $bowlingGame->roll($pins);
        }
    }
}
