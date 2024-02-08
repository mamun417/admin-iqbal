<p align="center">
School Software
</p>

## Framework used

- Laravel v8.X
- Bootstrap v4.0

## Server Requirements

- PHP >= ^7.3|^8.0,
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

Here are some basic steps to start using this application

- Copy the contents of the `.env.example` file to create `.env` in the same directory

- Run `composer install` for `developer` environment and run `composer install --optimize-autoloader --no-dev`
  for `production` environment to install Laravel packages (Remove **Laravel Debugbar**, **Laravel Log viewer** packages
  from **composer.json** and

from `config/app.php` before running **`composer install`** in **Production Environment**)

- Generate `APP_KEY` using `php artisan key:generate`

- Edit the database connection configuration in .env file e.g.

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sms
DB_USERNAME=root
DB_PASSWORD=secret
```

> Note that this is just an example, and the values may vary depending on your database environment.

- Set the `APP_ENV` variable in your `.env` file according to your application environment (e.g. local, production)
  in `.env` file

- Migrate your Database with `php artisan migrate`

- Seed your Database with `php artisan db:seed`

- On localhost, serve your application with `php artisan serve`

--------------------------------------------------------------------
