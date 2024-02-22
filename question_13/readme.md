# DPO Interview - Question 13

Write a PHP script that serializes a large data structure (e.g., an array or object), compresses it, saves it to a file, and then unserializes and decompresses the data from the file. You can use standard PHP functions for serialization and a compression library like zlib to achieve this.


## Usage

1. **Clone Repository:**

```
git clone https://github.com/arapmelly/DPO-Interview.git

```

2. **Navigate to Project Folder:**

```
cd DPO-Interview/question_13
```

3. **Run Docker Container:**

```
docker-compose up
```

This will start the PHP container and execute the `compress_serialize.php` script.

4. **View Output:**

The script will compress and serialize a large data structure (in this case, an array of items), save the compressed data to file, and then read, decompress, and unserialize the data. Finally, it will print the unserialized data structure.

## Files

- `compress_serialize.php`: PHP script that performs serialization, compression, saving to file, reading from file, decompression, and unserialization.
- `docker-compose.yml`: Docker Compose configuration file for running the PHP script in a Docker container.

## Requirements

- Docker
- Docker Compose





