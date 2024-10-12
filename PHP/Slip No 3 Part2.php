<?php


// Function to perform the arithmetic operations
// It uses default values for numbers in case no values are passed (though form ensures that numbers are provided)
function performOperation($num1 = 0, $num2 = 0, $operation = 'add') {
    // Switch case to handle different operations
    switch ($operation) {
        case 'add':
            return $num1 + $num2;  // Addition
        case 'subtract':
            return $num1 - $num2;  // Subtraction
        case 'multiply':
            return $num1 * $num2;  // Multiplication
        case 'divide':
            // Handle division by zero
            return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";  // Division
        default:
            return "Invalid operation";
    }
}
?>