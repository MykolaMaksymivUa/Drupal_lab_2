<?php
const names = [
    'Christopher',
    'Ryan',
    'Ethan',
    'John',
    'Zoey',
    'Sarah',
    'Michelle',
    'Samantha',
    'Mykola',
    'Andriy',
    'Anton',
    'Adam',
    'Lisa',
    'Jaine',
    'Andrew',
    'Tina',
    'Lina',
    'Tanya',
    'Iren'
];

require_once "abstractClasses.php";

class Bear extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Bear ' .names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createBear extends createAnAnimal {
    public function create() {
        return new Bear ();
    }
}

class Tiger extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Tiger ' .names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createTiger extends createAnAnimal {
    public function create() {
        return new Tiger ();
    }
}

class Horse extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Horse ' .names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createHorse extends createAnAnimal {
    public function create() {
        return new Horse ();
    }
}

class Hippo extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Hippo ' .names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createHippo extends createAnAnimal {
    public function create() {
        return new Hippo ();
    }
}

class Giraffe extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Giraffe ' .names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createGiraffe extends createAnAnimal {
    public function create() {
        return new Giraffe ();
    }
}

class Lion extends animalInZoo {

    function __construct()
    {
        $this->animalName = 'Lion ' .names[mt_rand(0, sizeof(names) - 1)];
    }
}

class createLion extends createAnAnimal {
    public function create() {
        return new Lion ();
    }
}