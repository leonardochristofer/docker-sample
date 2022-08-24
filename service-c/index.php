<?php

// MySQL service named at docker-compose.yml
$host = 'mysql';

// Database user
$user = 'MYSQL_USER';

// Database password
$pass = 'MYSQL_PASSWORD';

// Database name
$mydatabase = 'MYSQL_DATABASE';

// Check MySQL connection status
$conn = new mysqli($host, $user, $pass, $mydatabase);

// Simple select query
$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " | " . $user->password;
    echo "<br>";
}

?>