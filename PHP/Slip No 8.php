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
    <input type="radio" name="operation" value="sortAsc" required> Sort Array by Values (Ascending, Changing Keys)<br>
    <input type="radio" name="operation" value="sortDesc" required> Sort Array by Values (Descending, Changing Keys)<br>
    <input type="radio" name="operation" value="sortPreserveKeys" required> Sort Array by Values (Preserving Keys)<br>
    <input type="radio" name="operation" value="filterOdd" required> Filter Odd Elements from Array<br>
    <input type="radio" name="operation" value="sortMultiple" required> Sort Multiple Arrays<br>
    <input type="radio" name="operation" value="mergeArrays" required> Merge Two Arrays<br>
    <input type="radio" name="operation" value="arrayOps" required> Union, Intersection & Difference of Arrays<br><br>

    <input type="submit" value="Perform Operation">
</form>
<?php
// Initialize two associative arrays
$array1 = ["a" => 5, "b" => 2, "c" => 9, "d" => 12];
$array2 = ["e" => 3, "f" => 8, "g" => 5, "h" => 1];

// Function to sort array by values and change keys (ascending or descending)
function sortArrayChangeKeys(&$arr, $order = "asc") {
    if ($order == "asc") {
        asort($arr);  // Sort in ascending order (values, change keys)
    } else {
        arsort($arr); // Sort in descending order (values, change keys)
    }
    echo "<h3>Sorted Array (Values, Keys Changed):</h3>";
    print_r($arr);
}

// Function to sort array by values without changing keys
function sortArrayPreserveKeys($arr) {
    asort($arr);  // Sort values but keep keys intact
    echo "<h3>Sorted Array (Keys Preserved):</h3>";
    print_r($arr);
}

// Function to filter odd elements from the array
function filterOddElements($arr) {
    $filteredArray = array_filter($arr, function ($value) {
        return $value % 2 !== 0;  // Return only odd elements
    });
    echo "<h3>Filtered Array (Odd Elements):</h3>";
    print_r($filteredArray);
}

// Function to merge two arrays
function mergeArrays($arr1, $arr2) {
    $mergedArray = array_merge($arr1, $arr2);  // Merge two arrays
    echo "<h3>Merged Array:</h3>";
    print_r($mergedArray);
}

// Function to find the union, intersection, and difference of two arrays
function arrayOperations($arr1, $arr2) {
    $union = array_merge($arr1, $arr2);  // Union of two arrays
    $intersection = array_intersect($arr1, $arr2);  // Intersection
    $difference = array_diff($arr1, $arr2);  // Difference
    
    echo "<h3>Union of Arrays:</h3>";
    print_r($union);
    echo "<h3>Intersection of Arrays:</h3>";
    print_r($intersection);
    echo "<h3>Difference (Array1 - Array2):</h3>";
    print_r($difference);
}

// Function to sort multiple arrays at a glance
function sortMultipleArrays($arrays, $order = "asc") {
    foreach ($arrays as $index => $arr) {
        echo "<h3>Array " . ($index + 1) . " (Sorted):</h3>";
        sortArrayChangeKeys($arr, $order);
        echo "<br>";
    }
}

// Handle menu selection from the form
if (isset($_POST['operation'])) {
    $operation = $_POST['operation'];

    switch ($operation) {
        case "sortAsc":
            sortArrayChangeKeys($array1, "asc");
            break;
        case "sortDesc":
            sortArrayChangeKeys($array1, "desc");
            break;
        case "sortPreserveKeys":
            sortArrayPreserveKeys($array1);
            break;
        case "filterOdd":
            filterOddElements($array1);
            break;
        case "sortMultiple":
            sortMultipleArrays([$array1, $array2]);
            break;
        case "mergeArrays":
            mergeArrays($array1, $array2);
            break;
        case "arrayOps":
            arrayOperations($array1, $array2);
            break;
        default:
            echo "Invalid operation!";
            break;
    }
}
?>

</body>
</html>
