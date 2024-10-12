<!-- HTML form to accept input -->
<form method="post" action="">
    <h2>Rectangle</h2>
    Length: <input type="number" name="rect_length" required><br><br>
    Width: <input type="number" name="rect_width" required><br>

    <h2>Square</h2>
    Side Length: <input type="number" name="square_side" required><br>

    <h2>Circle</h2>
    Radius: <input type="number" name="circle_radius" required><br><br>

    <input type="submit" value="Calculate Areas">
</form>
<?php
// Define the Shape interface with an area() method
interface Shape {
    public function area();
}

// Define the Rectangle class implementing the Shape interface
class Rectangle implements Shape {
    protected $length;
    protected $width;

    // Constructor to initialize length and width
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Calculate the area of the rectangle
    public function area() {
        return $this->length * $this->width;
    }
}

// Define the Square class extending Rectangle
class Square extends Rectangle {

    // Constructor to initialize side length
    public function __construct($side) {
        parent::__construct($side, $side);
    }

    // Calculate the area of the square
    public function area() {
        return parent::area();
    }
}

// Define the Circle class implementing the Shape interface
class Circle implements Shape {
    private $radius;

    // Constructor to initialize radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Calculate the area of the circle
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

// Function to display the area of a shape
function displayArea(Shape $shape) {
    echo "The area is: " . $shape->area() . " square units.<br>";
}

// Accept user input for the shapes
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo "<h3>Result</h3>";
    // Rectangle
    $rectLength = $_POST['rect_length'];
    $rectWidth = $_POST['rect_width'];
    $rectangle = new Rectangle($rectLength, $rectWidth);
    echo "Rectangle: ";
    displayArea($rectangle);

    // Square
    $squareSide = $_POST['square_side'];
    $square = new Square($squareSide);
    echo "Square: ";
    displayArea($square);

    // Circle
    $circleRadius = $_POST['circle_radius'];
    $circle = new Circle($circleRadius);
    echo "Circle: ";
    displayArea($circle);
}
?>

