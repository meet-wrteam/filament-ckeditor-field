# Filament CKEditor Field

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wrteam/filament-ckeditor-field.svg?style=flat-square)](https://packagist.org/packages/wrteam/filament-ckeditor-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/meet-wrteam/filament-ckeditor-field/run-tests.yml?branch=master&label=tests&style=flat-square)](https://github.com/meet-wrteam/filament-ckeditor-field/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/wrteam/filament-ckeditor-field.svg?style=flat-square)](https://packagist.org/packages/wrteam/filament-ckeditor-field)
[![License](https://img.shields.io/packagist/l/wrteam/filament-ckeditor-field.svg?style=flat-square)](LICENSE.md)

> **Branches:** `master` (stable) | `dev` (development) — Supports FilamentPHP 4.x and 5.x.

# Features

-   CKEditor 5 integration for FilamentPHP 4 & 5 forms
-   Image upload support with configurable upload URLs
-   Full control over image upload handling - you implement your own upload endpoint
-   Configurable editor height
-   HTML preview toggle to verify rendered output
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
    - [height(`string` $height)](#heightstring-height)
    - [preview(`bool` $showPreview)](#previewbool-showpreview)
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

You can install the field via composer:

```bash
composer require wrteam/filament-ckeditor-field
```

**If not published on Packagist**, add the repository to your project's `composer.json`:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/meet-wrteam/filament-ckeditor-field"
    }
]
```

Then run:

```bash
composer require wrteam/filament-ckeditor-field:dev-master
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-ckeditor-field-config"
```

<br>

# Usage

Basic usage:

```php
use Wrteam\FilamentCkeditorField\CKEditor;

CKEditor::make('content')
    ->uploadUrl(null)
```

Full example with all options:

```php
use Wrteam\FilamentCkeditorField\CKEditor;

CKEditor::make('content')
    ->label('Content')
    ->required()
    ->uploadUrl('/api/upload-image')
    ->height('400px')
    ->preview()
    ->placeholder('Start writing your content...')
    ->columnSpanFull()
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
> **Note:** This field gives you freedom to handle image uploads yourself. You are responsible for creating your own upload endpoint that handles file validation, storage, and returns the appropriate response format. This design allows you to implement your own business logic, security measures, and storage solutions (local filesystem, S3, cloud storage, etc.).

This field uses CKEditor's [Custom Upload Adapter](https://ckeditor.com/docs/ckeditor5/latest/framework/deep-dive/upload-adapter.html), which requires your upload endpoint to return a JSON response containing the uploaded image URL(s).

**Expected Response Format:**

Your upload endpoint must return a JSON response with one of the following formats:

**Single image response:**
```json
{
    "url": "https://example.com/uploads/image.jpg"
}
```

**Responsive images response:**
```json
{
    "urls": {
        "default": "https://example.com/uploads/image.jpg",
        "500": "https://example.com/uploads/image1.jpg",
        "1000": "https://example.com/uploads/image2.jpg"
    }
}
```

**Example Laravel Controller:**

```php
use Illuminate\Http\Request;

public function uploadImage(Request $request)
{
    $request->validate([
        'upload' => 'required|image|max:2048',
    ]);

    $path = $request->file('upload')->store('uploads', 'public');
    $url = asset('storage/' . $path);

    return response()->json([
        'url' => $url
    ]);
}
```

For more details, see the [CKEditor Custom Upload Adapter documentation](https://ckeditor.com/docs/ckeditor5/latest/framework/deep-dive/upload-adapter.html#passing-additional-data-to-the-response).

### height(`string` $height)
Sets a fixed height for the editor area. Accepts any valid CSS height value.

`height` (Default: `null` — auto-expanding)

```php
CKEditor::make('content')
    ->height('300px')   // compact
    ->height('500px')   // medium
    ->height('800px')   // tall
```

### preview(`bool` $showPreview)
Enables a "Show Preview" toggle button below the editor. When clicked, it displays the rendered HTML output in a read-only panel — useful for verifying how content will look when displayed on the frontend.

`preview` (Default: `false`)

```php
CKEditor::make('content')
    ->preview()
```

The preview panel:
- Updates in real-time as you type
- Renders HTML with proper styling (Tailwind prose)
- Supports dark mode
- Can be toggled on/off by the user

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

If you discover a security vulnerability, please report it via [GitHub Issues](https://github.com/meet-wrteam/filament-ckeditor-field/issues) to ensure it is promptly addressed.

# Credits

-   [Meet (wrteam)](https://github.com/meet-wrteam)
-   [All Contributors](../../contributors)

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

&ast; *This open-source plugin is not affiliated with, endorsed, or sponsored by CKSource, and any references to CKEditor are solely for descriptive purposes under their respective copyrights and trademarks.*

We do encourage you to check out CKEditor's premium features for your own implementation of CKEditor as the developers have worked hard to bring us a wonderful rich editor.
