# Laravel Template Integration

## How to use

1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your `APP_URL` to `http://127.0.0.1:8000 in your` `.env` file. This is needed for Spatie Media Library correctly resolve asset URLs.
1. `php artisan migrate --seed`. This will migrate the database and run any seeders necessary. 
1. `npm install`
1. `npm run dev`
1. `php artisan serve`

# Used Packages

## Spatie Media Library 

I use [spatie/laravel-medialibrary](https://github.com/spatie/laravel-medialibrary) for storing images. 

## Laravel Livewire 

I use [livewire/livewire](https://laravel-livewire.com/docs) for component rendering.

## Orangehill Iseed

I use [orangehill/iseed](https://github.com/orangehill/iseed) for generating seeders from DB.


