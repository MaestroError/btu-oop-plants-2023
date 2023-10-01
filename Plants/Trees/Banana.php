<?php

namespace Plants\Trees;

use Plants\FruitingTree;

class Banana extends Fruit implements FruitingTree {
    public array $fruitingRate = [2, 50];

    public function __construct(int $age, int $growRate) {
        $name = "Banana";
        parent::__construct($name, $age, $growRate);
    }

    public function bore() : int {
        if ($this->bloomed && $this->fruitGrowRate < 1) {
            $this->fruitGrowRate = 1;
            $this->fruitsWeight = rand($this->fruitingRate[0], $this->fruitingRate[1]);
        }
        return $this->fruitGrowRate;
    }
    public function ripe() : bool {
        if ($this->fruitGrowRate < 3) {
            $this->fruitGrowRate++;
        } else {
            $this->fall();
        }
        if ($this->fruitGrowRate == 3) {
            echo $this->name . " is ready to eat! \n";
        }
    }
    public function fall() : void {
        echo $this->name . "'s fruits fell \n";
    }
}