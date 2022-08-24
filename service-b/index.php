<?php

// MySQL service named at docker-compose.yml.
$host = 'mysql';

// Database user
$user = 'MYSQL_USER';

// Database password
$pass = 'MYSQL_PASSWORD';

// Check MySQL connection status
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}

?>