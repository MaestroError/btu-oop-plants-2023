<?php
namespace Plants;

interface FruitingTree {
    public function bore() : int;
    public function ripe() : bool;
    public function fall() : void;
}