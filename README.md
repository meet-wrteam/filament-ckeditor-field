# Filament CKEditor Field

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kahusoftware/filament-ckeditor-field.svg?style=flat-square)](https://packagist.org/packages/kahusoftware/filament-ckeditor-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kahu-software-llc/filament-ckeditor-field/run-tests.yml?branch=2.x&label=tests&style=flat-square)](https://github.com/kahu-software-llc/filament-ckeditor-field/actions?query=workflow%3Arun-tests+branch%3A2.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kahu-software-llc/filament-ckeditor-field/fix-php-code-styling.yml?branch=2.x&label=code%20style&style=flat-square)](https://github.com/kahu-software-llc/filament-ckeditor-field/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/kahusoftware/filament-ckeditor-field.svg?style=flat-square)](https://packagist.org/packages/kahusoftware/filament-ckeditor-field)
[![License](https://img.shields.io/packagist/l/kahusoftware/filament-ckeditor-field.svg?style=flat-square)](LICENSE.md)

> **Note:** This branch (`2.x`) is specifically for FilamentPHP 4.x. If you're using FilamentPHP 3.x, please use the [`1.x` branch](https://github.com/kahu-software-llc/filament-ckeditor-field/tree/1.x).

# Features

-   CKEditor 5 integration for FilamentPHP 4 forms
-   Image upload support with configurable upload URLs
-   Highly customizable with fluent API
-   Non-premium features only (free and open-source)
-   Easy to configure and use

<br>

# Table of contents

- [Filament CKEditor Field](#filament-ckeditor-field)
- [Features](#features)
- [Table of contents](#table-of-contents)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
  - [Available methods](#available-methods)
    - [uploadUrl(`string` | `Closure` | `null` $uploadUrl)](#uploadurlstring--closure--null-uploadurl)
    - [name(`string` $name)](#namestring-name)
    - [placeholder(`string` $placeholder)](#placeholderstring-placeholder)
- [Testing](#testing)
- [Changelog](#changelog)
- [Contributing](#contributing)
- [Security Vulnerabilities](#security-vulnerabilities)
- [Credits](#credits)
- [License](#license)

<br>

# Installation

You can install the package via composer:

```bash
composer require kahusoftware/filament-ckeditor-field
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-ckeditor-field-config"
```

<br>

# Usage

Basic usage:

```php
use Kahusoftware\FilamentCkeditorField\CKEditor;

CKEditor::make('content')
    ->uploadUrl(null)
```

<br>

# Configuration

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

## Available methods

### uploadUrl(`string` | `Closure` | `null` $uploadUrl)
Sets the URL endpoint for image uploads. If not specified, the default upload URL from the config file will be used.

`uploadUrl` (Default: `null`)

### name(`string` $name)
Sets the name of the field. This will be used as the form field name.

`name` (Default: `'ckeditor'`)

### placeholder(`string` $placeholder)
Sets the placeholder text displayed in the editor when it's empty.

`placeholder` (Default: `'Type or paste your content here...'`)

<br>

# Testing

```bash
composer test
```

The test suite uses PestPHP and includes unit tests for field instantiation, method chaining, and configuration, as well as feature tests for rendering the field within Livewire components.

<br>

# Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

# Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

# Security Vulnerabilities

Please email [hello@kahusoftware.com](mailto:hello@kahusoftware.com) any security vulnerabilities to ensure they're promptly addressed.

# Credits

-   [Thomas Johnson](https://github.com/tominal)
-   [All Contributors](../../contributors)

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

&ast; *This open-source plugin is not affiliated with, endorsed, or sponsored by CKSource, and any references to CKEditor are solely for descriptive purposes under their respective copyrights and trademarks.*

We do encourage you to check out CKEditor's premium features for your own implementation of CKEditor as the developers have worked hard to bring us a wonderful rich editor.
