<?php

namespace Me;

interface Fruitful {
    public function Ripe();
    public function Fall(int $time): string;
}