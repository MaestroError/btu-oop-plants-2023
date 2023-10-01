<?php
namespace Plants\Trees;

use Plants\Tree;

class Fruit extends Tree {
    public int $fruitsWeight;
    // max 3
    public int $fruitGrowRate = 0;

    public function __construct(string $name, int $age, int $growRate) {
        parent::__construct($name, $age, $growRate);
    }

    public function getFruitsWeight() {
        return $this->fruitsWeight;
    }

}