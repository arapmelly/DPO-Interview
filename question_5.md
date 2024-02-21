### How would you protect a PHP application from common security vulnerabilities such as SQL injection and cross-site scripting (XSS)? Provide code examples or best practices for mitigating these threats

1.  **Cross-Site Scripting (XSS)**:
    
    -   **Description**: XSS attacks occur when client-side code (usually JavaScript) gets injected into the output of your PHP script.
    -   **Mitigation**:
        -   Always sanitize user input before displaying it in HTML output.
        -   Use  `htmlspecialchars()`  to escape special characters and prevent script execution.
        -   Example:
            
           
            
            ```php
            $search = $_GET['search'] ?? null;
            echo 'Search results for ' . htmlspecialchars($search, ENT_QUOTES, 'UTF-8');
            
            ```    
        -   In the above example,  `ENT_QUOTES`  escapes both single and double quotes, and  `'UTF-8'`  ensures compatibility.
2.  **SQL Injection**:
    
    -   **Description**: SQL injection occurs when malicious SQL parts are injected into your existing SQL statement.
    -   **Mitigation**:
        -   Use prepared statements (parameterized queries) with placeholders.
        -   Example:
            ```php
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Using prepared statement
            $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->execute(['username' => $username]);
            $user = $stmt->fetch();
            
            if ($user && password_verify($password, $user['password'])) {
                // User authenticated
            } else {
                // Invalid credentials
            }
            ```