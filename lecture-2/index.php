<?php

// Import file start to make other files available (Loaded)
require "start.php";

// Import class via namespace
use Me\Trees\Fruits\Apple;

// Init object from class
$apple = new Apple();

// Call methods
$apple->grow();
$apple->flourish();
$apple->Ripe();
$apple->die("Winter is coming!");

/**
 * Pay attention: The structure has 7 classes and some other elements,
 * but mostly we use in code the last parts (fruits and flowers: apple, banana, rose).
 * All other elements are just part of structure to make it easier to change, to expand and to explore
 */