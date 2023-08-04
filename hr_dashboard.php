<?php
include('hrdbconnection.php');


$sql= "SELECT * FROM EmployeeRec";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<h2><b><u>Employee Management System </u></b></h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Employee_Name</th>
                <th>Age</th>
                <th>Mobile_Number</th>
                <th>Location</th>
                <th>Project_Name</th>
                <th>Project_Role</th>
            </tr>";

    while ($row=$result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['Employee_Name']."</td>
                <td>".$row['Age']."</td>
                <td>".$row['Mobile_Number']."</td>
                <td>".$row['Home_Location']."</td>
                <td>".$row['Project_Name']."</td>
                <td>".$row['Project_Role']."</td>

         <td><a href=delete_employee.php?id=". $row['id'].">Delete_Record</a><td>
        <td><a href='updaterecord.php?Employee_Name=" . $row['id'] . "'>Update_Record</a></td>
             </tr>";
         }
         echo "</table";

}else {
    echo "No employee found.";
}
$conn->close();
?>
<br>

<p><a href="add_employee.php"> Add New Employee </a></p>
