This purpose of this repository is to familiarize oneself with the basics of container creation and connectivity between containers. Below you will find intstuctions to ensure the proper working order of your multi-service docker network.

# Instructions
## Step 0 - Personalizing your DB

You can edit the contents of the `docker-compose.yml` to edit the ports and DB information if you would so like. Below are the default values:

```
MYSQL_ROOT_PASSWORD: root
MYSQL_DATABASE: docker_db
MYSQL_USER: uniwa
MYSQL_PASSWORD: pada
```
If you do decide to edit these, please refer to Step 2 for further guidance.

## Step 1 — Initialize the docker containers

The necessary commands are listed under `commands.txt`. You can use the `cat commands.txt` command to easily copy and paste as you go along.
To initialize the docker containers, execute the following command:
```bash
docker compose -f docker-compose.yaml up -d
```
To ensure everything is in working order, you should see 3 containers when using the following command.

```bash
docker ps
```

## Step 2 — Ownership of the mounted local volume

In case of changes to the defaul DB parametres, you will need to change their references in the `index.php`file as well. To do so, you will require the necessary permissions to edit the `index.php` file, by executing:

```bash
sudo chown -R <@user> php
```
where `<@user>` is your system user.

## Step 3 - Populating your Database

Using a browser of your choice, connect to PHPMyAdmin via link:localhost:8083[localhost:8083] and create your first table in `docker_db`. You can find a prepared example in `create_db.sql` .

## Step 4 - Database View

Once your table is populated, you can view the results in link:localhost:8000[localhost:8000].

## Step 5 - Shutdown containers

Finally, you can call it quits by executing the following:

```bash
docker compose -f docker-compose.yaml down
```










