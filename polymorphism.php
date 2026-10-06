<html>
<body>


<?php

// Parent class
class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color of the fruit is {$this->color}.";
    }
}

// Child class
class Cherry extends Fruit
{
    public $weight;

    // Overriding the constructor
    function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    // Overriding the intro method
    public function intro()
    {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight}.";
    }
}

// Creating Cherry object
$cherry = new Cherry("Cherry", "Red", "10 grams");

// Calling overridden method
$cherry->intro();

?>

</body>
</html>