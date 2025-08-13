# Laravel User Authentication and Profile Management Task

This project is a submission for the Intern Task by RazinSoft Limited. It features a complete user authentication system built from scratch without any starter kits, a user profile management system with file uploads, and a page to list all created profiles. The application is built using Laravel and styled with Tailwind CSS.

## Features

Custom Authentication: A complete user authentication system (register, login, logout) built using Laravel's built-in `Auth` class.

Route Protection: Routes for the dashboard and profile management are protected using Laravel's `auth` middleware, ensuring only logged-in users can access them.

**Profile Management:** Authenticated users can create a detailed profile with 8 fields, including a profile image.

**File Uploads:** Handles profile image uploads, validates them (mimes: `jpg,png`, max `2MB`), and stores them in the `public/storage/profiles` directory.

**Eloquent ORM:** Uses Eloquent for all database interactions and relationships between `Users` and `Profiles`.

**Blade Templating:** All frontend views are created using Laravel's Blade templating engine, with a master layout for consistency.

**Security:** Implements CSRF protection on all forms and securely hashes user passwords.

**Profile Listing:** A page to display all user profiles in a card layout, featuring their name, email, phone, and profile image thumbnail. The database query is optimized to prevent N+1 issues.

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

-   PHP >= 8.1
-   Composer
-   Node.js & NPM
-   A database server (e.g., MySQL, MariaDB)

## Installation

### 1. Clone the repository:

```bash
git clone https://github.com/tanvirulislm/laravel-auth-task-by-RazinSoft
cd laravel-auth-task-by-RazinSoft
```

### 2. Install PHP dependencies:

```bash
composer install
```

Install NPM dependencies:

```Bash
npm install && npm run build
```

### 3. Create your environment file:

Copy the `.env.example` file to a new file named `.env`.

```Bash

cp .env.example .env
```

### 4. Generate an application key:

```Bash
php artisan key:generate
```

### 5. Configure the database:

Open your `.env` file and update the `DB_*` variables with your database credentials.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 6. Run database migrations:

This will create the
`users` and `profiles` tables in your database.

```Bash
php artisan migrate
```

### 7. Create the storage link:

This is essential for making uploaded profile images publicly accessible.

```Bash
php artisan storage:link
```

### 8. Serve the application:

```Bash
php artisan serve
```

The application will be available at `http://127.0.0.1:8000.`

## How to Use the Application

### 1. Register a new user:

-   Navigate to the `/register` page.
-   Fill in your name, email, and password (must be at least 8 characters) and submit the form.
-   You will be redirected to the login page upon successful registration.

### 2. Login:

-   Navigate to the `/login` page.
-   Enter your credentials.
-   Upon successful login, you will be redirected to your dashboard.

### 3. Create a Profile:

-   From the dashboard or the header, click on "Create Profile".
-   You will be taken to a form with 8 fields.
-   Fill out all the required details and upload a profile image.
-   After submission, you will be redirected to your profile view page.

### 4. View Profiles:

-   From the dashboard, click on "View Profiles".
-   This will take you to a page listing all user profiles in the database.
-   You can click the "View Profile" button on any card to see the full details of that profile.
