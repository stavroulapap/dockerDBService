# Test Repository for experimenting with Docker Services (NGinx, MariaDB) - dockerDBService

In this repository we will walk you through the process of deploying a PHP web application using Docker Compose, Nginx as the web server, and MariaDB as the database.

Let’s dive into the steps to create and deploy this PHP web application.

## Step 1 — Create a Nginx Container

We will set up an Nginx container to host our PHP application with the following steps:

1. Create a directory for our project and navigate to it:
```bash
mkdir docker-project
cd docker-project
```

2. Create a `docker-compose.yml` script for launching the Nginx container:
```bash
nano docker-compose.yml
```
The configuration of the code is in the `docker-compose.yml` script above on this repository.
This configuration ensures that the Nginx container runs on port 7000:80.

3. Launch the Nginx container:
```bash
docker-compose up -d
```
If everything works perfect with the above command, it will be appeared the following statement:
```bash
Starting nginx-container ... done
```

4. Verify that the Nginx container is running:
```bash
docker ps
```
And we will see this output:
```bash
CONTAINER ID   IMAGE          COMMAND                  CREATED        STATUS         PORTS                                   NAMES
c5ebf401dd3c   nginx:latest   "/docker-entrypoint.…"   17 hours ago   Up 5 minutes   0.0.0.0:7000->80/tcp, :::7000->80/tcp   nginx-container
```
>In order to stop the running containers we use the command:
>- docker stop $(docker ps -aq)
>In order to remove all the containers we use the command:
>- docker rm $(docker ps -aq)
>Run the following command to make sure there are no active containers:
>- docker ps

5. Open our web browser and access our Nginx container using the URL `http://localhost:7000` ,with the port 7000 and we will see the Nginx page.
   
## Step 2 — Create a PHP Container









