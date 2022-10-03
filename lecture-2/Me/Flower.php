<?php

namespace Me;

// Import traits
use \Me\Traits\Blossomable;
use \Me\Traits\Dieable;

class Flower extends Plant {
    // Use Traits
    use Blossomable, Dieable;

    public function grow() {
        echo "I am Flower and I am growing" . "\n";;
    }
}