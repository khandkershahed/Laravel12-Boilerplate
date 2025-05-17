# Laravel Multi-Auth

Customized Laravel Breeze to support multi-auth (separate admin from user table), and multiple user roles.

## Installation

**Install project dependencies:**

`composer install`

`npm install`

**Copy .env from Example and Edit:**

`cp .env.example .env`

**Generate a new application key:**

`php artisan key:generate`

**Copy Database Seeders from Examples and Edit:**

`cp database/seeders/AdminSeeder.php.example database/seeders/AdminSeeder.php`

`cp database/seeders/UserSeeder.php.example database/seeders/UserSeeder.php`

**Run database migrations:**

`php artisan migrate --seed`

## Usage

Admin Login

`http://localhost:8000/admin/login`