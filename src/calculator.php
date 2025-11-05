<?php
declare(strict_types=1);

class Calculator
{
    public function calculate(mixed $num1, mixed $num2, string $operation): float 
    {
        try {
            // Validate numeric inputs
            $this->checkNumericValues($num1, $num2);
        
            // Validate numeric inputs
            $this->checkNumericValues($num1, $num2);

            $n1 = (float)$num1;
            $n2 = (float)$num2;
            $op = strtolower(trim($operation));
            
            // Step 3: Perform operation using match
            $result = match ($op) {
                'add', 'addition', '+' => $n1 + $n2,
                'subtract', 'subtraction', '-' => $n1 - $n2,
                'multiply', 'multiplication', '*' => $n1 * $n2,
                'divide', 'division', '/' => $this->operateDivision($n1, $n2),
                default => throw new Exception("Operation Error: Invalid operation '{$op}'.")
            };
            
            return $result;
            
        } catch (Exception $e) {
        // Catch and re-throw with more context
        throw new Exception("⚠️ Calculation failed => " . $e->getMessage());
        }
    }

    // Method to check if inputs are numeric.
    private function checkNumericValues(mixed $num1, mixed $num2): void  
                    // need to be "mixed" type otherwise the error won't be  thrown.  
    {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new Exception('Input Error: Both parameters must be numeric values.');
        }
    }

    // Method to handle the specific logic for division -- strict check for ZERO (0.0).
    private function operateDivision(float $num1, float $num2): float
    {
        if ($num2 === 0.0) {
            throw new Exception("Math Error: Cannot divide by zero.");
        }
        return $num1 / $num2;
    }
}
?>