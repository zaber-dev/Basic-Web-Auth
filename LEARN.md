# Learn More About This Project

## Overview
This project provides a basic web authentication system using PHP. It includes essential authentication functionalities like user registration, login, and logout, as well as a protected dashboard for authenticated users. The project is designed to be a minimal template, allowing users complete freedom to style and modify the structure as needed.

## Features
- User Registration with unique username and email validation.
- Secure User Login with password hashing.
- User Logout to end authenticated sessions.
- A protected dashboard that is only accessible to logged-in users.
- Proper error handling to improve user experience.
- Well-structured project architecture for easy customization.

## Technical Details
- The authentication system uses PHP and MySQL for user management.
- Passwords are securely hashed before storing in the database.
- A session-based authentication system ensures secure access.
- The project does not include any CSS to provide full styling flexibility.
- Includes `.htaccess` for better URL handling.

## How to Use
1. **Clone the Repository**
   ```sh
   git clone https://github.com/zaber-dev/Basic-Web-Auth.git
   cd Basic-Web-Auth
   ```
2. **Setup the Database**
   - Create a MySQL database.
   - Execute the provided SQL query to create the `users` table.
   ```sql
   CREATE TABLE users (
       id INT PRIMARY KEY AUTO_INCREMENT,
       username VARCHAR(50) NOT NULL UNIQUE,
       email VARCHAR(100) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL,
       created_at DATETIME DEFAULT CURRENT_TIMESTAMP
   );
   ```
3. **Configure the Database Connection**
   - Update `config.php` with your database credentials.

4. **Run the Project**
   - Open `index.php` in your browser.
   - Register a new user and log in to access the dashboard.

## Contribution
Contributions are welcome! If you find any issues or have improvements, feel free to submit a pull request.

