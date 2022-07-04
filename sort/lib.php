<?php

function getRandNumbers($length, $min = 0, $max = 100)
{
    $ret = [];
    for ($i = 0; $i < $length; $i++) {
        $ret[] = rand($min, $max);
    }

    return $ret;
}

class Timer
{
    private static $stack = [];

    public static function start()
    {
        $start = microtime(true);
        array_push(self::$stack, $start);
    }

    public static function end()
    {
        $end = microtime(true);
        $start = array_pop(self::$stack);
        return $end - $start;
    }
}
