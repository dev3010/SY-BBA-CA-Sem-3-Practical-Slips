<?php
// Define the file where the count is stored
$counter_file = 'counter.txt';

// Check if the file exists, if not, create it and initialize the count to 0
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 0); // Create the file and write 0 in it
}

// Read the current count from the file
$current_count = (int)file_get_contents($counter_file);

// Increment the count
$current_count++;

// Write the updated count back to the file
file_put_contents($counter_file, $current_count);

// Display the number of visits
echo "<h1>This page has been accessed $current_count times.</h1>";
?>
