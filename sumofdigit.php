<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sumOfDigits</title>
</head>
<body>
    <h1>Sum Of Digits Calculator</h1>
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
    $sum = 0;

    // calculate the sum of digits    
        while ($number>0) {
            $digit = $number % 10;
            $sum =$sum + $digit;
            $number = (int)($number/10);
        }
        echo "<p>The sum of digits is: $sum</p>";
}
?>