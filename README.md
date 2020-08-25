Digital Warehouse
=======

## Quick start

1 - Clone the repo:

```bash
git@github.com:RogerioNocchelli/digital-warehouse.git
```

2 - Change to the directory created

```bash
cd digital-warehouse/
```
3 - Composer Install

```bash
composer install
```

4 - Npm Install

```bash
npm install
```

5 - Adjust the access data to the MySql database in the .env file located at the root of the project.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=33060
DB_DATABASE=warehouse_database
DB_USERNAME=homestead
DB_PASSWORD=secret
```

6 - Install laravel
```bash
composer global require laravel/installer
```


7 - Execute the migrations
```bash
php artisan migrate
```

8 - Start PHP Built-in web server:

```bash
php -S 127.0.0.1:8089 -t public/
```

## Run Docker (Windowns)

1 - Download and install the docker app 

```bash
https://download.docker.com/win/stable/Docker%20Desktop%20Installer.exe
```

2 - Install laravel globally

```bash
composer global require laravel/installer
```

3 - Clone the repo:

```bash
git@github.com:RogerioNocchelli/digital-warehouse.git
```

4 - Change to the directory created

```bash
cd digital-warehouse/
```

5 - Create the project configuration file

```bash
vim .env
```

6 - Compile the image with the following command

```bash
docker-compose build app
```

7 - Run the environment

```bash
docker-compose up -d
```

8 - Run the commands

```bash
docker-compose exec app php artisan key:generate
```
```bash
docker-compose exec app php artisan migrate
```


