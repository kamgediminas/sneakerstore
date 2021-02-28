start xampp / lampp for mysql

composer install

in .env:
DB_DATABASE=sneaker_store_database

php artisan migrate

php artisan db:seed

php artisan key:generate

php artisan serve
