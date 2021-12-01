# laravel-reading-time

[![Latest Stable Version](https://poser.pugx.org/logiek/laravel-reading-time/v/stable)](https://packagist.org/packages/logiek/laravel-reading-time) [![Total Downloads](https://poser.pugx.org/logiek/laravel-reading-time/downloads)](https://packagist.org/packages/logiek/laravel-reading-time) [![License](https://poser.pugx.org/logiek/laravel-reading-time/license)](https://packagist.org/packages/logiek/laravel-reading-time) [![PHP Version Require](http://poser.pugx.org/logiek/laravel-reading-time/require/php)](https://packagist.org/packages/logiek/laravel-reading-time)

This package makes it easy to calculate the estimated reading time for a given piece of content with Laravel.

## Installation

You can install the package via Composer:

``` bash
composer require logiek/laravel-reading-time
```

The package will automatically register itself. Optionally you can publish the config file with:

```bash
php artisan vendor:publish --provider="Logiek\ReadingTime\ReadingTimeServiceProvider" --tag="config"
```

## Usage

```php
use Logiek\ReadingTime\ReadingTime;

echo (new ReadingTime())->slow('Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

// Using the container
echo app(ReadingTime::class)->average('Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

// Using the helper
echo reading_time()->fast('Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); 
echo reading_time('Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
```

## Changelog

Please see the [CHANGELOG](CHANGELOG.md) for more information about recent changes.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
