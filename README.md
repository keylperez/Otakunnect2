# OtaKunnect

app description here

## Getting started

Fork or Clone repo

```
gh repo fork https://github.com/keylperez/Otakunnect2 --clone

```

Install PHP dependencies:

```
composer install
```

Install NPM dependencies:

```
npm ci
```

Build assets:

```
npm run dev
```

Setup configuration:

```
cp .env.example .env
```

Generate application key:

```
php artisan key:generate
```

Make a OtaKunnect database and then do the following:

Run database migrations:

```
php artisan migrate
```

Run database seeder:

```
php artisan db:seed
```

Run the dev server (the output will give the address):

```
php artisan serve
```

To login, use this dummy acc:

-   **Username:** kris_admin@gmail.com
-   **Password:** admin

## Stack

-   Vue3
-   Inertia.js
-   Laravel
-   Tailwindcss
