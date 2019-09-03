<?php
include 'dbconfig.php';

$sqltruncate = "DROP TABLE IF EXISTS menu_dishes";

if ($conn->query($sqltruncate) === TRUE) {
    echo "<br>Table droped";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS menu_dishes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
dishname VARCHAR(50) NOT NULL,
price FLOAT(5,2) NOT NULL,
category VARCHAR(50) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
    echo "Table menu_dish created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO `menu_dishes` (`dishname`, `price`, `category`)
         VALUES 
        ('Rice', 250.00, 'MAIN_DISH'),
        ('Kottu', 250.00, 'MAIN_DISH'),
        ('Briyani', 250.00, 'MAIN_DISH'),
        ('Pittu', 150.00, 'MAIN_DISH'),
        ('Vadai', 40.00, 'SIDE_DISH'),
        ('Patties', 20.00, 'SIDE_DISH'),
        ('Rolls', 30.00, 'SIDE_DISH'),
        ('Samosa', 30.00, 'SIDE_DISH')";

if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>