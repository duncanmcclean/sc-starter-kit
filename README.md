<!-- statamic:hide -->

<p align="center">
<picture>
    <source srcset="./logo-dark.svg" media="(prefers-color-scheme: dark)">
    <img align="center" width="250" height="70" src="./logo-default.svg">
</picture>
</p>
<br>

## Simple Commerce Starter Kit

<!-- /statamic:hide -->

This starter kit is the **recommended starting point** for building new Simple Commerce sites. It's also useful to test out Simple Commerce before committing to it.

It provides a minimal design which aims to demonstrate how features in Simple Commerce should be implemented & how they work. You're free to change as much or as little as you want or even just take snippets of code and pop them in your own project. The source code is available on [GitHub](https://github.com/duncanmcclean/sc-starter-kit).

**Note:** Remember to purchase a license from the [Statamic Marketplace](https://statamic.com/simple-commerce) before using Simple Commerce in production.

## Features

- Minimal design
- Step by step checkout process
- Built with TailwindCSS and Alpine.js
- Demonstrates Simple Commerce functionality
- Supports both standalone and variant products
- Includes basic product filtering

## Quick Start

You can quickly create a new site using the [Statamic CLI](https://github.com/statamic/cli).

```
statamic new artisan-bakery duncanmcclean/sc-starter-kit
```

**And that should be you setup! 🎉**

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
