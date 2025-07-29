# Contributing

Thank you for considering contributing to the Filament CKEditor Field! This guide will help you set up a proper development environment and understand our contribution workflow.

## Table of Contents

- [Development Environment Setup](#development-environment-setup)
- [Local Development Approaches](#local-development-approaches)
- [Development Workflow](#development-workflow)
- [Testing](#testing)
- [Frontend Development](#frontend-development)
- [Code Standards](#code-standards)
- [Submitting Changes](#submitting-changes)

## Development Environment Setup

### Prerequisites

- PHP 8.1 or higher
- Composer 2.x
- Node.js 16+ and npm
- A Laravel application for testing (recommended: fresh Laravel + Filament installation)

### Quick Start

The fastest way to start contributing is to set up a local development environment using one of the methods below.

## Local Development Approaches

We recommend several approaches for local development, each with their own advantages:

### 🥇 Recommended: Composer Path Repository (Improved Method)

This is the most reliable and widely-used method for local PHP package development. Here's the improved version of your current approach:

1. **Set up the development environment:**
   ```bash
   # Directory structure should be:
   # ~/dev/
   # ├── filament-ckeditor-field/    (this package)
   # └── test-app/                   (Laravel app for testing)
   ```

2. **Configure composer.json in your test app:**
   ```json
   {
       "repositories": [
           {
               "type": "path",
               "url": "../filament-ckeditor-field",
               "options": {
                   "symlink": true
               }
           }
       ],
       "require": {
           "kahusoftware/filament-ckeditor-field": "@dev"
       }
   }
   ```

3. **Install with symlink preference:**
   ```bash
   composer update kahusoftware/filament-ckeditor-field --prefer-source
   ```

**Important:** Always use `"symlink": true` and `--prefer-source` to ensure changes are reflected immediately.

## Development Workflow

### 1. Fork and Clone

```bash
# Fork the repository on GitHub, then:
git clone https://github.com/YOUR-USERNAME/filament-ckeditor-field.git
cd filament-ckeditor-field
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Set Up Your Test Environment

Use one of the local development approaches above to create a test Laravel application.

### 4. Make Your Changes

- **PHP Code**: Located in `src/`
- **Frontend Assets**: Located in `resources/`
- **Configuration**: Located in `config/`
- **Views**: Located in `resources/views/`

### 5. Build Frontend Assets

When working with frontend assets:

```bash
# Development (watch for changes)
npm run dev

# Production build
npm run build
```

## Testing

todo

### Writing Tests

- Place tests in the `tests/` directory
- Follow PSR-4 autoloading standards
- Use descriptive test method names
- Test both happy path and edge cases

### Manual Testing

Create a test form in your Laravel application:

```php
// In a Filament resource or form
use Kahusoftware\FilamentCkeditorField\CKEditor;

public static function form(Form $form): Form
{
    return $form->schema([
        CKEditor::make('content')
            ->uploadUrl('/upload-endpoint')
            ->label('Content'),
    ]);
}
```

## Code Standards

### PHP Standards

- Follow PSR-12 coding standards
- Use meaningful variable and method names
- Add proper DocBlocks for public methods
- Maintain backward compatibility when possible

## Submitting Changes

### Before Submitting

**Test in a real application:**
   Ensure your changes work in an actual Laravel/Filament application.

### Pull Request Process

1. **Create a branch:**
   ```bash
   git checkout -b feature/your-feature-name
   ```

2. **Make your changes and commit:**
   ```bash
   git add .
   git commit -m "feat: add your feature description"
   ```

3. **Push to your fork:**
   ```bash
   git push origin feature/your-feature-name
   ```

4. **Create a Pull Request:**
   - Provide a clear title and description
   - Reference any related issues
   - Include screenshots for any UI changes

### Pull Request Guidelines

- **One feature per PR** - Keep changes focused and atomic
- **Include tests** - Add tests for new functionality
- **Update documentation** - Update README.md if needed
- **Breaking changes** - Clearly document any breaking changes
- **Screenshots** - Include screenshots for visual changes

## Community and Support

- **Issues**: Use GitHub Issues for bug reports and feature requests
- **Discussions**: Use GitHub Discussions for questions and ideas

## Development Resources

### Learning Resources

- [Laravel Package Development](https://laravel.com/docs/10.x/packages)
- [Spatie Package Tools](https://github.com/spatie/laravel-package-tools)
- [Filament Plugin Development](https://filamentphp.com/docs/3.x/support/plugins/getting-started)
- [CKEditor 5 Documentation](https://ckeditor.com/docs/ckeditor5/latest/)

## Questions?

If you have questions about contributing, feel free to:

- Open a [GitHub Discussion](https://github.com/Kahu-Software-LLC/filament-ckeditor-field/discussions)
- Email: [hello@kahusoftware.com](mailto:hello@kahusoftware.com)

Thank you for contributing to the Filament CKEditor Field! 🎉 
