# Spa Booking System — OASIS

# OASIS: On-The-Go Spa Relaxation System

OASIS is an innovative, web-based spa reservation platform designed specifically for travelers. Located near major airports, OASIS allows busy commuters and jet-setters to seamlessly browse, schedule, and pay for relaxing spa treatments right from their phones or laptops before they even arrive at their destination.

---

## 🚀 Key Features

### 🏢 Admin Management Dashboard

Designed for OASIS administrators to oversee operations smoothly from a single centralized hub:

- **Branch Status Tracking:** Real-time monitoring and updating of branch availability.
- **Service Configuration:** Easily add, modify, or remove spa treatments, packages, and pricing details.
- **Reservation Analytics:** Track the total number of bookings and revenue metrics across all locations.

### 📅 Easy Booking System

- **Pre-arrival Scheduling:** Enables users to book spa treatments ahead of time to align perfectly with their flight schedules.
- **Cross-Device Compatibility:** Responsive web design that works beautifully on both laptops and mobile smartphones.

### 💆 Browse Services

- **Diverse Service Catalog:** Users can explore a wide spectrum of curated treatments tailored to travel stress, ranging from quick, express massages to comprehensive, deeply rejuvenating spa experiences.
- **Detailed Views:** Check room types (e.g., _Mt. Pinatubo Haven_, _Davao Oasis_), capacities, unique scenic views, and clear pricing upfront.

### 💳 Secure Online Payments

- **PayPal Integration:** Features a fast, trusted, and secure payment gateway for immediate booking confirmation, minimizing hassles at the front desk.

### 🔐 Role-Based Access Control (RBAC)

- **Secure Authentication:** Ensures data privacy and system integrity by distinguishing user permissions (e.g., Customers vs. Administrators) and restricting dashboard features accordingly.

---

## 🛠️ Technology Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** _(Insert your backend framework here, e.g., Node.js / Python Django / PHP)_
- **Database:** _(Insert your database here, e.g., MySQL / PostgreSQL / MongoDB)_
- **Payment Gateway:** PayPal REST APIs

---

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
