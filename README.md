# Ecommerce Project by Laravel

## Project setup
Install node_modules.
```
npm install
```

Install Laravel Composer in your project folder, command in your terminal. 
```
composer install
```

Create .env file just command in your terminal:
```
cp .env.example .env
```
Database name set in your local server.
```
ecommerce
```

Or Customize your .env file & .env.example
```
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=root
```

Navigate your project then command in your terminal, **database migrate & seed** 

*This command is useful for completely building your database:*
```
php artisan migrate:fresh --seed
```

Laravel key:Generate in your project
```
php artisan key:generate
```
Navigate your project then command in your terminal:
``` 
php artisan serve
```

Compiles and reloads for development
``` 
npm run watch or npm run dev
```
Happy Coding :)


Compiles and minifies for production
```
npm run prod or npm run production (build your site)
```

After build your site then Remove 
```
  * node_modules,
  * package-lock.json,
  * js folder in your resources folder, 
  * sass folder in your resources folder

```

### Admin Panel Access

## Login
```
http://127.0.0.1:8000/login
User Name: admin@gmail.com
pass:123456
```

## Admin panel
```
http://127.0.0.1:8000/admin
```