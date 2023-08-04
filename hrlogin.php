<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn= new mysqli ($servername, $username,$password,$dbname);

if ($conn->connect_error){
    die("Connection Error! Check your connection.". $conn->connect_error);
} 

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

// Verify user login credentials from the employees database
    $sql = "SELECT id, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
//Output if User authentication successful
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];

//Redirect to the hr_dashboard if successfully logged in
        header('Location: hr_dashboard.php');
        exit;
    } else {
//Output if login is unsuccessful
        echo "Invalid username or password!";
    }
}
$conn->close();
?>
