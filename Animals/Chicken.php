<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once(dirname(__FILE__).'/../Interface/Edible.php');


class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";// TODO: Implement makeSound() method.
    }

    public function howToEat()
    {
        return "could be fried";// TODO: Implement howToEat() method.
    }
}