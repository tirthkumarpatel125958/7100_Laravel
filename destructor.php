<html>
<body>

<?php

class Fruit
{
    public $name;
    public $color;

    // Constructor
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // Destructor
    function __destruct()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Creating object
$strawberry = new Fruit("Strawberry", "Pink");

?>
</body>
</html>