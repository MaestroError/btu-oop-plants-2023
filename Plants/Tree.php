<?php

namespace Plants;

use Plants\Plant;
use Plants\Traits\Bloom;

class Tree extends Plant {

    use Bloom;

    public int $height;
    public string $leafColor;
    public string $color;

    public function grow() : int {
        if ($this->growRate < 10) {
            $this->growRate++;
        } else {
            $this->whiter();
        }
        return $this->growRate;
    }

    public function getColor() : string {
        return $this->color;
    }

    public function __construct(string $name, int $age, int $growRate) {
        parent::__construct($name, $age, $growRate);
    }
}