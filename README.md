![Laravel SPF.js](http://up.vbiran.ir/uploads/1716814929346864017_laravel-spfjs.png)

# Laravel SPF
Integrating SPF.js with Laravel

For Laravel 5.x

Laravel SPF package allows to bring awesome SPF.js to your Laravel app. Here is a description from SPF.js official doc :

> Structured Page Fragments — or SPF for short — is a lightweight JS framework for fast navigation and page updates from YouTube.

> Using progressive enhancement and HTML5, SPF integrates with your site to enable a faster, more fluid user experience by updating just the sections of the page that change during navigation, not the whole page. SPF provides a response format for sending document fragments, a robust system for script and style management, an in-memory cache, on-the-fly processing, and more.

## Installation

Install with composer:
```sh
composer require kamrava/laravel-spf
```
## Get Started
At the first, you need to download `spf.js` file manually and put it in your scripts sections in your laravel app.(probably in `scripts.blade.php` file!)

To add SPF to your site, include the JS file as I said in above and run `spf.init()`.

```html
<script>
  spf.init();
</script>
```

**Blade Files Structure**
`laravel-spf` will work with a convetion structure for blade files. As you know each HTML page consists of

`head` for meta tags as well as styles and title and etc..
`body` for your page body
`script` for javascript files

```html
resources/view/admin/users-list/partials/title.blade.php
resources/view/admin/users-list/partials/head.blade.php
resources/view/admin/users-list/partials/body.blade.php
resources/view/admin/users-list/partials/foot.blade.php
```

**License**

The MIT License (MIT). Please see License File for more information.
