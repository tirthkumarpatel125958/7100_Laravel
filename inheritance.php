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
    public function message()
    {
        echo "Is cherry a fruit or a berry?";
    }
}

// Creating object
$cherry = new Cherry("Cherry", "Red");

// Calling inherited method
$cherry->intro();

echo "<br>";

// Calling Cherry's own method
$cherry->message();

?>

</body>
</html>