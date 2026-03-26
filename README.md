# sanderjochems.com

Personal portfolio website for Sander Jochems, built with Laravel.

This repository contains the source code for [sanderjochems.com](https://sanderjochems.com), including:
- personal profile and bio content
- professional experience and education timeline
- project highlights
- social/contact information
- sitemap generation for SEO

## Purpose

This project is used to host and maintain a personal portfolio website that presents:
- who I am and what I do (Cloud Engineer)
- my background, skills, and experience
- selected projects and external links

The site is intended as a public professional profile and portfolio.

## Tech Stack

### Languages
- PHP 8
- JavaScript (ES modules)
- CSS

### Backend Framework
- Laravel (`laravel/framework`)

### Frontend Tooling
- Vite
- `laravel-vite-plugin`
- Axios
- Lodash
- PostCSS

### Key PHP Packages
- `laravel/sanctum`
- `laravel/tinker`
- `spatie/laravel-export`
- `spatie/laravel-sitemap`
- `guzzlehttp/guzzle`

### Testing and Quality
- PHPUnit
- Laravel Pint

## Project Structure

- `app/` - Laravel application code (controllers, models, providers, etc.)
- `config/` - application and domain configuration (including personal portfolio data)
- `resources/views/` - Blade templates
- `resources/js/` - frontend JavaScript entrypoints
- `resources/css/` - frontend styles
- `routes/` - web/api/console/channel routes
- `public/` - web root and static assets

## Getting Started

### Prerequisites
- PHP 8.0+
- Composer
- Node.js + npm
- A database supported by Laravel (if needed for future extensions)

### Installation

1. Clone the repository

```bash
git clone https://github.com/Sander0542/sanderjochems.com.git
cd sanderjochems.com
```

2. Install PHP dependencies

```bash
composer install
```

3. Install JavaScript dependencies

```bash
npm install
```

4. Create environment file

```bash
cp .env.example .env
php artisan key:generate
```

5. Start development servers

In one terminal:

```bash
php artisan serve
```

In another terminal:

```bash
npm run dev
```

## Useful Commands

```bash
# Run tests
php artisan test

# Build assets for production
npm run build

# Laravel cache clear (when needed)
php artisan optimize:clear
```

## Configuration Notes

Portfolio content is primarily configured through Laravel config files, especially:
- `config/personal.php`

This includes sections such as:
- about/profile information
- social links
- education and experience entries
- projects and skills

## License

This project is open-source and available under the [MIT license](LICENSE).
