<?php
declare(strict_types=1);

class Calculator
{
    public function divide(float $num1, float $num2): float
    {
        if ($num2 === 0.0) {
            throw new Exception("Math Error: Cannot divide by zero.");
        }
        return $num1 / $num2;
    }
}
?>