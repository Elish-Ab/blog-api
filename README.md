<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Blog API

## Description
The Blog API is a RESTful API built with Laravel that allows users to manage blog posts. Users can register, log in, create, read, update, and delete posts.

## Installation Instructions
1. Clone the repository:
   ```bash
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```bash
   cd blog-api
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Set up your environment file:
   ```bash
   cp .env.example .env
   ```
5. Generate the application key:
   ```bash
   php artisan key:generate
   ```
6. Run the migrations:
   ```bash
   php artisan migrate
   ```

## API Endpoints
### Public Routes (No Authentication Required)
- `POST /register`: Register a new user.
- `POST /login`: Authenticate a user and return a token.

### Protected Routes (Sanctum Authentication)
- `GET /user`: Retrieve the authenticated user's information.
- `GET /posts`: Get all posts (requires authentication).
- `GET /posts/{post}`: Get a single post by ID (requires authentication).
- `POST /posts`: Create a new post (requires authentication).
- `PUT /posts/{post}`: Update an existing post by ID (requires authentication).
- `DELETE /posts/{post}`: Delete a post by ID (requires authentication).
- `POST /logout`: Logout the authenticated user.

## Data Models
### User Model
- **Attributes**:
  - `name`: The name of the user.
  - `email`: The email address of the user.
  - `password`: The password for the user account (hashed).
  
### Post Model
- **Attributes**:
  - `title`: The title of the post.
  - `content`: The content of the post.
  - `user_id`: The ID of the user who created the post.

## Usage Examples
- To register a new user, send a POST request to `/register` with the user's name, email, and password.
- To create a new post, send a POST request to `/posts` with the title and content.

## Contributing
Thank you for considering contributing to the Blog API! Please follow the guidelines in the repository for contributions.

## License
The Blog API is open-sourced software licensed under the MIT license.
