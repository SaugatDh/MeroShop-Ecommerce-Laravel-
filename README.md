
# MeroShop - 6th Semester Project

**MeroShop** is an online shopping platform developed as part of our 6th-semester project for our course. This project is a group effort and is designed to provide a user-friendly online shopping experience with features like product browsing, shopping cart, order management, and user authentication.

## Team Members

- **Saugat Dhungana** - [GitHub](https://github.com/SaugatDh)
- **Anup Ghimire**
- **Anil Tajpuriya**
- **Nikesh Dhakal**
- **Suman Basnet**

## Features

- **User Registration and Authentication**: Users can create accounts and log in securely.
- **Product Catalog**: Browse and search for products across different categories.
- **Shopping Cart**: Add products to the cart and manage the items before checkout.
- **Order Management**: View past orders and track the status of current orders.
- **Admin Dashboard**: Admin users can manage products, view customer orders, and more.

## Tech Stack

- **Frontend**: Vite (with Blade templating)
- **Backend**: Laravel
- **Database**: MySQL
- **Authentication**: Laravel built-in authentication system (using Laravel Breeze or Jetstream for login and registration)

## Installation

To run the project locally, follow these steps:

### Prerequisites

Make sure you have the following installed:

- **PHP** (v8.0 or higher)
- **Composer** (for PHP dependency management)
- **Node.js** (v14 or higher)
- **npm** (Node Package Manager)
- **MySQL** (or another compatible database)

### Steps to Run

1. **Clone the repository**:

   ```bash
   git clone https://github.com/SaugatDh/MeroShop.git
   ```

2. **Navigate to the project directory**:

   ```bash
   cd MeroShop
   ```

3. **Install PHP dependencies**:

   ```bash
   composer install
   ```

4. **Set up your `.env` file**:

   Copy the `.env.example` file to `.env` and configure the database and other environment variables.

   ```bash
   cp .env.example .env
   ```

5. **Generate the application key**:

   ```bash
   php artisan key:generate
   ```

6. **Set up the database**:

   Run the migrations to set up the database schema.

   ```bash
   php artisan migrate
   ```

7. **Install frontend dependencies**:

   ```bash
   npm install
   ```

8. **Start the development server**:

   ```bash
   npm run dev
   ```

9. **Run the Laravel server**:

   ```bash
   php artisan serve
   ```

10. **Visit the application**:

    Open your browser and go to `http://localhost:8000` to see the application running.

## Usage

- **Customer Mode**: Browse products, add them to your cart, and place orders.
- **Admin Mode**: Login as an admin to manage products, view and update orders.

## Contribution

Feel free to fork the repository and submit a pull request for any improvements or bug fixes.

### Team Contributions:

- **Saugat Dhungana**: Project setup, backend development (Laravel), authentication setup.
- **Anup Ghimire**: Frontend UI design, shopping cart functionality.
- **Anil Tajpuriya**: Backend API development, order management.
- **Nikesh Dhakal**: Admin dashboard, order management.
- **Suman Basnet**: Final testing and deployment setup.
### Make sure to work with the stripe in the .env file and the database. Credits
- This project was inspired by the [YouTube tutorial](https://www.youtube.com/@WebTechKnowledge).



## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
