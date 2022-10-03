<?php

// Define namespace
namespace Me;

abstract class Plant {

    public $name;

    public function __construct() {
        echo "Planted" . "\n";
    }

    abstract public function grow();
}