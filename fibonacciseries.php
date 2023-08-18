<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Generator</title>
</head>
<body>

<h2>Fibonacci Series Generator</h2>

<form method="post">
    Enter the number:
    <input type="number" name="terms">
    <input type="submit" value="Generate">
</form>

<?php
function generateFibonacci($n) {
    $fibonacciSeries = array(0, 1);
    
    for ($i = 2; $i < $n; $i++) {
        $nextTerm = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        array_push($fibonacciSeries, $nextTerm);
    }
    
    return $fibonacciSeries;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $terms = $_POST["terms"];
    
    if ($terms <= 0) {
        echo "<p>Please enter a positive number of terms.</p>";
    } else {
        $fibonacciSeries = generateFibonacci($terms);
        
        echo "<p>Fibonacci Series with $terms terms:</p>";
        echo "<ul>";
        foreach ($fibonacciSeries as $term) {
            echo "<li>$term</li>";
        }
        echo "</ul>";
    }
}
?>

</body>
</html>
