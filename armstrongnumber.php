<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>armstrong number</title>
</head>
<body>
    <h1>Armstrong number</h1>
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
    $temp = $number;
    $sum = 0;
    while ($temp != 0) {
        $rem = $temp % 10;
        $sum = $sum + ($rem * $rem * $rem);
        $temp = $temp/10;
    }
    if ($number == $sum) {
        echo "$number is an Armstrong number";
    }
    else{
        echo "$number is not Aarmstrong number";
    }
}
?>