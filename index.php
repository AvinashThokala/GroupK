<?php
include('config.php');

// Fetch all students from the database
$sql = "SELECT * FROM Employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Employee Management System</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Employee_Name</th>
                <th>Age</th>
                <th>Mobile_Number</th>
                <th>Location</th>
                <th>Project_Name</th>
                <th>Role</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['Employee_Name'] . "</td>
                <td>" . $row['Age'] . "</td>
                <td>" . $row['Mobile_Number'] . "</td>
                <td>" . $row['Location'] . "</td>
                <td>" . $row['Project_Name'] . "</td>
                
                
                <td><a href='delete_employee.php?id=" . $row['id'] . "'>Delete</a></td>
<td><a href='update.php?Employee_Name=" . $row['id'] . "'>Update</a></td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No employee found.";
}

$conn->close();
?>
<br>
<a href="add_employee.php">Add New Employee</a>
