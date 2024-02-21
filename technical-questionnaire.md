1. **Explain the difference between single-quoted and double-quoted strings in PHP. Provide examples of when you would use each.**
    _**Single-quoted:**_
    _PHP does not attempt to parse any special characters within it_
    ``
        $name = 'John';
        echo 'Hello, $name!'; // Output: Hello, $name!
    ``
    _**Double-quoted:**_
	_PHP will parse them and replace variables with their values and also interpret escape sequences_
	``
    $name = 'John';
    echo "Hello, $name!"; // Output: Hello, John!
    ``
