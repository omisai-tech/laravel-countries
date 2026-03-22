# Laravel Countries

[![Latest Version on Packagist](https://img.shields.io/packagist/v/omisai/laravel-countries.svg?style=flat-square)](https://packagist.org/packages/omisai/laravel-countries)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=flat-square)](LICENSE)

Laravel adapter for [omisai/php-countries](https://github.com/omisai-tech/php-countries). It registers the `Omisai\Countries\Collection` in the Laravel service container and exposes it through a facade.

## Features

- Registers `Omisai\Countries\Collection` as a singleton in the container
- Resolves the collection by class name or the `countries` binding
- Provides a `Countries` facade
- Supports Laravel 11, 12, and 13

## Requirements

- PHP 8.2+
- Laravel 11, 12, or 13

Laravel 13 requires PHP 8.3+, which is enforced by Composer through Laravel's own package constraints.

## Installation

Install the package via Composer:

```bash
composer require omisai/laravel-countries
```

Laravel package discovery will register the service provider and facade automatically.

## Usage

Resolve the collection from the container:

```php
use Omisai\Countries\Collection;

$countries = app(Collection::class);
$names = $countries->getCountriesName();
```

Resolve it by binding name:

```php
$countries = app('countries');
```

Use the facade:

```php
use Omisai\Laravel\Countries\Facades\Countries;

$names = Countries::getCountriesName();
$hungary = Countries::getCountryByAlpha2('HU');
```

## Testing

Run the test suite using Pest:

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details on how to contribute to this project.

## Security

Please see [SECURITY.md](.github/SECURITY.md) for details on reporting security vulnerabilities.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).
