<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlemployeeDB = "CREATE DATABASE employees";
if ($conn->query($sqlemployeeDB) === TRUE) {
    echo "DATABASE employees CFREATED SUCCESSFULLY";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>