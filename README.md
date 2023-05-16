# Teknologi Server Assignment
This repository contains the source code for a simple web application that can be used to learn about server technology. The application is written in PHP and uses MySQL as a database.

### Deployment
Deploy the application on your AWS Student EC2 instance.
Follow these steps:
- Install Nginx, PHP 8.2, and MySQL 8.0+.
- Install the following php extensions:
  - mcrypt
  - openssl
  - mbstring
  - tokenizer
  - json
  - zip
  - pdo
  - xml
  - bcmath
  - ctype
  - mysqli
- Clone this repository to your EC2 instance.
- Create a database for the application.
- Import the data from the data.sql file into the database.
- Configure nginx to serve the application.
- The application MUST be accessible on HTTP (HTTPs is not required) via the server's public IP address.

### For Students
This application is an assignment for the Server Technology class at UIB.
To complete the assignment, you must deploy the application on your AWS Student EC2 instance and make sure that it is accessible on HTTP via the server's public IP address.

#### Tips
- Don't forget to open port 80 in the security group of your EC2 instance.
- You need to set nginx to serve this as default site.
- Use Ondrej PPA for latest PHP version.
- Use MySQL repository for latest MySQL version.
- You need to run `composer update` after cloning the repository.
- You need to run `php artisan key:generate` after cloning the repository.
- Don't forget to set .env file. Make sure it is pointed to correct database server.
- The endpoint for the application is `/info/php` and `/info/server`

### Useful Links
- Installing MySQL 8.0 on Ubuntu 22.04: https://computingforgeeks.com/how-to-install-mysql-8-on-ubuntu/
- Installing PHP 8.2 on Ubuntu 22.04: https://techvblogs.com/blog/install-php-8-2-ubuntu-22-04
