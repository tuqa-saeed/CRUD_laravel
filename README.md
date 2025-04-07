# GreenRoots (E-Commerce Website Project)

Green Roots is a passionate project dedicated to selling and planting trees, one sapling at a time. Our mission is to make greenery accessible and beautiful in every home, school, and city.

This is an e-commerce website built using **Laravel**, allowing users to view and purchase products online. The project includes user authentication, product management, and order tracking, along with an admin panel for managing products and orders.

## Features
- **User Authentication**: Register, login, logout
- **Product Management**: Add, update, and delete products(soft delete)
- **Cart and Checkout**: Manage cart items and proceed with checkout
- **Order Management**: View and manage user orders
- **Admin Panel**: Admin users can manage products and orders

## Technologies Used
- **Laravel** (PHP Framework)
- **MySQL** (Database)
- **JWT Authentication** (for secure login)
- **CSS & JavaScript** (for front-end interactivity)
- **Blade** (for templating engine)

## Installation

To get started with the project, follow these steps:

### Step 1: Clone the repository
```bash
git clone https://github.com/your-username/your-repository.git


### Step 2: Navigate to the project directory
cd your-repository

##Step 3: Install dependencies
composer install

### Step 4: Set up the environment file
Copy the .env.example file to .env and update your database credentials and other settings:
cp .env.example .env

###Step 5: Generate the application key
php artisan key:generate

### Step 6: Run migrations to set up the database
php artisan migrate

### Step 7: Serve the application
php artisan serve

### Step 8: Open the app in the browser
Visit the following URL:
http://127.0.0.1:8000
