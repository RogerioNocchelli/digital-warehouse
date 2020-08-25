Digital Warehouse
=======

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
docker-compose exec app composer install
```
```bash
docker-compose exec app php artisan key:generate
```
```bash
docker-compose exec app php artisan migrate
```

9 - Access the address

```bash
localhost:8800
```


