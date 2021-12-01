<?php

namespace Logiek\ReadingTime;

use Carbon\CarbonInterval;
use Illuminate\Support\Str;

class ReadingTime
{
    public function fast(string $content): CarbonInterval
    {
        return $this->calculate($content, config('reading-time.speed.fast'));
    }

    public function average(string $content): CarbonInterval
    {
        return $this->calculate($content, config('reading-time.speed.average'));
    }

    public function slow(string $content): CarbonInterval
    {
        return $this->calculate($content, config('reading-time.speed.slow'));
    }

    private function calculate(string $content, int $wordsPerMinute): CarbonInterval
    {
        $wordCount = Str::wordCount($content);
        $timeToRead = $wordCount / ($wordsPerMinute / CarbonInterval::getSecondsPerMinute());

        return CarbonInterval::createFromFormat('s.u', strval($timeToRead));
    }
}
