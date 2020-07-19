# Simple Commerce Starter Kit

This is a starter kit for [Simple Commerce](https://github.com/doublethreedigital/simple-commerce), an e-commerce addon for Statamic. The starter kit has some boilerplate views, routing for the cart and checkout and has Simple Commerce pre-installed.

## Quick Start

1. Create the site and install dependencies

```
git clone git@github.com:doublethreedigital/simple-commerce-starter.git rad-ecommerce-store
cd rad-ecommerce-store
rm -rf .git
composer install
cp .env.example .env && php artisan key:generate
```

2. Create your first user

```
php artisan make:user
```

5. **Build your site!**