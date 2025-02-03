# Basic Web Auth

This project is a basic web authentication system built with PHP. It includes user registration, login, and logout functionalities, as well as a protected dashboard for authenticated users.

## Features

- User Registration
- User Login
- User Logout
- Protected Dashboard
- Error Handling

## File Structure

```
/Basic Web Auth
├── auth
│   ├── login.php
│   ├── logout.php
│   ├── register.php
├── template
│   ├── admin
│   │   └── dashboard.php
│   ├── auth
│   │   ├── login.php
│   │   └── register.php
│   ├── home.php
├── .htaccess
├── config.php
├── index.php
├── dashboard.php
└── README.md
```

## Setup

1. Clone the repository to your local machine.
2. Create a MySQL database and execute the provided SQL query to create the necessary tables:
```sql
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```
3. Update the `config.php` file with your database credentials.

## Usage

### Index Page

1. Navigate to the home page: `/index.php`
2. You will find links to login and register.

### Registration

1. Navigate to the registration page: `/auth/register.php`
2. Fill in the required fields and submit the form.
3. Proper error messages will be displayed if the username is already taken or if the passwords do not match.

### Login

1. Navigate to the login page: `/auth/login.php`
2. Enter your username and password, then submit the form.
3. Proper error messages will be displayed if the username or password is incorrect.

### Dashboard

1. After logging in, you will be redirected to the dashboard: `/dashboard.php`
2. The dashboard is protected and only accessible to authenticated users.

### Logout

1. Click the logout link on the dashboard to end your session.

## License

This project is licensed under the MIT License.
