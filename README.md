
## test docus

- git clone `git@github.com:suro11777/test-docus.git`
- composer install
- create database test_docus
- copy .env.example to .env
- php artisan config:cache
- php artisan migrate
- php artisan db:seed RoleAndPermissionSeeder
- php artisan serve

