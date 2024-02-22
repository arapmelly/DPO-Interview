<?php

// Define large data structure (e.g., an array)
$largeData = [];
for ($i = 0; $i < 1000; $i++) {
    $largeData[] = [
        'id' => $i,
        'name' => 'Item ' . $i,
        'description' => 'Description for item ' . $i
    ];
}

// Serialize the data
$serializedData = serialize($largeData);

// Compress serialized data
$compressedData = gzcompress($serializedData);

// Save compressed data to a file
$file = 'compressed_data.dat';
file_put_contents($file, $compressedData);
echo "Data compressed and saved to $file\n";

// Read compressed data from file
$compressedData = file_get_contents($file);

// Decompress data
$serializedData = gzuncompress($compressedData);

// Unserialize data
$unserializedData = unserialize($serializedData);

// Display unserialized data
print_r($unserializedData);
