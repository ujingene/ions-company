 > Laravel Livewire CRD Application built with Admin LTE

### Required Development Environment. 

Ensure your server/Machine meets the following requirements
- PHP = ^7.3|^8.0
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
-  PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

If on Windows best way to avoid indivual install is by installing [Xampp](https://www.apachefriends.org/download.html)

Have [Composer](https://www.apachefriends.org/download.html) Installed

For More info please visit [Official Laravel Documentation](https://laravel.com/docs/8.x/installation)

### Clone the App from github
```
git clone https://github.com/ujingene/ions-company.git

```
### copy the project folder into htdocs folder

### cd into your Project

```bash
cd into your project
```

### Install package Dependencies by executing

```bash
composer install
```

### Install NPM Dependencies to install admin LTE and Bootrap required to load the views
```bash
npm install && npm run dev
```

###  Create a copy of your .env file

```bash
cp .env.example .env
```

### Generate an app encryption key required to validate the application

```bash
php artisan key:generate
```

###  Create an empty database 
Can use **SequelPRo** for Mac or **DBeaver Community/MysqlWorkBench** on windows

### In the .env file, add database information to allow Laravel to connect to the database fill ou the following based on your database configurations

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### Migrate the database
```bash
php artisan migrate
```

### Seed the database (Admin User)

## Application Info
### Login Usinfg
email: admin@admin.com
Password: password
### Author

[Eugene Wanjira](http://www.github.com/ujingene)

### Version

1.0.0

### License

This project is licensed under the MIT License