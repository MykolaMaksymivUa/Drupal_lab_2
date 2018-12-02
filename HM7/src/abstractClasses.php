<?php
abstract class animalInZoo {
    public $animalName;

    public function getName () {
        return $this->animalName;
    }
}
abstract class createAnAnimal {

    abstract function create ();
}