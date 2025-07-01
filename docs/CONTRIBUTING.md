# Contributing to Investment Book

Thank you for your interest in contributing to the Investment Book project! This document provides guidelines and information for contributors.

## Table of Contents

- [Code of Conduct](#code-of-conduct)
- [How Can I Contribute?](#how-can-i-contribute)
- [Development Setup](#development-setup)
- [Coding Standards](#coding-standards)
- [Pull Request Process](#pull-request-process)
- [Reporting Bugs](#reporting-bugs)
- [Suggesting Enhancements](#suggesting-enhancements)

## Code of Conduct

This project and everyone participating in it is governed by our Code of Conduct. By participating, you are expected to uphold this code.

### Our Standards

- Use welcoming and inclusive language
- Be respectful of differing viewpoints and experiences
- Gracefully accept constructive criticism
- Focus on what is best for the community
- Show empathy towards other community members

## How Can I Contribute?

### Reporting Bugs

- Use the GitHub issue tracker
- Include detailed steps to reproduce the bug
- Include browser and operating system information
- Include screenshots if applicable

### Suggesting Enhancements

- Use the GitHub issue tracker
- Describe the enhancement in detail
- Explain why this enhancement would be useful
- Include mockups or examples if possible

### Code Contributions

- Fork the repository
- Create a feature branch
- Make your changes
- Add tests if applicable
- Submit a pull request

## Development Setup

### Prerequisites

- PHP 8.0 or higher
- Composer
- Node.js 16 or higher
- npm or yarn
- Git

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/investment-book.git
   cd investment-book
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Build frontend assets**
   ```bash
   npm run build
   ```

5. **Start development server**
   ```bash
   make dev
   ```

### Docker Setup (Alternative)

```bash
# Start all services
make docker-up

# Stop all services
make docker-down
```

## Coding Standards

### PHP Standards

- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Add comments for complex logic
- Use type hints where possible
- Keep functions small and focused

### JavaScript Standards

- Use ES6+ features
- Follow Airbnb JavaScript Style Guide
- Use meaningful variable and function names
- Add JSDoc comments for functions
- Use const and let instead of var

### CSS/SCSS Standards

- Use BEM methodology for class naming
- Use SCSS variables for colors and spacing
- Keep selectors shallow (max 3 levels)
- Use meaningful class names
- Comment complex CSS rules

### File Naming

- Use kebab-case for file names
- Use descriptive names
- Group related files in directories

## Pull Request Process

1. **Fork the repository**
2. **Create a feature branch**
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. **Make your changes**
4. **Run tests and checks**
   ```bash
   make test
   make quality
   ```
5. **Commit your changes**
   ```bash
   git commit -m "feat: add new feature"
   ```
6. **Push to your fork**
   ```bash
   git push origin feature/your-feature-name
   ```
7. **Create a pull request**

### Commit Message Format

Use conventional commit format:

```
type(scope): description

[optional body]

[optional footer]
```

Types:
- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation changes
- `style`: Code style changes
- `refactor`: Code refactoring
- `test`: Test changes
- `chore`: Build process or auxiliary tool changes

Examples:
```
feat(navigation): add mobile menu toggle
fix(analytics): resolve tracking code issue
docs(readme): update installation instructions
```

## Testing

### Running Tests

```bash
# Run PHP tests
composer test

# Run JavaScript tests
npm test

# Run all tests
make test
```

### Writing Tests

- Write tests for new features
- Ensure good test coverage
- Use descriptive test names
- Test both success and failure cases

## Documentation

### Code Documentation

- Add comments for complex logic
- Use PHPDoc for PHP functions
- Use JSDoc for JavaScript functions
- Keep documentation up to date

### User Documentation

- Update README.md for new features
- Add examples and usage instructions
- Include screenshots when helpful
- Keep documentation clear and concise

## Translation

### Adding New Languages

1. Create language directory in `lang/`
2. Add translation files
3. Update configuration
4. Test translations

### Translation Guidelines

- Maintain consistent terminology
- Use proper grammar and punctuation
- Consider cultural context
- Test with native speakers

## Security

### Security Guidelines

- Never commit sensitive data
- Use environment variables for secrets
- Validate and sanitize all inputs
- Follow security best practices
- Report security issues privately

### Reporting Security Issues

If you discover a security vulnerability, please report it privately to:

- Email: security@zajwal.com
- Use the security issue template on GitHub

## Getting Help

### Questions and Support

- Check existing issues and discussions
- Search documentation
- Ask questions in discussions
- Join our community chat

### Resources

- [PHP Documentation](https://www.php.net/docs.php)
- [JavaScript Documentation](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [Bootstrap Documentation](https://getbootstrap.com/docs/)
- [GitHub Guides](https://guides.github.com/)

## Recognition

Contributors will be recognized in:

- Project README.md
- Release notes
- Contributor hall of fame
- Special mentions in documentation

Thank you for contributing to the Investment Book project! 