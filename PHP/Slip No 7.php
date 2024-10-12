<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Array Operations</title>
</head>
<body>



<!-- Form to select an operation -->
<form method="post" action="">
    <label>Select an operation:</label><br>
    <input type="radio" name="operation" value="display" required> Display Array Elements<br>
    <input type="radio" name="operation" value="size" required> Display Size of the Array<br>
    <input type="radio" name="operation" value="delete" required> Delete an Element by Key<br>
    <input type="radio" name="operation" value="reverse" required> Reverse Key-Value Pairs<br>
    <input type="radio" name="operation" value="shuffle" required> Traverse Elements Randomly<br><br>

    <!-- Input box to accept key for deletion -->
    <label for="deleteKey">Enter Key to Delete (only if deleting):</label>
    <input type="text" name="deleteKey"><br><br>

    <input type="submit" value="Perform Operation">
</form>
<?php
// Initialize an associative array
$array = [
    "name" => "John",
    "age" => 25,
    "city" => "New York",
    "job" => "Engineer"
];

// Function to display the array elements along with the keys
function displayArray($arr) {
    echo "<h3>Array Elements:</h3>";
    foreach ($arr as $key => $value) {
        echo "Key: $key, Value: $value<br>";
    }
}

// Function to display the size of the array
function displaySize($arr) {
    echo "<h3>Size of the Array:</h3>";
    echo "The size of the array is: " . count($arr) . "<br>";
}

// Function to delete an element from the array by key
function deleteElement(&$arr, $key) {
    if (array_key_exists($key, $arr)) {
        unset($arr[$key]);
        echo "<h3>Element Deleted:</h3>";
        echo "Element with key '$key' has been deleted.<br>";
    } else {
        echo "<h3>Error:</h3>";
        echo "Key '$key' does not exist in the array.<br>";
    }
}

// Function to reverse the key-value pairs
function reverseArray($arr) {
    $flippedArray = array_flip($arr); // Flip the keys and values
    echo "<h3>Reversed Array (Key-Value Flipped):</h3>";
    foreach ($flippedArray as $key => $value) {
        echo "Key: $key, Value: $value<br>";
    }
}

// Function to shuffle and display array in random order
function randomTraverse($arr) {
    $shuffledArray = $arr;
    shuffle($shuffledArray); // Shuffle the array values randomly
    echo "<h3>Array in Random Order:</h3>";
    foreach ($shuffledArray as $key => $value) {
        echo "Value: $value<br>";
    }
}

// Handle menu selection based on form submission
if (isset($_POST['operation'])) {
    $operation = $_POST['operation'];

    switch ($operation) {
        case "display":
            displayArray($array);
            break;
        case "size":
            displaySize($array);
            break;
        case "delete":
            $deleteKey = $_POST['deleteKey'];
            deleteElement($array, $deleteKey);
            break;
        case "reverse":
            reverseArray($array);
            break;
        case "shuffle":
            randomTraverse($array);
            break;
        default:
            echo "Invalid operation!";
            break;
    }
}
?>
</body>
</html>
