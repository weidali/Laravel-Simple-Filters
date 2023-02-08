git clone
cp .env
set DB credentials
php artisan migrate --seed
php artisan test