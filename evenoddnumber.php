<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even odd number</title>
</head>
<body>
    <h1>Even odd number in php</h1>
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

    // calculate the Enter number is even or odd   
        if ($number%2==0) {
            echo "<p> $number is even</p>";
        }
        else
        {
            echo "<p>The $number is odd</p>";
        }
       
}
?>