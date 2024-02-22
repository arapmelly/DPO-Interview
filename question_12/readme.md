## Question 12

Write a PHP script that performs asynchronous processing using a message queue system like RabbitMQ or Redis. The script should receive a task (e.g., an email sending request) and process it in the background without blocking the main application. Demonstrate how you would set up the message queue and create a worker script to handle the tasks

1. **Clone Repository:**

```
git clone https://github.com/arapmelly/DPO-Interview.git

```

2. **Navigate to Project Folder:**

```
cd DPO-Interview/question_12
```

3. **Run Docker Container:**

```
docker-compose up
```

This will start the PHP containers and run the mailhog application on **http://localhost:8025** .


## Requirements

- Docker
- Docker Compose


## Notes

- Ensure that no other services are running on the default ports used by Redis (6379) and MailHog (1025 for SMTP and 8025 for the web interface) to avoid conflicts.


