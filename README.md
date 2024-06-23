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
If you do decide to edit these, please refer to Step 1.5 for further guidance.

## Step 1 — Initialize the docker containers

To initialize the docker containers, execute the following command:
```bash
./up.sh
```
To ensure everything is in working order, you should see 3 containers when using the following command.

```bash
docker ps
```

## OPTIONAL - Step 1.5 — Ownership of the mounted local volume

In case of changes to the defaul DB parametres, you will need to change their references in the `index.php`file as well. To do so, you will require the necessary permissions to edit the `index.php` file.
The necessary command is listed under `command.txt`. You can use the `cat command.txt` command to easily copy and paste:

```bash
sudo chown -R <@user> php
```
where `<@user>` is your system user.

## Step 2 - Populating your Database

Using a browser of your choice, connect to PHPMyAdmin via link `localhost:8083` and create your first table in `docker_db`. You can find a prepared example in `create_db.sql` .

## Step 3 - Database View

Once your table is populated, you can view the results in link `localhost:8000`.

## Step 4 - Shutdown containers

Finally, you can call it quits by executing the following:

```bash
./shutdown.sh
```










