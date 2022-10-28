## About

This repo is a containerized installation of laravel, distributed for a testing workshop.

## Dependencies

This project uses Docker to install all of the necessary dependencies within a sandboxed container. To get started, ensure you have the following:

 - [docker](https://www.docker.com/products/docker-desktop/) (or [colima](https://github.com/abiosoft/colima)) : a tool for managing and running containers
 - [ddev](https://ddev.readthedocs.io/en/latest/users/install/ddev-installation/#system-requirements) : a tool that makes docker easier to use

 If you're using homebrew (macOS), the above dependencies can be installed easily:
 - `brew install homebrew/cask/docker`
 - `brew install drud/ddev/ddev`

## Installation

 1. `git clone http://github.com/nickworks/test-demo-laravel` to clone the project
 2. `cd test-demo-laravel` to navigate into the project directory
 3. `cp .env.example .env` to create an env file 
 4. `ddev start` to run the container
 5. `ddev ssh` to ssh into the container
 6. `composer update` to install PHP packages
 7. `php artisan key:generate` to generate Laravel's App Key value
 8. `php artisan migrate` to create tables in the database

 ## Stopping the container
 
 - `exit` will close the ssh connection to the container
 - `ddev stop` will stop the container
 - `ddev powerdown` will stop all containers managed by ddev

 ## Testing in Laravel

 - `php artisan make:test [TestName]` will make a new feature test file
 - `php artisan make:test [TestName] --unit` will make a new unit test file
 - `php artisan test` will run all tests
 - `php artisan test --filter=something` will run *some* tests
 - `php artisan test --coverage-html=output-directory` will generate a coverage report
