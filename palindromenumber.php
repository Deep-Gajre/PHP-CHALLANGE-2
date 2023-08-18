<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome number</title>
</head>
<body>
    <h1>Palindrome number</h1>
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
    $originalNumber = $number;
    $reverseNumber = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $reverseNumber = $reverseNumber  * 10 + $digit;
        $number = (int)($number/10);
    }
    if ($reverseNumber == $originalNumber) {
        echo "$originalNumber is an palindrome number";
    }
    else{
        echo "$originalNumber is not palindrome number";
    }
}
?>