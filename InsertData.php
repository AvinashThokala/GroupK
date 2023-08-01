<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "employees");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO Employee (Employee_Name, Age, Mobile_Number, Location, Project_Name, Role)
VALUES
    ('John Doe', 28, 1234567890, 'New York', 'Project A', 'Developer'),
    ('Jane Smith', 32, 9876543210, 'London', 'Project B', 'Manager'),
    ('Michael Johnson', 25, 5554443333, 'Los Angeles', 'Project C', 'Tester')";

if(mysqli_query($link, $sql)){
    echo "Multiple records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>