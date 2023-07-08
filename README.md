# Coding Test Laravel

A laravel 10 based Coding Test Laravel

## Installation

```bash
git clone repo
cp .env.example .env
#Setup database

#Seed will create 1 super-admin, 1 admin,
#and initial quotes loaded to the database,
#spatial initial roles, and permissions.

php artisan migrate:fresh --seed

composer update
php artisan key:generate
```

```bash
#Log in with the below users

Username: superadmin@laravel.test
Password: superadmin

Username: admin@laravel.test
Password: adminadmin
```
