<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Operations</title>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
    $largeString = $_POST['largeString'];
    $smallString = $_POST['smallString'];
    $replacementString = $_POST['replacementString'];

    // Find the first occurrence
    $firstOccurrence = strpos($largeString, $smallString);

    // Find the last occurrence
    $lastOccurrence = strrpos($largeString, $smallString);

    // Count total number of occurrences
    $occurrenceCount = substr_count($largeString, $smallString);

    // Replace the small string in the large string
    $modifiedString = str_replace($smallString, $replacementString, $largeString);
}
?>

<form method="post" action="">
    <label for="largeString">Large String:</label>
    <input type="text" name="largeString" required><br><br>

    <label for="smallString">Small String:</label>
    <input type="text" name="smallString" required><br><br>

    <label for="replacementString">Replacement String:</label>
    <input type="text" name="replacementString" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    echo "<h3>Results:</h3>";
    echo "First occurrence: " . ($firstOccurrence !== false ? $firstOccurrence : "Not found") . "<br>";
    echo "Last occurrence: " . ($lastOccurrence !== false ? $lastOccurrence : "Not found") . "<br>";
    echo "Total occurrences: " . $occurrenceCount . "<br>";
    echo "Modified string: " . $modifiedString;
}
?>

</body>
</html>