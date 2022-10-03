<?php 

namespace Me\Traits;

trait Dieable {
    public function die(string $reason) {
        echo "I am dead, because of $reason" . "\n";
    }
}