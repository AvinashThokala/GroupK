<?php
//Creating a connection to MySQL server ////////////////////////////////////////////////////////////
$servername = "localhost";
$username = "root"; 
$password = ""; 

$conn = new mysqli($servername, $username, $password);

//Output after checking the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$servername= "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn= new mysqli ($servername, $username,$password,$dbname);

if ($conn->connect_error){
    die("Connection Error! Check your connection.". $conn->connect_error);
} else{
    echo "Connected to Employee database successfully";
}

$conn->close();
?>