<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial of number</title>
</head>
<body>
    <h1>Factorial of number</h1>
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
   $fact = 1;
   for ($i=$number; $i >=1; $i--) { 
        $fact = $fact * $i;
   }
   echo "Factorial of $number is $fact";
}
?>