# PHP API — Basic Subscription System

A simple backend API built with PHP and MySQL to register users and verify their subscription status.

## Features
- Add new users  
- Check subscription status  
- MySQL database connection  
- JSON responses  
- Simple and clean API structure  

## Tech Stack
- PHP  
- MySQL  
- Apache/XAMPP  

## How to Use

1. Import the following SQL table:
```
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    status VARCHAR(50)
);
```

2. Place files in `/htdocs/api/`

3. Endpoints:
- **POST** `/create_user.php`  
- **GET** `/verify_subscription.php?email=example@mail.com`

## Purpose
Shows backend logic, REST API creation, and MySQL CRUD operations.
