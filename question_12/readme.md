# Asynchronous Processing with Redis and MailHog

This Docker Compose configuration allows you to set up asynchronous processing using Redis as a message queue and MailHog for email testing. It includes three services:

1. Redis: A key-value store used as a message queue for asynchronous task processing.
2. MailHog: An email testing tool that captures outgoing emails for inspection via a web interface.
3. Main Application: A PHP script that sends tasks (e.g., email sending requests) to the Redis queue.
4. Worker: A PHP script that listens to the Redis queue, fetches tasks, and processes them (e.g., sending emails using MailHog) in the background.

## Prerequisites

- Docker: Install Docker according to your operating system by following the instructions on [Docker's official website](https://docs.docker.com/get-docker/).
- Docker Compose: Install Docker Compose as per the instructions [here](https://docs.docker.com/compose/install/).

## Usage

1. Clone this repository to your local machine:

    ```bash
    git clone <repository_url>
    ```

2. Navigate to the project directory:

    ```bash
    cd asynchronous-processing-redis-mailhog
    ```

3. Start the Docker containers using Docker Compose:

    ```bash
    docker-compose up -d
    ```

4. The Redis server, MailHog, main application, and worker containers should now be running in the background.

5. To send a task (e.g., an email sending request), you can execute the `send_task.php` script within the `main_application` directory. Modify this script according to your task requirements.

    ```bash
    docker-compose exec main_application php send_task.php
    ```

6. You can view the emails sent by the worker script using MailHog's web interface. Open your web browser and go to `http://localhost:8025`.

7. To stop the containers and remove the resources (containers, networks, volumes, and images) created by Docker Compose, run:

    ```bash
    docker-compose down
    ```


## Notes

- Ensure that no other services are running on the default ports used by Redis (6379) and MailHog (1025 for SMTP and 8025 for the web interface) to avoid conflicts.
- Make sure to adjust the email sending logic in the `send_task.php` and `worker.php` scripts according to your SMTP server settings if you intend to use a different email sending service instead of MailHog in a production environment.

