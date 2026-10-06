<html>
<body>


    <h1> The Fruit Program </h1>

<?php

class Fruit
{
    public $name;
    public $color;

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }
}

// Creating objects
$apple = new Fruit();
$banana = new Fruit();

// Setting values
$apple->set_name("Apple");
$banana->set_name("Banana");

// Displaying values
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

?>
</body>
</html>