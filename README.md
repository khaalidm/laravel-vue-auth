<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Application Setup
- Make sure php, npm and composer installed on your machine
- `git clone https://github.com/khaalidm/laravel-vue-auth.git`
- `cd laravel-vue-auth`
- `composer install`
- `npm install`


## Configure .env

- overwrite: `APP_URL=http://127.0.0.1`
- add: `MIX_APP_URL="${APP_URL}"`


## Setting up Authentication

- `php artisan jwt:secret`
- `php artisan key:generate`

## Run Application
Open two terminals:

- `php artisan serve`
- `npm run watch`

open browser @ http://127.0.0.1:8000




