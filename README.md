## Laravel API Project

The "Laravel API" project is a backend solution designed to handle the storage and retrieval of customer information and invoices through a secure API. The project utilizes Laravel, a powerful PHP framework, and incorporates Sanctum for API authentication, ensuring secure access to sensitive data.

## Requirements 
-   Laravel <= 10.10
-   PHP <= 8.1
-   Composer Version 2.2
-   Apache (XAMPP)

## Installation

1. Clone the repo
   ```sh
   git clone [https://github.com/ShaniGajera1993/laravel-api.git]
   ```
2. Install Composer packages
   ```sh
   composer install
   ```
3. Copy the environment file & edit it accordingly
   ```sh
   cp .env.example .env
   ```

4. Generate an application key
   ```sh
   php artisan key:generate
   ```

5. Create a Database then migrate and seed
   ```sh
   php artisan migrate --seed

6. Serve the application
   ```sh
   php artisan serve
   ```
