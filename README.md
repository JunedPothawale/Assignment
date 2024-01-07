# Assignment Project

Welcome to the Assignment Project, a web app designed for seamless assignment management. This Laravel-based application provides robust features for users, focusing on essential functionalities such as login, signup, and authentication using MD5 hashing.

## Introduction

The Assignment Project is built to simplify the process of managing assignments, ensuring a smooth and secure experience for both administrators and users. With a strong emphasis on user authentication using MD5 hashing, this web app offers a reliable platform for users to create accounts, log in, and securely access assignment-related features.

Whether you're a student looking to submit assignments or an educator managing coursework, the Assignment Project has you covered. Let's dive into the details of setting up, configuring, and utilizing the app to enhance your assignment management workflow.

## Installation

To get started with the Assignment Project, follow these simple steps:

1. Clone the repository from GitHub:

   ```bash
   git clone https://github.com/JunedPothawale/Assignment.git
   ```

2. Navigate to the project directory:

   ```bash
   cd Assignment
   ```

3. Install dependencies using Composer:

   ```bash
   composer install
   ```

4. Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your database settings in the `.env` file.

7. Migrate the database:

   ```bash
   php artisan migrate
   ```

8. Seed the database with country, state, and city data:

   ```bash
   php artisan db:seed
   ```

9. Serve the application:

   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` in your browser to start using the Assignment Project.

## Usage

The Assignment Project facilitates CRUD operations for user sign-in and login, implementing MD5 hashing for authentication:

### Sign Up

1. Navigate to the registration page.
2. Fill in the required details.
3. Click the "Sign Up" button to create a new user account.

### Log In

1. Visit the login page.
2. Enter your credentials.
3. Click the "Log In" button to access your account.

### Features

- **Dashboard:**
  - Upon successful login, users will be redirected to the dashboard page.
  
  
- **Profile Page:**
  - Users can view their details on the profile page.

## Contributing

Contributions to the Assignment Project are highly encouraged! If you have a feature you'd like to add, follow these steps:

1. Fork the repository.
2. Create a new branch for your feature:

   ```bash
   git checkout -b branch-name
   ```

3. Implement your feature and ensure it works as expected.
4. Add your changes:

   ```bash
   git add .
   ```
5. Update the README with documentation for your feature.
6. Commit your changes:

   ```bash
   git commit -m "Add Feature Message To Show"
   ```

7. Push to your branch:

   ```bash
   git push origin branch-name
   ```

8. Open a pull request on GitHub, providing a detailed description of your feature and changes.

# Feel free to contribute any feature you think will enhance the Assignment Project. Happy coding!

