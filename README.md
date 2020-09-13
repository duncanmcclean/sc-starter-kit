TODO Screenshots

# Starter Kit for Simple Commerce

![Statamic 3.0+](https://img.shields.io/badge/Statamic-3.0+-FF269E?style=for-the-badge&link=https://statamic.com)

## About starter kit

## Features
* Step-by-step checkout flow
* Minimal design
* Built with [TailwindCSS](https://tailwindcss.com/)
* Made interactive with bits of [Alpine.js](https://github.com/alpinejs/alpine)

## Quick Start

1. Create site & install dependencies

```
git clone git@github.com:doublethreedigital/simple-commerce-starter.git rad-ecommerce-store
cd rad-ecommerce-store
rm -rf .git
composer install
cp .env.example .env && php artisan key:generate
```

2. Publish Simple Commerce's vendor assets. This will give you our default blueprints, fieldtypes and configuration file.

```
php artisan vendor:publish --provider="DoubleThreeDigital\SimpleCommerce\ServiceProvider"
```

3. Create your first user

```
php artisan make:user
```

4. Get Started!
