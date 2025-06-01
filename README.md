# Railway Management System

A simple web-based Railway Management System built with PHP, HTML, CSS, and MySQL.

## Features

- User registration and login
- View and search train schedules
- Book train tickets
- View travel history
- User profile lookup
- Payment calculation (mockup)

## Project Structure

- `connection.php` - Database connection script
- `signup.html` / `registration_process.php` - User registration
- `login.html` / `login_process.php` - User login
- `home.html` - Main navigation page
- `train.php` - Search trains and book tickets
- `process.php` - Ticket booking processing
- `payment_page.php` / `payment.html` / `payment_confirmation.php` - Payment calculation and mockup
- `profile.php` - User profile search by NID
- `history.php` - View travel history by NID
- `railwaymanagementsystem.sql` - Database schema and sample data

## Setup Instructions

1. **Clone or Download the Repository**

2. **Database Setup**
   - Import `railwaymanagementsystem.sql` into your MySQL server.
   - Make sure your MySQL user/password matches those in `connection.php`.

3. **Run the Application**
   - Place all files in your web server's root directory (e.g., `htdocs` for XAMPP).
   - Access `home.html` via your browser (e.g., `http://localhost/railway/home.html`).

## Notes

- This project is for educational/demo purposes.
- Passwords are stored in plaintext for simplicity—**do not use in production**.
- Payment is a mockup and not connected to any real payment gateway.
