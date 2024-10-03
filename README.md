# Blog Platform

This is a simple blog platform that allows users to sign up, log in, and manage their personal blog posts. Users can create, edit, delete, and publish their posts. The application is built using PHP and MySQL, with a responsive front-end design.

## Features

- User Authentication (Sign-Up, Log-In)
- Create, Edit, Delete Blog Posts
- View Published Posts
- Search Functionality for Blog Posts
- Responsive Design for Desktop and Mobile
- Draft Auto-Save Feature

## Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- AJAX (for enhanced user experience)
- TinyMCE or Quill (for rich text editing)

## Prerequisites

Before you begin, ensure you have the following installed:

- [XAMPP] or a similar PHP server
- A web browser (e.g., Chrome, Firefox)

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone

2. **Navigate to the Project Directory**
   cd blog-platform

3. **Copy the Project to XAMPP's htdocs**
   C:\xampp\htdocs\

4.**Create the Database**
Open your web browser and go to http://localhost/phpmyadmin.
Click on Databases and create a new database named blog_platform.
Run the following SQL commands to create the necessary tables:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    tags VARCHAR(255),
    status ENUM('draft', 'published') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

5. **Configure Database Connection**
6. **Start XAMPP**
7. **Open Your Web Browser**


