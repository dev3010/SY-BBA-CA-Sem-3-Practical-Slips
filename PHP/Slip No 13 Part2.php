<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input distance and conversion type
    $distance = $_POST['distance'];
    $conversion = $_POST['conversion'];

    // Conversion constants
    define('MILES_TO_KM', 1.609);
    define('KM_TO_MILES', 1 / MILES_TO_KM); // 1 kilometer is approximately 0.621 miles

    // Perform the conversion based on user input
    if ($conversion == 'to_kilometers') {
        // Convert miles to kilometers
        $converted_distance = $distance * MILES_TO_KM;
        echo "<h2>Result</h2>";
        echo "<p>$distance miles is equal to $converted_distance kilometers.</p>";
    } elseif ($conversion == 'to_miles') {
        // Convert kilometers to miles
        $converted_distance = $distance * KM_TO_MILES;
        echo "<h2>Result</h2>";
        echo "<p>$distance kilometers is equal to $converted_distance miles.</p>";
    } else {
        // Invalid option
        echo "<p>Invalid conversion option.</p>";
    }
} else {
    // If accessed directly without form submission, display an error message
    echo "<p>No data submitted!</p>";
}
?>
