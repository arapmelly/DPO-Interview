### Using PHP, make a GET request to a sample REST API (e.g., JSONPlaceholder) to retrieve a list of users. Parse the JSON response and display the user's name and email address.

```php
<?php
// API endpoint URL (JSONPlaceholder users)
$apiUrl = 'https://jsonplaceholder.typicode.com/users';

// Fetch data from the API
$response = file_get_contents($apiUrl);

// Decode the JSON response
$users = json_decode($response);

// Display user information
echo "<h1>Users:</h1>";
foreach ($users as $user) {
    echo "<p>Name: {$user->name}</p>";
    echo "<p>Email: {$user->email}</p>";
    echo "<hr>";
}
?>

```
