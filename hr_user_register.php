<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn= new mysqli ($servername, $username,$password,$dbname);

if ($conn->connect_error){
    die("Connection Error! Check your connection.". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $username= $_POST['username'];
    $password= $_POST['password'];

//To encrypt the password from hackers
$hashPassword= password_hash($password, PASSWORD_DEFAULT);

$sql= "INSERT INTO users (username, password) VALUES 
    ('$username', '$hashPassword')";

if ($conn->query($sql)===TRUE) {
    echo "Your Registeration was successful";
} else{
    echo "Error! could not register user". $conn->error;
}

}
$conn->close();
?>