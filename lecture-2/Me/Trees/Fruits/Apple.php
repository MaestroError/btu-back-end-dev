<?php

namespace Me\Trees\Fruits;

use \Me\Trees\Fruit;

// Import interface
use \Me\Fruitful;

/*
 Define class Apple, extend it from Fruit 
 and Implement interface with keyword "implements"
*/
class Apple extends Fruit implements Fruitful {
    public static $timeBeforeFall = 120;

    public function Ripe() {
        echo "I am Ready" . "\n";
        echo $this->Fall(self::$timeBeforeFall);
    }

    public function Fall(int $time): string {
        return "I will fall after $time seconds" . "\n";
    }
}