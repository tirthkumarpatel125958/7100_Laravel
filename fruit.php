<?php

class Fruit
{
    // Member variables / properties
    public $fruit1 = "Apple";
    public $fruit2 = "Banana";
    public $fruit3 = "Mango";
    public $fruit4 = "Orange";
    public $fruit5 = "Grapes";

    // Method
    public function displayFruits()
    {
        echo $this->fruit1 . "<br>";
        echo $this->fruit2 . "<br>";
        echo $this->fruit3 . "<br>";
        echo $this->fruit4 . "<br>";
        echo $this->fruit5 . "<br>";
    }
}

// Create an object
$fruits = new Fruit();

// Call the method
$fruits->displayFruits();

?>
