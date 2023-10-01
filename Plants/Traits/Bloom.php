<?php

namespace Plants\Traits;

trait Bloom {
    public bool $bloomed = false;
    public function BloomNow()  {
        $this->bloomed = true;
        echo "It's time to bloom for " . $this->name . " \n";
    }
}