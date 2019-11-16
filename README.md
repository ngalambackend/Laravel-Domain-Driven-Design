### Deployment Steps
1. Clone this repository
2. Run `composer install`
3. Run `cp .env.example .env`
4. Run `php artisan key:generate`
5. Adjust your `APP_ENV` value based on your deployment environment
6. Run `php artisan migrate` to migrate database schemas
7. Optimize app with following commands :
    + `php artisan route:cache`
    + `php artisan config:cache`
    + `composer dumpautoload --optimize`
