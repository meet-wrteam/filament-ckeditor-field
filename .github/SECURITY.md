# Security Policy

## Supported Versions

We actively support the following versions of this package with security updates:

| Version | Supported          |
| ------- | ------------------ |
| 1.x.x   | :white_check_mark: |
| < 1.0   | :x:                |

## Reporting a Vulnerability

If you discover a security vulnerability, please **do not** open a public issue. Instead, please report it via [GitHub Issues](https://github.com/meet-wrteam/filament-ckeditor-field/issues).

Please include the following information in your report:

- A description of the vulnerability
- Steps to reproduce the vulnerability
- The potential impact of the vulnerability
- Any suggested fixes or mitigations

## Response Timeline

- **Initial Response**: Within 48 hours
- **Status Update**: Within 7 days
- **Fix Release**: Depends on severity, but typically within 30 days

## Security Best Practices

When using this package, please follow these security best practices:

1. **Keep dependencies updated**: Regularly update this package and its dependencies
2. **Validate user input**: Always validate and sanitize content from CKEditor fields
3. **Use HTTPS**: Ensure your application uses HTTPS in production
4. **Content Security Policy**: Implement appropriate CSP headers for your application
5. **File uploads**: If using image uploads, validate file types and sizes server-side

## Security Updates

Security updates will be released as patch versions (e.g., 1.0.1, 1.0.2) and will be documented in the [CHANGELOG](CHANGELOG.md).

Thank you for helping keep this package and its users safe!

