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

The Simple Commerce Starter Kit is a great starting point to build bespoke e-commerce sites. You can either build on top of this Starter Kit or simply use it as a reference point for working with Simple Commerce's [Antlers Tags](https://simple-commerce.duncanmcclean.com/tags) (**recommended**).

Before deploying to production, please remember to purchase a license from the [Statamic Marketplace](https://statamic.com/simple-commerce).

## Quick Start

You can quickly create a new site using the [Statamic CLI](https://github.com/statamic/cli).

```
statamic new artisan-bakery duncanmcclean/sc-starter-kit
```

**And that should be you setup! 🎉**

## Front-end stack

Tailwind CSS & Alpine.js are used out-of-the-box but feel free to change them out if you're more comfortable with something else. For building CSS & JS, this starter kit uses [Vite](https://laravel.com/docs/9.x/vite). It's configured to compile one CSS file and one JS file.

-   `resources/css/site.css` -> `public/css/site.css`
-   `resources/js/site.js` -> `public/js/site.js`

There's also a few commands you can run to compile your assets for various environments.

-   `npm run dev` - runs a local watcher
-   `npm run build` - to build your CSS & JavaScript, ready for production

## Inspired by Peak

Parts of the Simple Commerce Starter Kit have been inspired/borrowed from the popular [Peak starter kit](https://github.com/studio1902/statamic-peak). If you're not familiar with Peak, I'd highly recommend checking it out.

If you want to use all the features in Peak, you should install the Peak Starter Kit first, then [install Simple Commerce on top](https://simple-commerce.duncanmcclean.com/installation#content-installing-into-an-existing-site).

---

For more information on using Simple Commerce, please review the [Simple Commerce documentation](https://simple-commerce.duncanmcclean.com).
