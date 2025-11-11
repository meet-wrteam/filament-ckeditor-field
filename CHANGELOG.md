# Changelog

All notable changes to `filament-ckeditor-field` will be documented in this file.

## [0.1.0-alpha] - 2024-XX-XX

### Added
- Confirmed both Spatie and Solutions Forest's translatable plugins function

## [0.0.7-alpha] - 2024-XX-XX

### Fixed
- Fixed a 3.0 installation error
- Fixed multiple CKEditors on a single resource

### Changed
- Removed the URL from the name variable
- Removed image upload if no URL is specified; Linking images by URL is still possible via Insert -> Image

### Added
- Added disabled behavior for default infolists and disabled attributes

## [0.0.6-alpha] - 2024-09-16

- Merge branch 'develop'

## [0.0.4-alpha] - 2024-01-07

### Fixed
- Fix for dark mode (#4)
- Fix for required field not displaying error (#6)

## [0.0.1-alpha] - 2024-09-30

### Added
- Initial Release

**Note:** v0.0.1-alpha should be clear enough that this release is infrequently tested in internal projects. This should not be considered ready for production.

The basic MVP includes:
- CKEditor functions in SPA mode
- CKEditor functions in non-SPA mode
- Images dragged/dropped use CKEditor's simple upload adapter to POST images to a developer's desired route
- An X padding update to test custom styling from the plugin
