<?php
$servername = "localhost";
$username = "root";
$password = "20594";
$dbname = "db2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*
$sql = "CREATE DATABASE myDB3";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/


// sql to create table
/*
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";*/

/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Manik', 'Anand', 'infomanik.anand@gmail.com')";
*/

$sql="delete from MyGuests where lastname='Doe'";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

