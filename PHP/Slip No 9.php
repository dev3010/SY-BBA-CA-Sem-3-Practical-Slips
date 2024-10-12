<?php
// Define an interface with methods for area() and volume()
interface Shape {
    const PI = 3.14159; // Define constant PI

    public function area();  // Method to calculate area
    public function volume();  // Method to calculate volume
}

// Create a class Cylinder that implements the Shape interface
class Cylinder implements Shape {
    private $radius;
    private $height;

    // Constructor to initialize radius and height
    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }

    // Method to calculate the surface area of a cylinder
    public function area() {
        $area = 2 * self::PI * $this->radius * ($this->radius + $this->height);
        return $area;
    }

    // Method to calculate the volume of a cylinder
    public function volume() {
        $volume = self::PI * pow($this->radius, 2) * $this->height;
        return $volume;
    }
}

// Create an object of the Cylinder class
$radius = 5;  // Example radius
$height = 10; // Example height
$cylinder = new Cylinder($radius, $height);

// Display the area and volume of the cylinder
echo "Radius: $radius, Height: $height<br>";
echo "Surface Area of the Cylinder: " . $cylinder->area() . " square units<br>";
echo "Volume of the Cylinder: " . $cylinder->volume() . " cubic units<br>";
?>
