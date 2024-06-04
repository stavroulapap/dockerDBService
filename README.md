# Test Repository for experimenting with Docker Services (NGinx, MariaDB) - dockerDBService

In this repository we will walk you through the process of deploying a PHP web application using Docker Compose, Nginx as the web server, and MariaDB as the database.

Let’s dive into the steps to create and deploy this PHP web application.

## Step 1 — Create a Nginx Container

We will set up an Nginx container to host our PHP application with the following steps:

1. Create a directory for your project and navigate to it:
```bash
~$ mkdir docker-project
~$ cd docker-project
```

2. Create a `docker-compose.yml` file for launching the Nginx container:
```bash
nano docker-compose.yml
```
The configuration of the code is in the `docker-compose.yml` file above on this repository.
This configuration ensures that the Nginx container runs on port 7000:80.

3. Launch the Nginx container:
```bash
docker-compose up -d
```
4. Verify that the Nginx container is running:

```bash
docker ps
```
5. Open your web browser and access your Nginx container using the URL `http://localhost:7000` with the port 7000 and we see the Nginx page.
   
## Step 2 — Create a PHP Container









