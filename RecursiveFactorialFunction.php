<?php

// Recursive function to calculate factorial
function factorial($n)
{
    // Base case: if n is 0 or 1
    if ($n <= 1) {
        return 1;
    }
    // Recursive case
    return $n * factorial($n - 1);
}

// Edge case: factorial of 0
echo "Factorial of 0 is " . factorial(0) . "\n"; // Output: 1

// Example case
echo "Factorial of 5 is " . factorial(5) . "\n"; // Output: 120
