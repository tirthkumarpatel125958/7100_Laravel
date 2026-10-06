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

    public function get_name()
    {
        return $this->name;
    }

    public function get_color()
    {
        return $this->color;
    }
}

// Creating object
$strawberry = new Fruit("Strawberry", "Pink");

// Displaying values
echo $strawberry->get_name();
echo "<br>";
echo $strawberry->get_color();

?>

</body>
</html>