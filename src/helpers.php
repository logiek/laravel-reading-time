<?php

use Logiek\ReadingTime\ReadingTime;

if (!function_exists('reading_time')) {
    function reading_time(string $content = null, int $wordsPerMinute = null)
    {
        $readingTime = app(ReadingTime::class);

        if(func_num_args() === 0) {
            return $readingTime;
        }

        return $readingTime->average($content, $wordsPerMinute);
    }
}
