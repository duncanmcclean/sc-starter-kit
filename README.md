<!-- statamic:hide -->

![Banner](https://raw.githubusercontent.com/doublethreedigital/sc-starter-kit/master/banner.png)

## Simple Commerce Starter Kit

<!-- /statamic:hide -->

This starter kit is the **recommended starting point** for building new Simple Commerce sites. It's also useful to test out Simple Commerce before committing to it.

It provides a minimal design which aims to demonstrate how features in Simple Commerce should be implemented & how they work. You're free to change as much or as little as you want or even just take snippets of code and pop them in your own project. The source code is available on [GitHub](https://github.com/doublethreedigital/sc-starter-kit).

**Note:** Remember to purchase a license from the [Statamic Marketplace](https://statamic.com/simple-commerce) before using Simple Commerce in production.

## Features

- Minimal design
- Step by step checkout process
- Built with TailwindCSS and Alpine.js
- Demonstrates Simple Commerce functionality
- Supports both standalone and variant products
- Includes basic product filtering

## Quick Start

### 1. Create a new site

You can create a new site using the [Statamic CLI Tool](https://github.com/statamic/cli):

```
statamic new artisan-bakery doublethreedigital/sc-starter-kit
```

### 2. Make a new user

The above installers should prompt you to make a user, but you can also run `php please make:user`. You'll want it to be a `super` so you have access to everything.

### 3. Recompile the CSS (optional)

The [TailwindCSS](https://tailwindcss.com/) included in this kit is compiled with [PurgeCSS](https://purgecss.com/) to reduce filesize on any unused classes and selectors. If you want to modify anything, just recompile it.

```
npm i && npm run dev
```

To compile for production again:

```
npm run production
```

### 4. Do your thing!

If you're using [Laravel Valet](https://laravel.com/docs/valet) (or similar), your site should be available at `http://awesome-ecom-site.test`. You can access the control panel at `http://artisan-bakery.test/cp` and login with your new user. Open up the source code, follow along with the [Statamic](https://statamic.dev)/[Simple Commerce](https://simple-commerce.duncanmcclean.com) documentation and enjoy!

## Front-end stack

Tailwind CSS & Alpine.js are used out-of-the-box but feel free to change them out if you're more comfortable with something else. For building CSS & JS, this starter kit uses [Laravel Mix](https://laravel.com/docs/master/mix). It's configured to compile one CSS file and one JS file.

- `resources/css/site.css` -> `public/css/site.css`
- `resources/js/site.js` -> `public/js/site.js`

There's also a few commands you can run to compile your assets for various environments.

- `npm run dev` - to compile your assets locally
- `npm run watch` - to compile your assets locally and start a watcher looking out for file changes
- `npm run production` - to compile and minify your assets, ready for production

---

For more information on using Simple Commerce, please review the [Simple Commerce documentation](https://simple-commerce.duncanmcclean.com).
