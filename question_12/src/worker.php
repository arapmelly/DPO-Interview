<?php

require_once __DIR__ . '/vendor/autoload.php';

use Predis\Client;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$redis = new Client([
    'scheme' => 'tcp',
    'host'   => 'redis',
    'port'   => 6379,
]);



while (true) {
    $taskJson = $redis->lpop('tasks');
    if ($taskJson) {
        $task = json_decode($taskJson, true);


        // Process the task
        if ($task['type'] === 'email') {
            $to = $task['data']['to'];
            $subject = $task['data']['subject'];
            $message = $task['data']['message'];

            // Configure PHPMailer to send emails
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'mailhog';
            $mail->Port = 1025;
            $mail->setFrom('sender@example.com', 'Sender Name');
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->Body = $message;

            // Send the email
            try {
                $mail->send();
                echo "Email sent to $to\n";
            } catch (Exception $e) {
                echo "Error sending email: {$mail->ErrorInfo}\n";
            }
        }
    } else {
        sleep(1); // If no tasks, wait for 1 second before checking again
    }
}
