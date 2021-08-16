<!-- statamic:hide -->

![Banner](https://raw.githubusercontent.com/doublethreedigital/sc-starter-kit/master/banner.png)

## Starter Kit

<!-- /statamic:hide -->

This starter kit is the recommended starting place for creating Simple Commerce sites. It includes a minimal, boilerplate design which demonstrates most of the features and functionality Simple Commerce has to offer. You're free to make any changes you want, even redesign the whole front-end to build what you need to build.

This repository contains the source code for the starter kit. However, to use Simple Commerce in production, please remember to [purchase a Simple Commerce license](https://statamic.com/simple-commerce).

## Features

* Minimal design
* Step by step checkout process
* Built with TailwindCSS and Alpine.js
* Demonstrates Simple Commerce functionality
* Supports both standalone and variant products
* Includes basic product filtering

## Quick Start

1. Create site & install dependencies

```
git clone git@github.com:doublethreedigital/simple-commerce-starter.git bobs-sweet-shop
cd bobs-sweet-shop
rm -rf .git
composer install
cp .env.example .env && php artisan key:generate
npm install && npm run dev
```

2. Publish Simple Commerce's vendor assets. This will publish Simple Commerce's Control Panel assets and translations.

```
php artisan vendor:publish --provider="DoubleThreeDigital\SimpleCommerce\ServiceProvider"
```

3. Create your first user

```
php please make:user
```

4. Get Started!

## Build Process

This starter kit uses [Laravel Mix](https://laravel.com/docs/master/mix) to build & compile assets. Out of the box, it ships with one stylesheet and one JavaScript file.

* `resources/css/site.css` -> `public/css/site.css`
* `resources/js/site.js` -> `public/js/site.js`

There's also a few commands you can run to compile your assets for various environments.

* `npm run dev` - to compile your assets locally
* `npm run watch` - to compile your assets locally and start a watcher looking out for file changes
* `npm run production` - to compile and minify your assets, ready for production

You can of course customise this setup however you want.

---

For more information on using Simple Commerce, please [review the documentation](https://sc-docs.doublethree.digital).
