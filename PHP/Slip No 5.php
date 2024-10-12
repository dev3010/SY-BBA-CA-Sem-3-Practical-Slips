<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item Bill</title>
</head>
<body>

<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve item details from the form (entered as a comma-separated string)
    $itemCodes = explode(",", $_POST['itemCodes']);  // Explode string into an array of item codes
    $itemNames = explode(",", $_POST['itemNames']);  // Explode string into an array of item names
    $unitsSold = explode(",", $_POST['unitsSold']);  // Explode string into an array of units sold
    $rates = explode(",", $_POST['rates']);          // Explode string into an array of item rates

    // Check if the user entered details for 5 items
    if (count($itemCodes) == 5 && count($itemNames) == 5 && count($unitsSold) == 5 && count($rates) == 5) {
        echo "<h3>Bill</h3>";
        echo "<table border='1'>
                <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Units Sold</th>
                    <th>Rate</th>
                    <th>Total Price</th>
                </tr>";
        
        // Loop through the items and display the details in a table
        for ($i = 0; $i < 5; $i++) {
            $totalPrice = $unitsSold[$i] * $rates[$i];  // Calculate total price for each item
            echo "<tr>
                    <td>{$itemCodes[$i]}</td>
                    <td>{$itemNames[$i]}</td>
                    <td>{$unitsSold[$i]}</td>
                    <td>{$rates[$i]}</td>
                    <td>{$totalPrice}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Please enter details for exactly 5 items.</p>";
    }
}
?>

<!-- Form to accept item details in comma-separated format -->
<form method="post" action="">
    <label for="itemCodes">Item Codes (comma separated):</label><br>
    <input type="text" name="itemCodes" required><br><br>

    <label for="itemNames">Item Names (comma separated):</label><br>
    <input type="text" name="itemNames" required><br><br>

    <label for="unitsSold">Units Sold (comma separated):</label><br>
    <input type="text" name="unitsSold" required><br><br>

    <label for="rates">Rates (comma separated):</label><br>
    <input type="text" name="rates" required><br><br>

    <input type="submit" name="submit" value="Generate Bill">
</form>

</body>
</html>
