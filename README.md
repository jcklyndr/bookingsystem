# Spa Booking System — OASIS

A web-based booking system for spa appointments built with Laravel.

## Requirements

Make sure the following are installed on your machine before setting up the project:

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL (or any database supported by Laravel)
- Git

## Installation & Setup Guide

### 1. Clone the Repository

```bash
git clone <REPOSITORY_URL>
cd bookingsystem
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Environment Setup

Copy the example environment file and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

Open the `.env` file and configure your database connection:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

This project also uses **Mailtrap (sandbox)** for email testing and **PayPal Sandbox** for payment testing. Add the following to your `.env` as well:

```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password

PAYPAL_CLIENT_ID=your_paypal_sandbox_client_id
PAYPAL_SECRET=your_paypal_sandbox_secret
PAYPAL_MODE=sandbox
PAYPAL_CURRENCY=PHP
```

> **Note:** Both Mailtrap and PayPal are configured in **sandbox/test mode**. Get your Mailtrap credentials from your [Mailtrap inbox settings](https://mailtrap.io), and your PayPal sandbox credentials from the [PayPal Developer Dashboard](https://developer.paypal.com).

### 4. Run Migrations

```bash
php artisan migrate
```

### 5. Link Storage

```bash
php artisan storage:link
```

### 6. Install Frontend Dependencies & Build Assets

In a separate terminal:

```bash
npm install
npm run dev
```

### 7. Serve the Application

```bash
php artisan serve
```

The app should now be running at `http://127.0.0.1:8000`.

## Notes

- Make sure your database server is running before running migrations.
- If you encounter permission issues with storage or cache, run:
    ```bash
    php artisan storage:link
    php artisan config:clear
    php artisan cache:clear
    ```

![OASIS Homepage](public/assets/images/spa-booking-mockups.png)
