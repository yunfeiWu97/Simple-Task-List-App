# Simple Task App

This is my first small project using **PHP**, **Laravel**, and **LESS**. It also uses **PostgreSQL** to store data.  
The application is a simple task management system where you can add and view tasks.

## Features

- **Laravel Routing & Controllers**: Basic CRUD logic for tasks.
- **PostgreSQL Database**: Stores task data in a `tasks` table.
- **LESS Styling**: Demonstrates how to use LESS for custom styles.
- **Blade Templates**: Renders the task list and form for adding new tasks.

## Getting Started

1. Install PHP dependencies
bash
composer install

2. Install PHP dependencies
bash
composer install

3. Configure .env file
Update your .env with PostgreSQL details:
env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=task_db
DB_USERNAME=postgres
DB_PASSWORD=your_password

4. Run database migrations
bash
php artisan migrate

5. Compile assets
bash
npm run dev

6. Start the server
bash
php artisan serve

Ready to visit at `http://127.0.0.1:8000`

## Reflection

This project marks my first experience with **PHP**, **Laravel**, and **LESS**. Along the way, I faced several challenges, from setting up the development environment and configuring **PostgreSQL** to integrating LESS with Vite and troubleshooting directory structures. Each challenge became a learning opportunity, helping me navigate documentation, adjust configurations, and refine my workflow.

A key challenge was deploying **LESS** with **Vite**. Since Laravel defaults to Vite with Tailwind CSS, I had to modify the `vite.config.js` file to support LESS compilation. Additionally, **XAMPP** defaults to MySQL, so I had to switch the database to PostgreSQL. This required enabling the `pgsql` and `pdo_pgsql` extensions in `php.ini` and setting up a separate database server. Different terminal environments (Windows Git Bash vs. Linux/Mac) also caused issues with file paths, quoting, environment variables, and command behavior. Furthermore, version differences in Node and NPM led to compatibility issues.

Through these experiences, I learned the importance of reading documentation carefully, testing across different environments, and adapting configurations. This process strengthened my understanding of front-end build tools, environment-specific settings, and how to handle unexpected integration challenges.
