<?php

namespace Plants;

abstract class Plant {
    public string $name;
    public bool $photosinthesis = true;
    public int $age;
    // Max 10
    public int $growRate;
    public bool $alive = true;

    protected function birth() : string {
        return $this->name . " Has born \n";
    }

    public function whiter() {
        $this->growRate = 0;
        $this->alive = false;
    }

    public function __construct(string $name, int $age, int $growRate) {
        $this->name = $name;
        $this->age = $age;
        $this->growRate = $growRate;
        echo $this->birth();
    }

    abstract function getColor() : string;

    abstract function grow() : int;
}