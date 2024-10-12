<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Operations</title>
</head>
<body>

<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get strings and position from the form
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    $position = $_POST['position'];
    $compareMethod = $_POST['compare'];  // Selected comparison method

    // Compare strings using the selected method
    if ($compareMethod == 'equals') {
        $comparisonResult = ($string1 == $string2) ? "Strings are equal" : "Strings are not equal";
    } else {
        $comparisonResult = (strcmp($string1, $string2) == 0) ? "Strings are equal" : "Strings are not equal";
    }

    // Append second string to the first
    $appendedString = $string1 . $string2;

    // Reverse characters from the specified position
    $reversedPart = strrev(substr($string1, $position));  // Reverse part of string from position
    $remainingPart = substr($string1, 0, $position);  // Remaining part of string before position
    $modifiedString = $remainingPart . $reversedPart;  // Final modified string
}
?>

<!-- Form to accept two strings and position for reversal -->
<form method="post" action="">
    <label for="string1">Enter First String:</label><br>
    <input type="text" name="string1" required><br><br>

    <label for="string2">Enter Second String:</label><br>
    <input type="text" name="string2" required><br><br>

    <label for="position">Position to Reverse from (0-based index):</label><br>
    <input type="number" name="position" min="0" required><br><br>

    <label>Select Comparison Method:</label><br>
    <input type="radio" name="compare" value="equals" required> == Operator<br>
    <input type="radio" name="compare" value="strcmp"> strcmp() Function<br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Display the results if the form has been submitted
if (isset($_POST['submit'])) {
    echo "<h3>Results:</h3>";
    echo "Comparison Result: $comparisonResult<br>";
    echo "Appended String: $appendedString<br>";
    echo "Modified String (after reversal from position $position): $modifiedString<br>";
}
?>

</body>
</html>
