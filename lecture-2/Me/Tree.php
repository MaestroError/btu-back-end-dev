<?php

namespace Me;

// Import traits
use \Me\Traits\Blossomable;
use \Me\Traits\Dieable;

class Tree extends Plant {

    // Use Traits
    use Blossomable, Dieable;

    public function grow() {
        echo "I am tree and I am growing" . "\n";;
    }
}