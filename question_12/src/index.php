<?php

require_once __DIR__ . '/vendor/autoload.php';

use Predis\Client;

$redis = new Client([
    'scheme' => 'tcp',
    'host'   => 'redis',
    'port'   => 6379,
]);

// Example task
$task = [
    'type' => 'email',
    'data' => [
        'to' => 'recipient@example.com',
        'subject' => 'Hello from Redis Queue',
        'message' => 'This is an asynchronous email message sent via Redis Queue.'
    ]
];

$redis->rpush('tasks', json_encode($task));
echo "Task added to the queue.\n";
