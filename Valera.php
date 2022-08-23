<?php 
class Person {
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother=null, $father=null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }
    function sayHi ($name) {
        return "Hi $name, I'm ".$this->name;
    }
    function setHp($hp) {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp() {
        return $this->hp;
    }
    function getName() {
        return $this->name;
    }
    function getMother() {
        return $this->mother;
    }
    function getFather() {
        return $this->father;
    }
    function getInfo () {
        return "
        <h3>A few words about myself</h3><br>"."My name is ".$this->getName(). "<br>"."My mother's name is ".$this->getMother()->getName(). "<br>"."My father's name is  ".$this->getfather()->getName(). "<br>"."My grandpa's name on my mother's side is ".$this->getMother()->getFather()->getName(). "<br>"."My grandma's name on my mother's side is ".$this->getMother()->getMother()->getName(). "<br>"."My grandpa's name on my father's side is ".$this->getFather()->getFather()->getName(). "<br>"."My grandma's name on my father's side is ".$this->getFather()->getMother()->getName().""
    ;
    }
}
// $medKit = 50;

$igor = new Person("Igor", "Petrov", 68); //отец ольги
$maria = new Person("Maria", "Petrova", 69); //мать ольги

$misha = new Person("Misha", "Ivanov", 72); //отец алекса
$anna = new Person("Anna", "Ivanova", 67); //мать алекса

$alex = new Person("Alex", "Ivanov", 42, $anna, $misha);
$olga = new Person("Olga", "Ivanova", 42, $maria, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();

// echo $valera->getMother()->getFather()->getName();

//здоровье человека не может быть выше 100
// echo $alex->name;
// echo $alex->sayHi($igor->name);

// $alex->setHp(-30); // алекс упал
// echo $alex->getHp()."<br>";
// $alex->setHp($medKit); //нашел аптечку
// echo $alex->getHp();
