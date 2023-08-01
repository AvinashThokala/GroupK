<?php
include('config.php');?>
<h2>update Employee</h2>
<form action="update.php" method="POST">
    Employee_Name: <input type="text" name="name" required><br>
    Mobile_Number: <input type="number" name="number" required><br>
    <input type="submit" name="submit" value="Add Employee">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $sql = "UPDATE Employee SET Mobile_Number = $number
WHERE Employee_Name = '$name';";

    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();
?>
<br>
<a href="index.php">Back to employee List</a>

