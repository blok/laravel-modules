# Laravel-Modules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/blok/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/blok/laravel-modules)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/blok/laravel-modules/master.svg?style=flat-square)](https://travis-ci.org/blok/laravel-modules)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/blok/laravel-modules.svg?maxAge=86400&style=flat-square)](https://scrutinizer-ci.com/g/blok/laravel-modules/?branch=master)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/25320a08-8af4-475e-a23e-3321f55bf8d2.svg?style=flat-square)](https://insight.sensiolabs.com/projects/25320a08-8af4-475e-a23e-3321f55bf8d2)
[![Quality Score](https://img.shields.io/scrutinizer/g/blok/laravel-modules.svg?style=flat-square)](https://scrutinizer-ci.com/g/blok/laravel-modules)
[![Total Downloads](https://img.shields.io/packagist/dt/blok/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/blok/laravel-modules)

`blok/laravel-modules` is a Laravel package which manage your large Laravel app using module concept. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 5.

This package is a Fork, re-organised and adapted version of [nwidart/modules](https://github.com/nwidart/modules) and [pingpong/modules](https://github.com/pingpong/modules) to be inter-compatible with the Blok System Environment and structure.

## Install

To install through Composer, by run the following command:

``` bash
composer require blok/laravel-modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="Blok\Modules\LaravelModulesServiceProvider"
```

### Autoloading

By default the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}
```

**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Usage

### Creating a module

Creating a module is simple and straightforward. Run the following command to create a module.

``` bash
php artisan module:make <module-name>
```

Replace `<module-name>` by your desired name.

It is also possible to create multiple modules in one command.

``` bash
php artisan module:make Blog User Auth
```

By default when you create a new module, the command will add some resources like a controller, seed class, service provider, etc. automatically. If you don't want these, you can add `--plain` flag, to generate a plain module.

``` bash
php artisan module:make Blog --plain
# or
php artisan module:make Blog -p
```

## Naming convention

Because we are autoloading the modules using [psr-4](http://www.php-fig.org/psr/psr-4/), we strongly recommend using StudlyCase convention.

## Folder structure

```
app/
bootstrap/
vendor/
Modules/
  ├── Blog/
      ├── Assets/
      ├── Config/
      ├── Console/
      ├── Database/
          ├── Migrations/
          ├── Seeders/
      ├── Entities/
      ├── Http/
          ├── Controllers/
          ├── Middleware/
          ├── Requests/
          ├── routes.php
      ├── Providers/
          ├── BlogServiceProvider.php
      ├── Resources/
          ├── lang/
          ├── views/
      ├── Repositories/
      ├── Tests/
      ├── composer.json
      ├── module.json
      ├── start.php
```

For more infos you can [see the docs here](https://nwidart.com/laravel-modules/v4/).

## Credits

- [Daniel Sum](https://github.com/blok)
- [Nicolas Widart](https://github.com/nwidart)
- [gravitano](https://github.com/gravitano)
- [All Contributors](../../contributors)

## About Blok

Blok is a set of Laravel Package inter-compatible maintened by a dedicated digital agency.

## About Nicolas Widart

Nicolas Widart is a freelance web developer specialising on the Laravel framework. Don't hesitate to view all his awesome packages [on his website](https://nicolaswidart.com/projects).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
