# Laravel Blog Project

The Laravel Blog Project is a versatile and user-friendly web application built on the Laravel framework, designed to simplify the process of creating and managing blog content. Whether you are a developer looking for a starting point for your blog or a business in need of an internal content management system, this project provides a solid foundation with essential features.

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)


## Features

**User Authentication:** The project comes with a robust user authentication system, allowing users to register, log in, and manage their accounts securely.

**Blog Post Management (CRUD):** The application supports the fundamental CRUD operations (Create, Read, Update, Delete) for blog posts. Users can easily create new posts, edit existing ones, and delete posts as needed.

**Responsive Design:** The user interface is designed to be responsive, ensuring optimal user experience across a variety of devices, including desktops, tablets, and mobile phones.


## Requirements

Make sure you have the following requirements installed on your machine:

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (for npm)
- [MySQL](https://www.mysql.com/) 

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/laravel-blog.git
   ```

2. Navigate to the project directory:

   ```bash
   cd laravel-blog
   ```

3. Goto database folder:

   ```bash
   import the sql file 
   ```


4. Copy the `.env.example` file to create a new `.env` file:

   ```bash
   cp .env.example .env
   ```


5. Configure your database in the `.env` file:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=your-database-host
   DB_PORT=your-database-port
   DB_DATABASE=your-database-name
   DB_USERNAME=your-database-username
   DB_PASSWORD=your-database-password
   ```

6. Start the apache server:

     Access the application at [http://localhost/laravel-blog](http://localhost/laravel-blog).
      ##

7. Login credential:

   ```bash
   Username: admin@gmail.com
   password: 123456
   ```


## Usage

- Visit [http://localhost/laravel-blog](http://localhost/laravel-blog) in your browser.
- Register a new account or log in if you already have one.
- Create, edit, and delete blog posts from the dashboard.
- Create, edit, and delete Tags from the dashboard.
- Create, edit, and delete category from the dashboard.



## License

This project is open-source and available under the [MIT License](LICENSE).
