# Overview

This is a Laravel application built with the official Livewire starter kit. The project combines Laravel's robust backend framework with Livewire's reactive frontend components, creating a modern full-stack PHP application. The application uses Livewire Volt for simplified component syntax and Flux for UI components, with TailwindCSS for styling. This setup provides a reactive, SPA-like experience while maintaining the simplicity of server-side rendering.

# User Preferences

Preferred communication style: Simple, everyday language.

# System Architecture

## Frontend Architecture
- **Livewire**: Provides reactive components that update dynamically without page refreshes
- **Livewire Volt**: Simplified syntax for creating Livewire components with less boilerplate
- **Livewire Flux**: UI component library providing pre-built, accessible components
- **TailwindCSS v4**: Utility-first CSS framework for styling with custom theme configuration
- **Vite**: Modern build tool for asset compilation and hot module replacement

## Backend Architecture
- **Laravel 12**: PHP framework providing MVC architecture, routing, middleware, and ORM
- **PHP 8.2+**: Modern PHP version with improved performance and type safety
- **Composer**: Dependency management for PHP packages
- **Artisan**: Command-line interface for Laravel operations

## Development Tools
- **Laravel Pint**: Code style fixer for consistent formatting
- **PestPHP**: Modern testing framework for unit and feature tests
- **Laravel Sail**: Docker-based development environment
- **Laravel Pail**: Log viewing tool for debugging

## Asset Pipeline
- **Vite Integration**: Hot reload during development and optimized builds for production
- **TailwindCSS Vite Plugin**: Direct integration for faster CSS processing
- **Autoprefixer**: Automatic vendor prefix handling for cross-browser compatibility

## Reactive Component Strategy
The application uses Livewire's component-based architecture where each component manages its own state and can respond to user interactions without full page reloads. Volt syntax reduces boilerplate code for simpler component creation, while Flux provides consistent, accessible UI elements.

# External Dependencies

## Core Framework Dependencies
- **Laravel Framework**: Web application framework and ecosystem
- **Livewire**: Full-stack reactive components for Laravel
- **Livewire Volt**: Simplified component syntax
- **Livewire Flux**: UI component library

## Frontend Build Tools
- **Vite**: Build tool and development server
- **TailwindCSS**: CSS framework with Vite plugin integration
- **Autoprefixer**: CSS post-processor for vendor prefixes
- **Axios**: HTTP client for AJAX requests

## Development and Testing
- **PestPHP**: Testing framework with Laravel plugin
- **Laravel Pint**: Code style formatter
- **Laravel Sail**: Docker development environment
- **Faker**: Test data generation library
- **Mockery**: Mocking framework for tests

## Build System
- **Composer**: PHP dependency management
- **NPM**: JavaScript package management
- **Rollup**: JavaScript bundler (via Vite)
- **Lightning CSS**: Fast CSS processor for optimization