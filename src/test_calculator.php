<?php
// index.php
require_once 'calculator.php'; // Include the class file


// Testing Calculator (Demo)
$calculator = new Calculator();
$tests = [
    [10, 5, '+'],
    [10, 2, 'multiply'],
    [5, 'X', 'add'],    // Non-numeric error
    [10, 0, '/'],       // Division by zero error
    [10, 5, 'power']    // Invalid operation error
];

foreach ($tests as $test) {
    list($n1, $n2, $op) = $test;
    echo "Attempting: {$n1} {$op} {$n2} ==> ";

    try {
        // Use the public method on the Calculator object
        $result = $calculator->calculate($n1, $n2, $op);
        echo "Result: {$result} <br>";

    } catch (\Exception $e) {
        // Catch the standard PHP Exception thrown by the class
        echo "ERROR: " . $e->getMessage() . "<br>";
    }
    echo "<hr>";
}
?>
