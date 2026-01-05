<?php
require_once 'calculator.php';

$calculator = new Calculator();

$tests = [
    [10, 2],    
    [15, 3],    
    [10, 0],    // Division by zero - must throw exception
    [7, 0],     // Division by zero - must throw exception
];

foreach ($tests as $test) {
    list($num1, $num2) = $test;

    echo "Attempting: {$num1} / {$num2} => ";

    try {
        // Try to perform the division
        $result = $calculator->divide($num1, $num2);
        echo "Result: {$result}" . PHP_EOL;
        
    } catch (Exception $e) {
        // Catch and handle division by zero error
        echo "ERROR: " . $e->getMessage() . PHP_EOL;;
    }
}

?>
