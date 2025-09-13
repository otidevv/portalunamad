# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 12 application using:
- PHP 8.2+
- SQLite database (database/database.sqlite)
- Vite for asset bundling
- Tailwind CSS 4 for styling
- Laravel Pint for code formatting

## Essential Commands

### Development
```bash
# Start all development services (server, queue, logs, vite)
composer dev

# Start individual services
php artisan serve              # Start development server
php artisan queue:listen       # Start queue worker
php artisan pail               # Watch application logs
npm run dev                    # Start Vite dev server
```

### Testing
```bash
# Run all tests
composer test
# Or directly
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run specific test method
php artisan test --filter test_example_method
```

### Code Quality
```bash
# Format PHP code with Laravel Pint
./vendor/bin/pint

# Format specific file
./vendor/bin/pint app/Http/Controllers/Controller.php
```

### Build & Assets
```bash
# Build frontend assets for production
npm run build

# Install dependencies
composer install
npm install
```

### Database
```bash
# Run migrations
php artisan migrate

# Fresh migration (drop all tables and re-run)
php artisan migrate:fresh

# Run seeders
php artisan db:seed
```

### Artisan Commands
```bash
# Create new controller
php artisan make:controller NameController

# Create new model with migration
php artisan make:model ModelName -m

# Create new migration
php artisan make:migration create_table_name

# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

## Architecture

### Directory Structure
- `app/` - Application logic
  - `Http/Controllers/` - HTTP controllers
  - `Models/` - Eloquent models
  - `Providers/` - Service providers
- `routes/` - Application routes
  - `web.php` - Web routes
  - `console.php` - Console commands
- `database/` - Database files
  - `migrations/` - Database migrations
  - `factories/` - Model factories for testing
  - `seeders/` - Database seeders
- `resources/` - Frontend resources
  - `views/` - Blade templates
  - `css/` - Stylesheets
  - `js/` - JavaScript files
- `public/` - Publicly accessible files
- `storage/` - Application storage (logs, cache, uploads)
- `tests/` - Application tests
  - `Feature/` - Feature tests
  - `Unit/` - Unit tests

### Key Conventions
- Models use Eloquent ORM and are located in `app/Models/`
- Controllers follow RESTful conventions in `app/Http/Controllers/`
- Routes are defined in `routes/web.php` for web routes
- Views use Blade templating engine in `resources/views/`
- Database uses SQLite by default (configurable in `.env`)
- Frontend uses Vite for bundling and Tailwind CSS for styling