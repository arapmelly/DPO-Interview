### Create a PHP script that reads a text file, counts the number of words in the file, and displays the result. Ensure that your code handles file open and read errors gracefully.

```php
<?php
// Define the filename of the text file
$filename = 'text_file.txt';

try {
    // Open the file for reading
    $file = fopen($filename, 'r');
    if ($file === false) {
        throw new Exception("Error opening the file: $filename");
    }

    // Initialize an array to store word counts
    $wordCounts = [];

    // Read each line from the file
    while (!feof($file)) {
        $line = trim(fgets($file));
        if ($line === '') {
            continue; // Skip empty lines
        }

        // Split the line into words
        $words = explode(' ', $line);

        // Update word counts
        foreach ($words as $word) {
            $word = strtolower($word); // Convert to lowercase for case-insensitive counting
            if (!empty($word)) {
                $wordCounts[$word] = isset($wordCounts[$word]) ? $wordCounts[$word] + 1 : 1;
            }
        }
    }

    // Close the file
    fclose($file);

    // Display word counts
    foreach ($wordCounts as $word => $count) {
        echo "<b>$word</b> occurred $count times.<br>";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

```
