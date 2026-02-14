# Namaq Project

## Description
A Laravel-based web application for **Namaq - Interior Design & Architecture**, a leading studio specializing in commercial, residential, and administrative projects. The application serves as a dynamic portfolio and service showcase, allowing the administration to manage content, projects, and theme settings via a comprehensive backend.

## Features
- **Dynamic Content Management**: Fully integrated **Filament Admin Panel** for managing projects, services, team members, and testimonials.
- **Project Portfolio**: Categorized project showcase with detailed views and gallery support.
- **Service Listings**: Dynamic service pages with descriptions and imagery.
- **Theme Customization**: Admin-controlled theme settings (primary/secondary colors) with live frontend application via CSS variables.
- **Responsive Design**: Optimized for all devices with a modern, dark-themed UI (customizable).
- **SEO Management**: Integrated SEO settings for pages and projects.

## Tech Stack
- **Framework**: Laravel 12.x
- **Admin Panel**: Filament
- **Frontend**: Blade Templates, Bootstrap, jQuery, Revolution Slider
- **Database**: MySQL

## Live Demo
[https://namaqarch.com/](https://namaqarch.com/)

## Installation
1. Clone the repository:
```bash
git clone https://github.com/youssefahmedtalaat/Namaq.git
cd Namaq
```

2. Install dependencies:
```bash
composer install
npm install && npm run build
```

3. Copy `.env.example` to `.env` and configure your database:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Run migrations and seeders:
```bash
php artisan migrate --seed
```

6. Start the development server:
```bash
php artisan serve
```
