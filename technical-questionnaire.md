#### Explain the difference between single-quoted and double-quoted strings in PHP. Provide examples of when you would use each.

 *Single-quoted:*
    *PHP does not attempt to parse any special characters within it*

     $name = 'John';
     echo 'Hello, $name!'; // Output: Hello, $name!

   *Double-quoted:*
	*PHP will parse them and replace variables with their values and also interpret escape sequences*
	
    $name = 'John';
    echo "Hello, $name!"; // Output: Hello, John!
