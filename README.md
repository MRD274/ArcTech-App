# ArcTech-App

## Prerequisites

- A web server with PHP support (e.g., Apache, Nginx)
- MySQL or MariaDB database server
- Access to upload files via FTP or file manager
- PHP extensions: mysqli(usually enabled by default)
- PHP version 7.4 or higher recommended


## Setting up the Database

1. Create a new MySQL database on your server.

2. Import the SQL file `database/rivasde_arctech.sql` into your database using phpMyAdmin

   **Using phpMyAdmin:**

   - Go to phpMyAdmin, select the new database.
   - Click **Import**.
   - Choose `arctech_backup.sql` and click **Go**.
  
## Configure Database Connection
- Open the db.php file in the project root directory
- Update the variables to match your database setup
- <?php
- $host = 'localhost';
- $port = your port;
- $user = your_db_user;
- $pass = "your_db_password";
 -$dbname =  "your_database_name"';

- $conn = new mysqli($host, $user, $pass, $dbname, $port);

 - if ($conn->connect_error) {
     - die("Database connection failed: " . $conn->connect_error);
- }
- ?>

