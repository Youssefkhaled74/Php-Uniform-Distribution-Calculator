<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uniform Distribution Calculator</title>
</head>
<body>
    <h2>Uniform Distribution Calculator</h2>
    <form method="post" action="">
        <label for="a">Enter lower bound (a):</label>
        <input type="number" step="any" name="a" id="a" required><br><br>
        <label for="b">Enter upper bound (b):</label>
        <input type="number" step="any" name="b" id="b" required><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);

        if ($a >= $b) {
            echo "<p style='color:red;'>Error: The lower bound (a) must be less than the upper bound (b).</p>";
        } else {
            function calculateExpectation($a, $b) {
                return ($a + $b) / 2;
            }

            function calculateVariance($a, $b) {
                return pow($b - $a, 2) / 12;
            }

            $expectation = calculateExpectation($a, $b);
            $variance = calculateVariance($a, $b);

            echo "<h3>Results:</h3>";
            echo "Expectation (Mean): " . $expectation . "<br>";
            echo "Variance: " . $variance . "<br>";
        }
    }
    ?>
</body>
</html>
