<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
</head>
<body>
    <h1>Table of number</h1>
    <form method="POST">
        Enter a number:
        <input type="number" name="number" required>
        <input type="submit" value="caculate">
    </form>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $number = $_POST["number"];
    echo "<h2>Table for $number</h2>";
    echo "<table border='1'>";
    for ($i=1; $i <= 10; $i++) { 
        $result = $number * $i;
        echo "<tr><td>$number x $i</td><td>=</td><td>$result</td></tr>";
    }
    echo "</table>";
}
?>