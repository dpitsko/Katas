<?php

class BowlingGame
{
    const FRAMES_PER_GAME = 10;
    protected $frame      = 0;
    protected $rolls      = [];

    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    public function score()
    {
        $roll  = 0;
        $score = 0;
        for ($frame = 1; $frame <= self::FRAMES_PER_GAME; $frame++) {
            if ($this->isStrike($roll)) {
                $score += 10 + $this->strikeBonus($roll);
                $roll += 1;
            } elseif ($this->isSpare($roll)) {
                $score += 10 + $this->spareBonus($roll);
                $roll += 2;
            } else {
                $score += $this->defaultFrameScore($roll);
                $roll += 2;
            }
        }
        return $score;
    }

    public function defaultFrameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    public function spareBonus($roll)
    {
        return $this->rolls[$roll + 2];
    }

    public function strikeBonus($roll)
    {
        return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }

    public function isSpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] === 10;
    }

    public function isStrike($roll)
    {
        return $this->rolls[$roll] === 10;
    }
}
