Digital Warehouse
=======

## Quick start

1 - Clone the repo:

```bash
git@github.com:RogerioNocchelli/git@github.com:RogerioNocchelli/digital-warehouse.git.git
```

2 - Change to the directory created

```bash
cd digital-warehouse/
```
4 - Composer Install

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


6 - Execute the migrations
```bash
php artisan migrate
```

5 - Start PHP Built-in web server:

```bash
php -S 127.0.0.1:8089 -t public/
```
