# How To Run This Project

## Prerequisites
- Node.js (https://nodejs.org/en/) installed on your machine.
- installed composer.

## Installation Steps
1. Install NPM Dependencies
    Run the following command to install necessary NPM packages:

    `npm install`

    If you haven't installed Node.js, download and install it from [here](https://nodejs.org/en/download).

2. Update Composer Packages
    Update the composer packages by running:

    `composer update`

3. Environment Setup
    Copy the .env.example file and rename the copy to .env:
    `cp .env.example .env`
    Open .env file in a text editor and set the database connection details for your MySQL server.

4. Generate Application Key
    Generate a new application key with the artisan command:
    `php artisan key:generate`

5. Database Creation
    Create a new database in your PHPMyAdmin named manajemen-gudang.

6. Run Migrations
    To set up your database tables, run the migration command:
    `php artisan migrate`.</s>

7. Database Seeding
    Seed your database with initial data by running:
    `php artisan db:seed`</s>

8. Compile Assets with NPM
    Compile your front-end assets using:
    `npm run dev`</s>

9. Start the Laravel Server
    Start your Laravel application using:
    `php artisan serve`</s>