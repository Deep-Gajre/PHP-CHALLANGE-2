<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <h1>Enter number is prime or not</h1>
    <form method="POST">
        Enter a number:
        <input type="number" name="number" required>
        <input type="submit" value="caculate">
    </form>
</body>
</html>
<?php
function is_prime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i=2; $i * $i <= $num; $i++) { 
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $number = $_POST["number"];
    if (is_numeric($number)) {
        if (is_Prime($number)) {
            echo "$number is prime number";
        }
        else{
            echo "$number is not prime number";
        }
    }
}
?>