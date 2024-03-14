# CA2 Laravel VNL Blog By Raphael Frogoso

This repository is linked to [this youtube video](https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) where I show you how to create a complete blog in Laravel 8 using best practices.

•	Student Number: D00253581 <br>
•	Source Code: Code With Dary <br>
•	Author: Raphael Frogoso <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## References<br>
Below are websites I used codes from and inspirations for this project<br>
```
https://www.w3schools.com/
https://en.volleyballworld.com/volleyball/competitions/volleyball-nations-league/
https://www.sliderrevolution.com/resources/css-gallery/
https://github.com/CodeExplainedRepo/world-cup-2022-results-javascript/tree/main/src 
https://codepen.io/robstinson/pen/PoGyRgy?editors=1010
https://mdbootstrap.com/docs/standard/extended/gallery/

```

## Clone Repository for Project <br>
To access the laravel blog you must clone the link below: <br>
```
https://github.com/frogosorap/vnl-blog.git
```

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravel in xampp;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

## Run these codes on terminal to enable features <br>
Comment Feature<br>
```
php artisan config:clear
php artisan make:migration comment_table
php artisan make:controller CommentController
```

Update and Install Laravel Collective<br>
```
composer dump-autoload
php artisan route:clear
composer require "laravelcollective/html":"^6.0"
```

Run Tailwind<br>
```
npm run watch
```

Run Website<br>
````
php artisan serve
```

