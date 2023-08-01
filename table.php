<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "employees");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE Employee(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Employee_Name VARCHAR(30) NOT NULL,
    Age INT(30) NOT NULL,
    Mobile_Number INT(70) NOT NULL,
    Location VARCHAR(30) NOT NULL,
    Project_Name VARCHAR(30) NOT NULL,      
    Role VARCHAR(30) NOT NULL
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>