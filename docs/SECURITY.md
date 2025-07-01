# Security Policy

## Supported Versions

We release patches for security vulnerabilities. Which versions are eligible for receiving such patches depends on the CVSS v3.0 Rating:

| Version | Supported          |
| ------- | ------------------ |
| 2.0.x   | :white_check_mark: |
| 1.0.x   | :x:                |

## Reporting a Vulnerability

We take the security of the Investment Book project seriously. If you believe you have found a security vulnerability, please report it to us as described below.

### Reporting Process

1. **Do not create a public GitHub issue** for the vulnerability.
2. **Email us directly** at security@zajwal.com with the subject line `[SECURITY] Vulnerability Report`.
3. **Include detailed information** about the vulnerability:
   - Description of the vulnerability
   - Steps to reproduce
   - Potential impact
   - Suggested fix (if any)
   - Your contact information

### What to Include in Your Report

Please provide as much information as possible:

- **Vulnerability Type**: (e.g., XSS, SQL Injection, CSRF, etc.)
- **Affected Component**: (e.g., specific file, function, or feature)
- **Severity**: (Low, Medium, High, Critical)
- **Proof of Concept**: (if possible, without exploiting the vulnerability)
- **Environment**: (browser, operating system, PHP version, etc.)

### Response Timeline

- **Initial Response**: Within 48 hours
- **Status Update**: Within 1 week
- **Resolution**: Depends on severity and complexity

### Responsible Disclosure

We follow responsible disclosure practices:

1. **Private Reporting**: All security reports are handled privately
2. **Timely Response**: We respond to all reports within 48 hours
3. **Collaboration**: We work with reporters to understand and fix issues
4. **Credit**: We credit security researchers in our security advisories
5. **No Legal Action**: We will not take legal action against security researchers

## Security Best Practices

### For Users

1. **Keep Updated**: Always use the latest version of the application
2. **Secure Hosting**: Use HTTPS and secure hosting environments
3. **Regular Backups**: Maintain regular backups of your data
4. **Access Control**: Limit access to sensitive directories
5. **Monitoring**: Monitor logs for suspicious activity

### For Developers

1. **Input Validation**: Always validate and sanitize user input
2. **Output Encoding**: Encode output to prevent XSS attacks
3. **SQL Injection**: Use prepared statements or parameterized queries
4. **CSRF Protection**: Implement CSRF tokens for forms
5. **Secure Headers**: Use security headers (HSTS, CSP, etc.)

## Security Features

### Implemented Security Measures

- **Input Sanitization**: All user inputs are sanitized
- **CSRF Protection**: CSRF tokens for all forms
- **XSS Prevention**: Output encoding and content security policy
- **SQL Injection Prevention**: Prepared statements and parameterized queries
- **Security Headers**: HSTS, CSP, X-Frame-Options, etc.
- **Access Control**: Directory protection and file permissions
- **Error Handling**: Secure error messages without information disclosure

### Security Headers

The application implements the following security headers:

```apache
Header always set X-Content-Type-Options nosniff
Header always set X-Frame-Options DENY
Header always set X-XSS-Protection "1; mode=block"
Header always set Referrer-Policy "strict-origin-when-cross-origin"
```

## Known Vulnerabilities

### Fixed in Version 2.0.0

- **Google Analytics Code Inconsistency**: Fixed unified tracking code across all pages
- **Author Name Inconsistency**: Standardized author name display
- **Broken Links**: Fixed navigation and internal links
- **Mobile Responsiveness**: Improved mobile layout and functionality

### Current Status

- **No Known Vulnerabilities**: As of the latest release
- **Regular Security Audits**: Conducted monthly
- **Dependency Updates**: Monitored and updated regularly

## Security Updates

### How to Update

1. **Backup**: Always backup before updating
2. **Download**: Get the latest version from GitHub
3. **Replace**: Replace files with new versions
4. **Test**: Test functionality after update
5. **Monitor**: Monitor for any issues

### Update Notifications

- **Security Advisories**: Published on GitHub
- **Email Notifications**: For critical vulnerabilities
- **Release Notes**: Include security fixes

## Contact Information

### Security Team

- **Email**: security@zajwal.com
- **Response Time**: Within 48 hours
- **Language**: English and Arabic supported

### Additional Contacts

- **General Support**: support@zajwal.com
- **Bug Reports**: Use GitHub Issues
- **Feature Requests**: Use GitHub Discussions

## Acknowledgments

We thank all security researchers who have responsibly reported vulnerabilities to us. Your contributions help make the Investment Book project more secure for everyone.

### Hall of Fame

- Security researchers who have reported vulnerabilities
- Contributors to security improvements
- Community members who help maintain security

## Legal

By reporting a security vulnerability, you agree to:

1. **Responsible Disclosure**: Not disclose the vulnerability publicly until it's fixed
2. **No Exploitation**: Not exploit the vulnerability beyond what's necessary to demonstrate it
3. **Cooperation**: Work with us to understand and fix the issue
4. **No Legal Action**: We will not take legal action against responsible security researchers

---

**Note**: This security policy is subject to change. Please check back regularly for updates. 