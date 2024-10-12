<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Converter</title>
</head>
<body>
    <h2>Distance Converter: Miles ↔ Kilometers</h2>
    
    <!-- The form will post data to distance.php -->
    <form action="distance13.php" method="post">
        <!-- Input field for distance -->
        <label for="distance">Enter Distance:</label>
        <input type="number" step="any" id="distance" name="distance" required><br><br>
        
        <!-- Radio buttons to choose the conversion direction -->
        <input type="radio" id="to_kilometers" name="conversion" value="to_kilometers" required>
        <label for="to_kilometers">Miles to Kilometers</label><br>
        
        <input type="radio" id="to_miles" name="conversion" value="to_miles" required>
        <label for="to_miles">Kilometers to Miles</label><br><br>
        
        <!-- Submit and Reset buttons -->
        <input type="submit" value="Convert">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
