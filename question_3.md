 1. #### Explain the purpose of exception handling in PHP. How do you catch and handle exceptions in your code? Provide an example of how you would use try-catch blocks.
*Exceptions allow you to alter the normal flow of your code when specific error conditions arise. Instead of abrupt script termination, exceptions provide a structured way to handle errors. In PHP, you use `try`, `throw`, and `catch` blocks to handle exceptions*

    <?php
    // Create a function that throws an exception
    function checkNum($number) {
        if ($number > 1) {
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }
    
    try {
        // Call the function that may throw an exception
        checkNum(2);
        echo "If you see this, the number is 1 or below"; // This won't be executed
    } catch (Exception $e) {
        echo "Message: " . $e->getMessage(); // Handle the exception
    }
    ?>

