# Support

Thank you for using the Investment Book project! This document provides information on how to get help and support.

## Getting Help

### Quick Start

If you're new to the project, start here:

1. **Read the README**: Check the main README.md file for installation and setup instructions
2. **Check Documentation**: Review the README_PHP.md for detailed technical information
3. **Try the Examples**: Look at the existing chapter files for examples

### Common Issues

#### Installation Problems

**Problem**: Composer dependencies won't install
```bash
# Solution: Clear composer cache and retry
composer clear-cache
composer install
```

**Problem**: npm dependencies won't install
```bash
# Solution: Clear npm cache and retry
npm cache clean --force
npm install
```

**Problem**: Permission errors on Linux/Mac
```bash
# Solution: Fix permissions
chmod -R 755 .
chmod -R 777 logs cache
```

#### Development Issues

**Problem**: Website not loading
- Check if PHP server is running: `php -S localhost:8000`
- Verify file permissions
- Check error logs in `logs/` directory

**Problem**: Assets not loading
- Run `npm run build` to compile assets
- Check if assets are in the correct directory
- Verify webpack configuration

**Problem**: Docker containers not starting
```bash
# Solution: Check Docker status and restart
docker-compose down
docker-compose up -d
```

## Support Channels

### GitHub Issues

For bug reports, feature requests, and general questions:

1. **Search existing issues** before creating a new one
2. **Use the appropriate template** when creating an issue
3. **Provide detailed information** including:
   - Operating system and version
   - PHP version
   - Node.js version
   - Steps to reproduce
   - Expected vs actual behavior

### Email Support

For urgent issues or private matters:

- **General Support**: support@zajwal.com
- **Technical Issues**: tech@zajwal.com
- **Security Issues**: security@zajwal.com
- **Conduct Issues**: conduct@zajwal.com

### Community Support

- **GitHub Discussions**: For questions and community help
- **Documentation**: Check the project documentation
- **Examples**: Look at existing chapter files

## Documentation

### Project Documentation

- **README.md**: Main project overview and quick start
- **README_PHP.md**: Detailed technical documentation
- **CHANGELOG.md**: Version history and changes
- **CONTRIBUTING.md**: How to contribute to the project
- **SECURITY.md**: Security policy and reporting

### Code Documentation

- **Inline Comments**: Code is heavily commented
- **PHPDoc**: PHP functions have documentation
- **JSDoc**: JavaScript functions have documentation
- **SCSS Comments**: Styles are documented

## Troubleshooting

### Common Error Messages

#### PHP Errors

**Error**: `Fatal error: Uncaught Error: Class 'X' not found`
- **Solution**: Run `composer install` to install dependencies

**Error**: `Warning: include(): Failed opening 'X' for inclusion`
- **Solution**: Check file paths and permissions

**Error**: `Parse error: syntax error, unexpected 'X'`
- **Solution**: Check PHP version compatibility (requires PHP 8.0+)

#### JavaScript Errors

**Error**: `Cannot find module 'X'`
- **Solution**: Run `npm install` to install dependencies

**Error**: `Unexpected token`
- **Solution**: Check browser compatibility or transpile code

#### Apache/Nginx Errors

**Error**: `404 Not Found`
- **Solution**: Check `.htaccess` file and mod_rewrite

**Error**: `500 Internal Server Error`
- **Solution**: Check PHP error logs and file permissions

### Performance Issues

#### Slow Loading

1. **Enable OpCache**:
   ```ini
   opcache.enable=1
   opcache.memory_consumption=128
   ```

2. **Optimize Assets**:
   ```bash
   npm run build
   ```

3. **Enable Compression**:
   - Gzip compression in web server
   - Minify CSS and JavaScript

#### Memory Issues

1. **Increase PHP Memory Limit**:
   ```ini
   memory_limit = 512M
   ```

2. **Optimize Images**:
   ```bash
   npm run optimize-images
   ```

3. **Use CDN**: Load Bootstrap and other libraries from CDN

## Development Environment

### Local Development

1. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

2. **Build Assets**:
   ```bash
   npm run build
   ```

3. **Start Server**:
   ```bash
   make dev
   ```

### Docker Development

1. **Start Containers**:
   ```bash
   make docker-up
   ```

2. **Access Services**:
   - Website: http://localhost:8080
   - phpMyAdmin: http://localhost:8081
   - MailHog: http://localhost:8025

3. **View Logs**:
   ```bash
   make logs
   ```

### Production Deployment

1. **Prepare for Production**:
   ```bash
   make prod-setup
   ```

2. **Deploy**:
   ```bash
   make deploy
   ```

3. **Monitor**:
   - Check error logs
   - Monitor performance
   - Verify functionality

## Feature Requests

### How to Request Features

1. **Search existing issues** to avoid duplicates
2. **Use the feature request template**
3. **Provide detailed description** of the feature
4. **Explain the benefit** to users
5. **Include mockups or examples** if possible

### Current Roadmap

See the CHANGELOG.md file for planned features and timeline.

## Bug Reports

### How to Report Bugs

1. **Use the bug report template**
2. **Include detailed steps** to reproduce
3. **Provide environment information**:
   - Operating system
   - Browser version
   - PHP version
   - Node.js version
4. **Include screenshots or logs** if relevant
5. **Test on different browsers/devices** if applicable

### Bug Report Template

```markdown
## Bug Description
Brief description of the bug

## Steps to Reproduce
1. Go to '...'
2. Click on '...'
3. Scroll down to '...'
4. See error

## Expected Behavior
What you expected to happen

## Actual Behavior
What actually happened

## Environment
- OS: [e.g. Windows 10, macOS, Linux]
- Browser: [e.g. Chrome, Firefox, Safari]
- PHP Version: [e.g. 8.2]
- Node.js Version: [e.g. 18]

## Additional Information
Any other context, screenshots, or logs
```

## Contributing

### How to Contribute

1. **Fork the repository**
2. **Create a feature branch**
3. **Make your changes**
4. **Test thoroughly**
5. **Submit a pull request**

See CONTRIBUTING.md for detailed guidelines.

### Development Guidelines

- Follow coding standards (PSR-12 for PHP, Airbnb for JavaScript)
- Write tests for new features
- Update documentation
- Use conventional commit messages

## Contact Information

### Support Team

- **General Support**: support@zajwal.com
- **Technical Support**: tech@zajwal.com
- **Security Issues**: security@zajwal.com
- **Conduct Issues**: conduct@zajwal.com

### Response Times

- **Critical Issues**: Within 24 hours
- **General Support**: Within 48 hours
- **Feature Requests**: Within 1 week
- **Bug Reports**: Within 3 days

### Languages Supported

- **English**: Primary support language
- **Arabic**: Full support available
- **Other Languages**: Limited support

## Resources

### Official Documentation

- [PHP Documentation](https://www.php.net/docs.php)
- [JavaScript Documentation](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [Bootstrap Documentation](https://getbootstrap.com/docs/)
- [Webpack Documentation](https://webpack.js.org/concepts/)

### Community Resources

- [GitHub Discussions](https://github.com/your-repo/discussions)
- [Stack Overflow](https://stackoverflow.com/questions/tagged/investment-book)
- [Reddit Community](https://reddit.com/r/investmentbook)

### Learning Resources

- [PHP Best Practices](https://phptherightway.com/)
- [Modern JavaScript](https://javascript.info/)
- [CSS Guidelines](https://cssguidelin.es/)
- [Web Development](https://developer.mozilla.org/en-US/docs/Web)

---

**Note**: This support document is regularly updated. For the latest information, always check the current version in the repository. 