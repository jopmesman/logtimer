<?php

namespace jopmesman\logtimer;

/**
 * Class LogTimer
 * @package Jopmesman\logtimer
 */
class LogTimer
{
    public static $timers = [];

    public static $times = [];

    /**
     * @param string $key
     */
    public static function time(string $key)
    {
        if (!array_key_exists($key, self::$timers)) {
            self::$timers[$key] = microtime(true);
        } else {
            $end = microtime(true);
            self::$times[$key] =  $end - self::$timers[$key];
            unset(self::$timers[$key]);
        }
    }

    /**
     * @return array
     */
    public static function times()
    {
        return self::$times;
    }
}
