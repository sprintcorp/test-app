## Project Overview

This solution is build using laravel 9, HTML, CSS, Bootstrap5 and Jquery. This application allows user to perform crud operation on employee. Role delegation within the app allows admin of the application manage user roles alongside permission attached to those roles. Currently the app only allow CRUD operation for users but ROLE and PERMISSION seeder file had been created to help manage asigned user type, subsequently improvement will be done to help admin manage roles and permission.

## Implementation

A model for User, Roles and Permission was created to help  question data to and from the table within the database. The Role and Permission has a `Many-To-Many` relationship because roles can have multiple permission and permission ca also have multiple roles, User has a `Many-To-One` relationship. The entry point of the application is `http://127.0.0.1:8000`. `8000` serves as the port and may vary depending on which port you decide to expose the application to.

## Project setup


- Clone the project from repository using the `https://github.com/sprintcorp/test-app.git` into a directory on your pc
- Move to project directory `cd test-app` 
- Run `composer install` to install all packages.
- When the above step has been done you the proceed to create database, the database use during development is mysql database and Eloquent ORM is used to interact with the database,
- Create a .env file the copy .env.example to create enviroment variable for this application which houses simple configuration text file that is used to define some variables passed into the application's environment,
- Generate app key which is needed for the application to function properly used for all encrypted data, like sessions,Password, remember token using `php artisan key:generate`.
- Run `php artisan migrate` which creates table in the database specified application .env file.
- Run `php artisan db:seed` to seed data into the database
- Run using `php artisan serve` which starts the application using laravel default port 8000 to run it on the system locally.
- Run `php artisan test` to run unit test of the application
## Usage

- View User `localhost:8000` 
#### Response

   <img src="https://res.cloudinary.com/sprintcorp/image/upload/v1649690636/test-app/Screenshot_851_zla1xs.png" width="800">


- Create User `localhost:8000` method `POST` 
#### Response

   <img src="https://res.cloudinary.com/sprintcorp/image/upload/v1649690633/test-app/Screenshot_846_lulce9.png" width="800">
    
#### Result    
    
   <img src="https://res.cloudinary.com/sprintcorp/image/upload/v1649690634/test-app/Screenshot_847_vsczca.png" width="800">
   
- Edit User `localhost:8000` method `PUT` 
#### Response

   <img src="https://res.cloudinary.com/sprintcorp/image/upload/v1649690633/test-app/Screenshot_848_rtxaah.png" width="800">
    
#### Result    
    
   <img src="https://res.cloudinary.com/sprintcorp/image/upload/v1649690641/test-app/Screenshot_849_ds6p9i.png" width="800">

