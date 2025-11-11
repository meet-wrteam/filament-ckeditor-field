# A basic CKEditor 5 form field configured with non-premium features. *

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kahusoftware/filament-ckeditor-field.svg?style=flat-square)](https://packagist.org/packages/kahusoftware/filament-ckeditor-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kahu-software-llc/filament-ckeditor-field/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kahu-software-llc/filament-ckeditor-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kahu-software-llc/filament-ckeditor-field/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kahu-software-llc/filament-ckeditor-field/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kahusoftware/filament-ckeditor-field.svg?style=flat-square)](https://packagist.org/packages/kahusoftware/filament-ckeditor-field)
[![License](https://img.shields.io/packagist/l/kahusoftware/filament-ckeditor-field.svg?style=flat-square)](LICENSE.md)



This repository enables FilamentPHP forms to use CKEditor 5 and its many free features without much configuration.

&ast; *This open-source plugin is not affiliated with, endorsed, or sponsored by CKSource, and any references to CKEditor are solely for descriptive purposes under their respective copyrights and trademarks.*

We do encourage you to check out CKEditor's premium features for your own implementation of CKEditor as the developers have worked hard to bring us a wonderful rich editor. 

## Installation

You can install the package via composer:

```bash
composer require kahusoftware/filament-ckeditor-field
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-ckeditor-field-config"
```
<!--

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-ckeditor-field-views"
```

-->
This is the contents of the published config file:

```php
return [
    /**
     * Image upload enabled
     */
    'upload_enabled' => true,

    /**
     * Image URL to upload to if one is not specified on the form field's ->uploadUrl() method
     */
    'upload_url' => null,
];
```

## Usage

```php
use Kahusoftware\FilamentCkeditorField\CKEditor;

CKEditor::make('content')
    ->uploadUrl(null)
```

## Testing

```bash
composer test
```

The test suite uses PestPHP and includes unit tests for field instantiation, method chaining, and configuration, as well as feature tests for rendering the field within Livewire components.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please email [hello@kahusoftware.com](mailto:hello@kahusoftware.com) any security vulnerabilities to ensure they're promptly addressed.

## Credits

- [Thomas Johnson](https://github.com/tominal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
