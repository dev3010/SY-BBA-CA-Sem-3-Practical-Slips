<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arithmetic Operations</title>
</head>
<body>
<?php
	// Include the functions file that contains the arithmetic operations
include 'functions.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the numbers and operation from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Call the function to perform the chosen operation
    $result = performOperation($num1, $num2, $operation);
}
?>
<!-- Form to accept two numbers and choose the arithmetic operation -->
<form method="post" action="">
    <label for="num1">Enter First Number:</label>
    <input type="number" name="num1" required><br><br>

    <label for="num2">Enter Second Number:</label>
    <input type="number" name="num2" required><br><br>

    <label>Select Operation:</label><br>
    <input type="radio" name="operation" value="add" required>Add<br>
    <input type="radio" name="operation" value="subtract">Subtract<br>
    <input type="radio" name="operation" value="multiply">Multiply<br>
    <input type="radio" name="operation" value="divide">Divide<br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
// Display the result if form is submitted
if (isset($result)) {
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>

